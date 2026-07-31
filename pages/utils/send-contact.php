<?php
/**
 * AJAX Contact Form Handler
 * Processes contact form submissions via Mailgun API and returns JSON response.
 */

header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Verify the request came from this site (basic CSRF check via origin/referer)
$allowed_origins = [
    'http://localhost',
    'http://localhost:80',
    'http://lavanyadeepak.github.io',
    'https://lavanyadeepak.github.io',
];
$origin = $_SERVER['HTTP_ORIGIN'] ?? $_SERVER['HTTP_REFERER'] ?? '';
$origin_ok = false;
foreach ($allowed_origins as $allowed) {
    if (strpos($origin, $allowed) === 0) {
        $origin_ok = true;
        break;
    }
}
if (!$origin_ok) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid request origin.']);
    exit;
}

// Include Mailgun configuration
require_once dirname(__DIR__, 2) . '/assets/includes/config.inc.php';

// --- Validate Input ---
$first_name = trim($_POST['first_name'] ?? '');
$last_name  = trim($_POST['last_name'] ?? '');
$email      = trim($_POST['email'] ?? '');
$phone      = trim($_POST['phone'] ?? '');
$message    = trim($_POST['message'] ?? '');

$errors = [];

// Validate First Name
if (empty($first_name)) {
    $errors[] = 'First Name is required.';
} elseif (strlen($first_name) > 50) {
    $errors[] = 'First Name must not exceed 50 characters.';
}

// Validate Last Name
if (empty($last_name)) {
    $errors[] = 'Last Name is required.';
} elseif (strlen($last_name) > 50) {
    $errors[] = 'Last Name must not exceed 50 characters.';
}

// Validate Email
if (empty($email)) {
    $errors[] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
} elseif (strlen($email) > 100) {
    $errors[] = 'Email must not exceed 100 characters.';
}

// Validate Phone (optional)
if (!empty($phone)) {
    $phone_clean = preg_replace('/[0-9\s\+\-\(\)\.]/', '', $phone);
    if (!empty($phone_clean)) {
        $errors[] = 'Please enter a valid phone number.';
    } elseif (strlen($phone) > 20) {
        $errors[] = 'Phone number must not exceed 20 characters.';
    }
}

// Validate Message
if (empty($message)) {
    $errors[] = 'Message is required.';
} elseif (strlen($message) > 5000) {
    $errors[] = 'Message must not exceed 5000 characters.';
}

// Honeypot check
$website = trim($_POST['website'] ?? '');
if (!empty($website)) {
    echo json_encode(['success' => true, 'message' => 'Thank you for your message!']); // Lie to bots
    exit;
}

// Time check
$timestamp = (int)($_POST['timestamp'] ?? 0);
if (time() - $timestamp < 3) {
    $errors[] = 'Please wait a moment before submitting the form.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode('<br>', $errors)]);
    exit;
}

// --- Send Email via Mailgun API ---
$from_name  = $first_name . ' ' . $last_name;
$from_email = $email;
$to_email   = 'lavanya.deepak@outlook.com'; 
$subject    = 'Contact Form Submission from ' . $from_name;

$email_body  = "You have received a new contact form submission:\n\n";
$email_body .= "First Name: " . $first_name . "\n";
$email_body .= "Last Name: " . $last_name . "\n";
$email_body .= "Email: " . $email . "\n";
$email_body .= "Phone: " . (!empty($phone) ? $phone : 'Not provided') . "\n\n";
$email_body .= "Message:\n" . $message . "\n";

// Build Mailgun request
$mailgun_domain = $mailgunSandboxDomain;
$mailgun_url    = $mailgunBaseAPIUrl . '/v3/' . $mailgun_domain . '/messages';

$post_data = [
    'from'    => $from_name . ' <' . $from_email . '>',
    'to'      => $to_email,
    'subject' => $subject,
    'text'    => $email_body,
    'h:Reply-To' => $from_email,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $mailgun_url);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mailgunApiKey);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

$response   = curl_exec($ch);
$http_code  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_error = curl_error($ch);
curl_close($ch);

if ($http_code === 200) {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your message! I\'ll get back to you as soon as possible.'
    ]);
} else {
    error_log('Mailgun error: HTTP ' . $http_code . ' - Response: ' . $response . ' - cURL: ' . $curl_error);
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was an error sending your message. Please try again later. Technical Details: ' . htmlspecialchars($curl_error)
    ]);
}