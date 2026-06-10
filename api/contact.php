<?php 
$pageTitle = "Contact | Prince George Design";
include __DIR__ . '/header.php'; 
?>

<main class="contact-page-static" style="display: grid; grid-template-columns: 1fr 1.2fr; min-height: 100vh; padding-top: 80px; background: #fff;">
    <!-- Brand Sidebar -->
    <section style="padding: 100px 10%; border-right: 1px solid #f0f0f0;">
        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: #999; display: block; margin-bottom: 40px;">Inquiry</span>
        <h1 style="font-size: clamp(3rem, 8vw, 5rem); line-height: 1; letter-spacing: -0.04em; margin-bottom: 24px; font-family: 'Outfit';">Let's build<br>something.</h1>
        <p style="color: #666; max-width: 300px; line-height: 1.6;">Currently taking on selective project maintenance for 2026.</p>
        
        <div style="margin-top: 100px;">
            <p style="font-size: 0.8rem; color: #999; margin-bottom: 8px;">Direct Inbox</p>
            <a href="mailto:contact@princegeorgedesign.com" style="color: #f9452d; text-decoration: none; font-weight: 700; font-size: 1.1rem;">contact@princegeorgedesign.com</a>
        </div>
    </section>

    <!-- Form Section -->
    <section style="padding: 100px 10%; background-color: #fafafa;">
        <form action="/api/send-mail.php" method="POST" style="max-width: 500px;">
            <div style="margin-bottom: 40px;">
                <label style="display: block; font-size: 0.9rem; font-weight: 700; margin-bottom: 15px;">FULL NAME</label>
                <input type="text" name="name" required style="width: 100%; border: none; border-bottom: 1px solid #ddd; padding: 10px 0; background: transparent; font-size: 1.2rem; outline: none;">
            </div>
            <div style="margin-bottom: 40px;">
                <label style="display: block; font-size: 0.9rem; font-weight: 700; margin-bottom: 15px;">EMAIL ADDRESS</label>
                <input type="email" name="email" required style="width: 100%; border: none; border-bottom: 1px solid #ddd; padding: 10px 0; background: transparent; font-size: 1.2rem; outline: none;">
            </div>
            <div style="margin-bottom: 40px;">
                <label style="display: block; font-size: 0.9rem; font-weight: 700; margin-bottom: 15px;">PROJECT DETAILS</label>
                <textarea name="message" rows="4" required style="width: 100%; border: none; border-bottom: 1px solid #ddd; padding: 10px 0; background: transparent; font-size: 1.2rem; outline: none; resize: none;"></textarea>
            </div>
            <button type="submit" style="background: #000; color: #fff; padding: 25px 60px; border: none; border-radius: 4px; font-weight: 800; cursor: pointer; text-transform: uppercase; letter-spacing: 2px;">Send Message</button>
        </form>
    </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
