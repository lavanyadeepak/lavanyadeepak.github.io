<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Whitelist allowed pages for security
$allowed_pages = ['home', 'about', 'work', 'publications', 'ghtn', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lavanya Deepak - Developer, Writer, and Community Builder. Exploring technology, culture, and innovation.">
    <meta name="keywords" content="Lavanya Deepak, Developer, Software Engineer, Writer, LD Wings, Hindu Temple Network">
    <meta name="author" content="Lavanya Deepak">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lavanya Deepak - Developer & Community Builder">
    <meta property="og:description" content="Building innovative solutions at the intersection of technology and culture.">
    
    <title><?php echo ucfirst(str_replace('-', ' ', $page)); ?> - Lavanya Deepak</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🚀</text></svg>">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/pdf.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include "assets/includes/header.php"; ?>

    <?php 
        // Map 'home' to 'homepage.php', others to their respective files
        $component = ($page === 'home') ? 'homepage' : $page;
        $file_path = "pages/components/{$component}.php";
        
        if (file_exists($file_path)) {
            include $file_path;
        } else {
            echo "<div class='container' style='padding: 100px 0; text-align: center;'><h2>Page Under Construction</h2></div>";
        }
    ?>
    
    <?php include "assets/includes/footer.php"; ?>
    <button id="backToTop" class="back-to-top" aria-label="Back to Top">↑</button>
    <script type="text/javascript" src="assets/scripts/site.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script src="assets/scripts/pdf.js"></script>
 </body>
</html>