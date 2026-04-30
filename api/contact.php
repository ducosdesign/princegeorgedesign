<?php 
$pageTitle = "Contact | Prince George Design";
include __DIR__ . '/../header.php'; 
?>

<style>
    /* Lyniq-Specific Styles */
    html, body { 
        scroll-snap-type: none !important; 
        background-color: #fff !important;
    }
    
    .lyniq-container {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        min-height: 100vh;
        padding-top: 80px;
    }

    .lyniq-info {
        padding: 80px 10%;
        border-right: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .lyniq-form-section {
        padding: 80px 10%;
        background-color: #fafafa;
    }

    .contact-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #999;
        margin-bottom: 40px;
        display: block;
    }

    .lyniq-input-group {
        margin-bottom: 40px;
        position: relative;
    }

    .lyniq-input-group label {
        display: block;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 12px;
        color: #1a1a1a;
    }

    .lyniq-field {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid #e0e0e0;
        padding: 12px 0;
        font-size: 1.1rem;
        font-family: inherit;
        transition: border-color 0.3s ease;
    }

    .lyniq-field:focus {
        outline: none;
        border-bottom-color: #000;
    }

    .lyniq-btn {
        background: #000;
        color: #fff;
        padding: 20px 40px;
        border: none;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
        transition: opacity 0.3s;
    }

    .lyniq-btn:hover { opacity: 0.8; }

    @media (max-width: 900px) {
        .lyniq-container { grid-template-columns: 1fr; }
        .lyniq-info { border-right: none; border-bottom: 1px solid #f0f0f0; }
    }
</style>

<main class="lyniq-container">
    <!-- Section 1: Branding & Info -->
    <section class="lyniq-info">
        <div>
            <span class="contact-label">Get in touch</span>
            <h1 style="font-size: 4rem; line-height: 1; letter-spacing: -0.04em; margin-bottom: 24px;">Let's build<br>something.</h1>
            <p style="color: #666; max-width: 300px; line-height: 1.6;">Currently taking on new projects for Summer 2026.</p>
        </div>

        <div>
            <div style="margin-bottom: 32px;">
                <p style="font-size: 0.8rem; color: #999; margin-bottom: 8px;">Email</p>
                <a href="mailto:contact@princegeorgedesign.com" style="color: #000; text-decoration: none; font-weight: 500;">contact@princegeorgedesign.com</a>
            </div>
            <div>
                <p style="font-size: 0.8rem; color: #999; margin-bottom: 8px;">Social</p>
                <a href="#" style="color: #000; text-decoration: none; font-weight: 500; margin-right: 15px;">LinkedIn</a>
                <a href="#" style="color: #000; text-decoration: none; font-weight: 500;">Instagram</a>
            </div>
        </div>
    </section>

    <!-- Section 2: The Form -->
    <section class="lyniq-form-section">
        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <p style="color: #2b8a3e; font-weight: 600; margin-bottom: 30px;">✓ Inquiry sent successfully.</p>
        <?php endif; ?>

        <form action="/api/send-mail.php" method="POST">
            <!-- Honeypot -->
            <input type="text" name="website_url" style="display:none !important">

            <div class="lyniq-input-group">
                <label>What's your name?</label>
                <input type="text" name="name" class="lyniq-field" placeholder="John Doe" required>
            </div>

            <div class="lyniq-input-group">
                <label>Your email address</label>
                <input type="email" name="email" class="lyniq-field" placeholder="john@example.com" required>
            </div>

            <div class="lyniq-input-group">
                <label>What are you looking for?</label>
                <input type="text" name="subject" class="lyniq-field" placeholder="Shopify Dev, IT Support, etc.">
            </div>

            <div class="lyniq-input-group">
                <label>Tell us about your project</label>
                <textarea name="message" class="lyniq-field" rows="4" placeholder="Briefly describe your goals..." required></textarea>
            </div>

            <button type="submit" class="lyniq-btn">Send Message</button>
        </form>
    </section>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
