<?php
/**
 * Contact Form - AJAX Submission
 * Displays the contact form and submits via AJAX to the Mailgun handler.
 */

// Initialize form data for display (no server-side processing here anymore)
$form_data = [
    'first_name' => '',
    'last_name'  => '',
    'email'      => '',
    'phone'      => '',
    'message'    => '',
];

// Restore from POST if there was a validation error (data comes back from AJAX? No, we rely on JS)
// We'll keep it simple - no PHP processing, just display.
?>
    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Have a question, project idea, or just want to say hello? I'd love to hear from you.</p>
        </div>

        <div class="contact-container">
            <!-- Alert Container for AJAX responses -->
            <div id="contactAlert" class="contact-alert" style="display: none;"></div>

            <form id="contactForm" method="POST" class="contact-form" novalidate>
                <!-- Honeypot field (hidden from users, catches bots) -->
                <div style="position: absolute; left: -9999px;" aria-hidden="true">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                </div>

                <!-- Timestamp for anti-spam time check -->
                <input type="hidden" name="timestamp" value="<?php echo time(); ?>">

                <div class="form-row">
                    <!-- First Name -->
                    <div class="form-group">
                        <label for="first_name" class="form-label">
                            <i class='bx bx-user'></i> First Name <span class="required">*</span>
                        </label>
                        <input type="text" id="first_name" name="first_name" class="form-control" 
                               placeholder="John" required maxlength="50">
                    </div>

                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="last_name" class="form-label">
                            <i class='bx bx-user'></i> Last Name <span class="required">*</span>
                        </label>
                        <input type="text" id="last_name" name="last_name" class="form-control" 
                               placeholder="Doe" required maxlength="50">
                    </div>
                </div>

                <div class="form-row">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">
                            <i class='bx bx-envelope'></i> Email <span class="required">*</span>
                        </label>
                        <input type="email" id="email" name="email" class="form-control" 
                               placeholder="john.doe@example.com" required maxlength="100">
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone" class="form-label">
                            <i class='bx bx-phone'></i> Phone
                        </label>
                        <input type="tel" id="phone" name="phone" class="form-control" 
                               placeholder="+1 (555) 123-4567" maxlength="20">
                    </div>
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label for="message" class="form-label">
                        <i class='bx bx-message-detail'></i> Message <span class="required">*</span>
                    </label>
                    <textarea id="message" name="message" class="form-control form-textarea" 
                              placeholder="Tell me about your project, question, or just say hello..." 
                              required maxlength="5000"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="form-submit">
                    <button type="submit" name="contact_submit" id="submitBtn" class="btn btn-primary submit-btn">
                        <i class='bx bx-send'></i> <span id="submitText">Send Message</span>
                        <span id="submitSpinner" style="display: none;"><i class='bx bx-loader-alt bx-spin'></i></span>
                    </button>
                </div>
            </form>

            <!-- Alternative Contact Info -->
            <div class="contact-info">
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <h4>Email</h4>
                    <p><a href="mailto:your-email@example.com">your-email@example.com</a></p>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <h4>Location</h4>
                    <p>India</p>
                </div>
                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <i class='bx bx-time'></i>
                    </div>
                    <h4>Response Time</h4>
                    <p>Typically within 24-48 hours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AJAX Submission Script -->
    <script>
    (function() {
        const form      = document.getElementById('contactForm');
        const alertDiv  = document.getElementById('contactAlert');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitSpinner = document.getElementById('submitSpinner');

        function showAlert(type, message) {
            alertDiv.className = 'contact-alert';
            if (type === 'success') {
                alertDiv.classList.add('contact-alert-success');
                alertDiv.innerHTML = '<i class="bx bx-check-circle"></i> ' + message;
            } else {
                alertDiv.classList.add('contact-alert-error');
                alertDiv.innerHTML = '<i class="bx bx-error-circle"></i> ' + message;
            }
            alertDiv.style.display = 'flex';
            alertDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        function setLoading(isLoading) {
            if (isLoading) {
                submitBtn.disabled = true;
                submitText.textContent = 'Sending...';
                submitSpinner.style.display = 'inline';
            } else {
                submitBtn.disabled = false;
                submitText.textContent = 'Send Message';
                submitSpinner.style.display = 'none';
            }
        }

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Hide any previous alert
            alertDiv.style.display = 'none';
            setLoading(true);

            const formData = new FormData(form);
            formData.append('contact_submit', '1');

            try {
                const response = await fetch('pages/utils/send-contact.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    showAlert('success', result.message);
                    form.reset();
                    // Re-generate timestamp for next submission
                    const tsInput = form.querySelector('input[name="timestamp"]');
                    if (tsInput) {
                        tsInput.value = Math.floor(Date.now() / 1000);
                    }
                } else {
                    showAlert('error', result.message);
                }
            } catch (error) {
                showAlert('error', 'A network error occurred. Please check your connection and try again.');
            } finally {
                setLoading(false);
            }
        });
    })();
    </script>

<style>
/* ===== CONTACT PAGE STYLES ===== */
.contact-container {
    max-width: 900px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--spacing-lg);
}

/* Alert Messages */
.contact-alert {
    padding: var(--spacing-md);
    border-radius: 8px;
    display: none;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.95rem;
    animation: fadeInUp 0.5s ease-out;
    border: 1px solid;
}

.contact-alert i {
    font-size: 1.5rem;
    flex-shrink: 0;
}

.contact-alert-success {
    background: #f0fff4;
    color: #22543d;
    border-color: #c6f6d5;
}

.contact-alert-success i {
    color: #38a169;
}

.contact-alert-error {
    background: #fff5f5;
    color: #742a2a;
    border-color: #fed7d7;
}

.contact-alert-error i {
    color: #e53e3e;
}

/* Form */
.contact-form {
    background: var(--white);
    border: 2px solid var(--border-color);
    border-radius: 12px;
    padding: var(--spacing-lg);
    position: relative;
    transition: border-color var(--transition-base), box-shadow var(--transition-base);
}

.contact-form:focus-within {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-md);
}

.form-group {
    margin-bottom: var(--spacing-md);
}

.form-row .form-group {
    margin-bottom: 0;
}

.form-label {
    display: flex;
    align-items: center;
    gap: 6px;
    font-weight: 500;
    color: var(--text-secondary);
    margin-bottom: var(--spacing-xs);
    font-size: 0.9rem;
}

.form-label i {
    color: var(--primary-color);
    font-size: 1.1rem;
}

.required {
    color: #e53e3e;
}

.form-control {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-family: var(--font-family);
    font-size: 1rem;
    color: var(--text-primary);
    background: var(--white);
    transition: all var(--transition-fast);
    outline: none;
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-control::placeholder {
    color: var(--text-light);
}

.form-textarea {
    min-height: 150px;
    resize: vertical;
    line-height: 1.6;
}

.form-submit {
    text-align: center;
    margin-top: var(--spacing-md);
}

.submit-btn {
    padding: 14px 48px;
    font-size: 1.05rem;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none !important;
}

.submit-btn i {
    font-size: 1.2rem;
}

/* Contact Info Cards */
.contact-info {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--spacing-md);
    margin-top: var(--spacing-md);
}

.contact-info-card {
    background: var(--bg-light);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: var(--spacing-md);
    text-align: center;
    transition: all var(--transition-base);
}

.contact-info-card:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
    border-color: var(--primary-color);
}

.contact-info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin: 0 auto var(--spacing-sm);
}

.contact-info-card h4 {
    font-size: 1rem;
    color: var(--text-primary);
    margin-bottom: 4px;
    font-weight: 600;
}

.contact-info-card p {
    font-size: 0.9rem;
    color: var(--text-muted);
}

.contact-info-card a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color var(--transition-fast);
}

.contact-info-card a:hover {
    color: var(--primary-dark);
    text-decoration: underline;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }

    .form-row .form-group {
        margin-bottom: var(--spacing-md);
    }

    .form-row .form-group:last-child {
        margin-bottom: 0;
    }

    .contact-form {
        padding: var(--spacing-md);
    }

    .contact-info {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
    }

    .submit-btn {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .contact-form {
        padding: var(--spacing-sm);
    }
}
</style>