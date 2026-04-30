<?php
$site_name    = "Prince George Design";
$contact_email = "contact@princegeorgedesign.com";

// Used for highlighting active nav item
$current = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Shopify & WordPress maintenance for Prince George business owners. Reliable, local, CAD pricing." />
    <title><?php echo $site_name; ?> — Web Support Made Local</title>
    <link rel="icon" type="image/png" href="/PG-icon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Instrument+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a href="/" class="logo">
                <img src="/PG-icon.png" alt="" class="logo-img" />
                <span class="logo-text"><?php echo $site_name; ?></span>
            </a>

            <nav class="main-nav" aria-label="Primary">
                <div class="nav-group">
                    <button class="nav-trigger" aria-haspopup="true" aria-expanded="false">Services <span class="caret">▾</span></button>
                    <div class="nav-dropdown">
                        <div class="dropdown-col">
                            <span class="dropdown-label">Platforms</span>
                            <a href="/shopify-support">Shopify Support</a>
                            <a href="/wordpress-maintenance">WordPress Maintenance</a>
                            <a href="/theme-migration">Theme Migration</a>
                        </div>
                        <div class="dropdown-col">
                            <span class="dropdown-label">Optimization</span>
                            <a href="/speed-optimization">Speed Optimization</a>
                            <a href="/local-seo">Local SEO</a>
                            <a href="/accessibility">Accessibility</a>
                        </div>
                        <div class="dropdown-col">
                            <span class="dropdown-label">Beyond the basics</span>
                            <a href="/custom-development">Custom Development</a>
                            <a href="/graphic-design">Graphic Design</a>
                            <a href="/it-admin">IT Admin</a>
                            <a href="/emergency-support">Emergency Support</a>
                        </div>
                    </div>
                </div>

                <a href="/how-it-works" class="<?php echo $current === 'how-it-works' ? 'is-active' : ''; ?>">How it works</a>
                <a href="/why-us"       class="<?php echo $current === 'why-us'       ? 'is-active' : ''; ?>">Why us</a>
                <a href="/about"        class="<?php echo $current === 'about'        ? 'is-active' : ''; ?>">About</a>
                <a href="/faq"          class="<?php echo $current === 'faq'          ? 'is-active' : ''; ?>">FAQ</a>
            </nav>

            <a href="mailto:<?php echo $contact_email; ?>" class="btn btn-primary header-cta">
                Get in touch <span class="arrow">→</span>
            </a>

            <button class="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>
    <main>
