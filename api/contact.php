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

<main class="contact-page-wrapper" style="background: #fff; min-height: 100vh; padding-top: 120px;">
    <div style="max-width: 1100px; margin: 0 auto; padding: 0 20px; display: grid; grid-template-columns: 1fr 350px; gap: 80px;">
        
        <!-- Left Side: Form -->
        <section>
            <h1 style="color: #000; font-size: 3.5rem; letter-spacing: -1.5px;">Start a <span>Project.</span></h1>
            <!-- Form fields with dark text and light borders -->
            <form action="/api/send-mail.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                <input type="text" name="name" placeholder="Full Name" required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; background: #fff; color: #000;">
                <textarea name="message" placeholder="Message" required style="padding: 18px; border: 1px solid #eee; border-radius: 8px; background: #fff; color: #000;"></textarea>
                <button type="submit" class="btn-black">Send Inquiry</button>
            </form>
        </section>

        <!-- Right Side: Sidebar -->
        <aside style="border-left: 1px solid #eee; padding-left: 40px; color: #000;">
            <h4 style="color: #999;">Direct Email</h4>
            <a href="mailto:contact@princegeorgedesign.com" style="color: #f9452d; font-weight: 700; text-decoration: none;">contact@princegeorgedesign.com</a>
        </aside>
    </div>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
