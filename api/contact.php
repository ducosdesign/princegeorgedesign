<?php 
$pageTitle = "Contact | Prince George Design";
include __DIR__ . '/../header.php'; 
?>

<!-- Internal CSS to kill scroll hijacking for this page -->
<style>
    html, body {
        scroll-snap-type: none !important;
        overflow-y: auto !important;
        height: auto !important;
    }
    .contact-wrapper {
        min-height: 100vh;
        padding: 120px 5% 80px;
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 80px;
        max-width: 1200px;
        margin: 0 auto;
    }
    @media (max-width: 900px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
            padding-top: 100px;
            gap: 40px;
        }
    }
</style>

<main class="contact-wrapper">
    <!-- Form Section -->
    <section>
        <header style="margin-bottom: 40px;">
            <span style="color: #f9452d; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Inquiry</span>
            <h1 style="font-size: clamp(2.5rem, 5vw, 3.5rem); margin-top: 10px; letter-spacing: -1.5px;">Start a <span>Project.</span></h1>
            <p style="color: #666; font-size: 1.1rem; max-width: 500px;">Tell us about your technical needs. A developer will review your details and follow up within 8 hours.</p>
        </header>

        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div style="background: #e6ffed; border: 1px solid #b2f2bb; color: #2b8a3e; padding: 20px; border-radius: 8px; margin-bottom: 30px; font-weight: 600;">
                ✓ Message received. We'll be in touch soon.
            </div>
        <?php endif; ?>

        <form action="/api/send-mail.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <!-- Honeypot -->
            <input type="text" name="website_url" style="display:none !important" tabindex="-1" autocomplete="off">
            
            <input type="text" name="name" placeholder="Full Name" required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem; font-family: inherit;">
            <input type="email" name="email" placeholder="Email Address" required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem; font-family: inherit;">
            <textarea name="message" rows="6" placeholder="Project details, timeline, or support needs..." required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem; font-family: inherit; resize: vertical;"></textarea>
            
            <button type="submit" style="background: #000; color: #fff; padding: 20px; border: none; border-radius: 8px; font-weight: 800; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">
                Send Studio Inquiry
            </button>
        </form>
    </section>

    <!-- Info Sidebar -->
    <aside style="border-left: 1px solid #eee; padding-left: 40px;">
        <div style="margin-bottom: 40px;">
            <h4 style="text-transform: uppercase; font-size: 0.7rem; letter-spacing: 2px; color: #999; margin-bottom: 10px;">Primary Inbox</h4>
            <a href="mailto:contact@princegeorgedesign.com" style="color: #000; font-weight: 700; text-decoration: none; font-size: 1rem; word-break: break-all;">contact@princegeorgedesign.com</a>
        </div>

        <div style="margin-bottom: 40px;">
            <h4 style="text-transform: uppercase; font-size: 0.7rem; letter-spacing: 2px; color: #999; margin-bottom: 10px;">Response Time</h4>
            <p style="font-size: 0.95rem; color: #555; line-height: 1.5;">Average follow-up: 4–8 business hours.<br>Monday – Friday, 8am – 5pm PST.</p>
        </div>

        <div>
            <h4 style="text-transform: uppercase; font-size: 0.7rem; letter-spacing: 2px; color: #999; margin-bottom: 10px;">Location</h4>
            <p style="font-size: 0.95rem; color: #555;">Prince George, British Columbia</p>
        </div>
    </aside>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
