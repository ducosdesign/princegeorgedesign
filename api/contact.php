<?php 
$pageTitle = "Contact | Prince George Design";
include __DIR__ . '/../header.php'; 
?>

<main style="max-width: 800px; margin: 120px auto; padding: 0 20px; font-family: 'Outfit', sans-serif;">
    <header style="margin-bottom: 60px;">
        <span style="color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Inquiry</span>
        <h1 style="font-size: 3rem; margin-top: 10px; letter-spacing: -1px;">Start a <span>Project.</span></h1>
        <p style="color: #666; font-size: 1.1rem; line-height: 1.6;">Fill out the details below. We review every request personally to ensure a perfect technical fit.</p>
    </header>

    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div style="background: #e6ffed; border: 1px solid #b2f2bb; color: #2b8a3e; padding: 20px; border-radius: 8px; margin-bottom: 30px; font-weight: 600;">
            ✓ Your message has been received. A developer will follow up within 4–8 business hours.
        </div>
    <?php endif; ?>

    <form action="/api/send-mail.php" method="POST" style="display: grid; gap: 25px;">
        <!-- Honeypot for basic spam protection -->
        <input type="text" name="website_url" style="display:none !important" tabindex="-1" autocomplete="off">

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Name</label>
                <input type="text" name="name" required style="padding: 15px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem;">
            </div>
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Email</label>
                <input type="email" name="email" required style="padding: 15px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem;">
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 8px;">
            <label style="font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Message</label>
            <textarea name="message" rows="6" required style="padding: 15px; border: 1px solid #eee; border-radius: 8px; font-size: 1rem; resize: vertical;"></textarea>
        </div>

        <button type="submit" style="background: #000; color: #fff; padding: 20px; border: none; border-radius: 8px; font-weight: 800; font-size: 1rem; cursor: pointer; text-transform: uppercase; letter-spacing: 1px;">
            Send Studio Inquiry
        </button>
    </form>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
