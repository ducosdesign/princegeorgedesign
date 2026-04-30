<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Prince George Design | Digital Studio'; ?></title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <nav style="display: flex; justify-content: space-between; align-items: center; padding: 25px 5%; background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(15px); position: fixed; top: 0; width: 100%; z-index: 2000; border-bottom: 1px solid rgba(0,0,0,0.05);">
        <a href="/" class="logo" style="font-family: 'Outfit'; font-weight: 800; text-transform: uppercase; text-decoration: none; color: #000; letter-spacing: -1.5px; font-size: 1.4rem;">PrinceGeorge<span style="color: #f9452d;">Design</span></a>
        
        <div class="nav-links" style="display: flex; gap: 40px; align-items: center;">
            <a href="/about" style="text-decoration: none; color: #000; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">About</a>
            <a href="/contact" style="text-decoration: none; color: #000; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">Contact</a>
        </div>
    </nav>
