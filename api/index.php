<?php 
$pageTitle = "Prince George Design | Digital Maintenance";
include __DIR__ . '/header.php'; 
?>

<main style="background: #fff; overflow-x: hidden;">
    <!-- HERO -->
    <header class="hero" style="padding: 220px 5% 120px; min-height: 90vh; display: flex; flex-direction: column; justify-content: center; scroll-snap-align: start;">
        <span class="hero-tag" style="color: #f9452d; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; font-size: 0.8rem; margin-bottom: 20px; display: block;">Studio / 2026</span>
        <h1 style="font-family: 'Outfit'; font-size: clamp(4rem, 15vw, 12rem); line-height: 0.8; letter-spacing: -0.06em; font-weight: 800; margin: 0; text-transform: uppercase;">
            DIGITAL<br>MAINTENANCE.
        </h1>
        <p style="font-size: 1.5rem; color: #666; max-width: 600px; margin-top: 40px; line-height: 1.4; letter-spacing: -0.5px;">
            Premium web support and industrial-grade development for high-stakes digital platforms.
        </p>
    </header>

    <!-- CAPABILITIES BENTO GRID -->
    <section id="capabilities" style="padding: 100px 5%; background: #fbfbfb; scroll-snap-align: start;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            <div class="reveal" style="grid-column: span 2; background: #fff; padding: 80px 60px; border-radius: 4px; border: 1px solid #eee;">
                <h3 style="font-size: clamp(2rem, 5vw, 4rem); letter-spacing: -2px; margin-bottom: 20px;">Shopify Support</h3>
                <p style="color: #666; font-size: 1.1rem;">Deep-level technical maintenance for high-volume e-commerce brands requiring zero downtime.</p>
            </div>
            <div class="reveal" style="background: #000; color: #fff; padding: 80px 60px; border-radius: 4px;">
                <h3 style="font-size: clamp(2rem, 5vw, 4rem); letter-spacing: -2px; margin-bottom: 20px; color: #f9452d;">IT Admin</h3>
                <p style="color: #999; font-size: 1.1rem;">Managed server infrastructure, security audits, and private cloud management.</p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>
