<?php 
$pageTitle = "Contact | Prince George Design";
include __DIR__ . '/../header.php'; 
?>

<main style="max-width: 1100px; margin: 120px auto; padding: 0 20px; font-family: 'Outfit', sans-serif;">
    <div style="display: grid; grid-template-columns: 1fr 350px; gap: 80px;">
        
        <!-- Left Side: The Form -->
        <div>
            <header style="margin-bottom: 40px;">
                <h1 style="font-size: 3.5rem; margin-bottom: 10px; letter-spacing: -1.5px;">Start a <span>Project.</span></h1>
                <p style="color: #666; font-size: 1.1rem;">Fill out the form and a developer will follow up within 4–8 business hours.</p>
            </header>

            <form action="/api/send-mail.php" method="POST" style="display: grid; gap: 20px;">
                <input type="text" name="name" placeholder="Full Name" required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem;">
                <input type="email" name="email" placeholder="Email Address" required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem;">
                <textarea name="message" rows="6" placeholder="Tell us about your project..." required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem; resize: vertical;"></textarea>
                <button type="submit" style="background: #000; color: #fff; padding: 22px; border: none; border-radius: 8px; font-weight: 800; cursor: pointer; text-transform: uppercase; letter-spacing: 1px;">Send Inquiry</button>
            </form>
        </div>

        <!-- Right Side: Contact Sidebar -->
        <aside style="border-left: 1px solid #eee; padding-left: 40px;">
            <div style="margin-bottom: 40px;">
                <h4 style="text-transform: uppercase; font-size: 0.75rem; letter-spacing: 2px; color: #999; margin-bottom: 15px;">Direct Email</h4>
                <a href="mailto:contact@princegeorgedesign.com" style="color: #f9452d; font-weight: 700; text-decoration: none; font-size: 1.1rem; word-break: break-all;">contact@princegeorgedesign.com</a>
            </div>

            <div style="margin-bottom: 40px;">
                <h4 style="text-transform: uppercase; font-size: 0.75rem; letter-spacing: 2px; color: #999; margin-bottom: 15px;">Availability</h4>
                <p style="font-size: 0.95rem; color: #444; line-height: 1.6;">
                    Mon — Fri<br>
                    8:00 AM — 5:00 PM (PST)<br>
                    <strong>Currently accepting new clients.</strong>
                </p>
            </div>

            <div>
                <h4 style="text-transform: uppercase; font-size: 0.75rem; letter-spacing: 2px; color: #999; margin-bottom: 15px;">Office</h4>
                <p style="font-size: 0.95rem; color: #444;">Prince George, BC<br>Canada</p>
            </div>
        </aside>

    </div>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
