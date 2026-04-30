<?php 
$pageTitle = "Contact | Prince George Design";
include __DIR__ . '/../header.php'; 
?>

    <header class="hero">
        <span class="hero-tag reveal">Get in Touch</span>
        <h1 class="reveal">Let’s build your <br><span>digital edge.</span></h1>
        <p class="reveal">We’ve moved to an email-first studio model to ensure every project gets the dedicated technical attention it deserves. No distractions, just results.</p>
    </header>

    <section id="contact-methods" style="background: var(--white);">
        <div class="bento-grid">
            <!-- Primary Contact -->
            <div class="bento-item reveal" style="grid-column: span 2;">
                <h3 style="color: var(--primary);">Direct Inquiry</h3>
                <p>For support requests, project quotes, or IT administration inquiries, please reach out via our central studio inbox.</p>
                <div style="margin-top: 30px;">
                    <a href="mailto:contact@princegeorgedesign.com" class="btn btn-black" style="font-size: 1.2rem; padding: 20px 40px;">contact@princegeorgedesign.com</a>
                </div>
            </div>

            <!-- Availability -->
            <div class="bento-item reveal">
                <h3>Response Time</h3>
                <p>We typically respond to new inquiries within <strong>4–8 business hours</strong> with a technical assessment or a link to book a discovery call.</p>
            </div>

            <!-- Location -->
            <div class="bento-item reveal">
                <h3>Studio Hours</h3>
                <p>Monday – Friday<br>8:00 AM – 5:00 PM (PST)<br>Prince George, BC</p>
            </div>
        </div>
    </section>

    <section id="emergency" style="background: var(--dirty-white); border-top: 1px solid var(--border-glass);">
        <div class="reveal" style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h2 class="section-title" style="font-size: 2.5rem;">Existing Partners</h2>
            <p>If you are an active partner experiencing a critical site outage, please reply to your latest ticket thread with <strong>"URGENT"</strong> in the subject line for priority routing.</p>
        </div>
    </section>

<?php include __DIR__ . '/../footer.php'; ?>
