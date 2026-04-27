document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Progress Bar
    const progressBar = document.getElementById("progressBar");
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        if (progressBar) progressBar.style.width = scrolled + "%";
    });

    // 2. Intersection Observer for Staggered Entrance
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // If it's a section, trigger the section itself
                entry.target.classList.add('is-visible');
                
                // Find all grid children within this section and stagger them
                const children = entry.target.querySelectorAll('.bento-item, .price-card, .stat-item');
                children.forEach((child, index) => {
                    setTimeout(() => {
                        child.style.opacity = "1";
                        child.style.transform = "translateY(0)";
                    }, index * 150); // 150ms delay between items
                });
            }
        });
    }, observerOptions);

    // Apply to all animated sections and grids
    document.querySelectorAll('.animate-on-scroll, .bento-grid, .pricing-grid, .stats-grid').forEach(el => {
        revealObserver.observe(el);
    });

    // 3. Mouse Interaction: 3D Tilt & Light Glow
    const interactiveElements = document.querySelectorAll('.bento-item, .btn');
    
    interactiveElements.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Set variables for the CSS glow
            el.style.setProperty('--mouse-x', `${x}px`);
            el.style.setProperty('--mouse-y', `${y}px`);
            
            // 3D Perspective Tilt (only for Bento Boxes)
            if (el.classList.contains('bento-item')) {
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 25; // Sensitivity
                const rotateY = (centerX - x) / 25;
                el.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
            }
        });

        // Reset on Mouse Leave
        el.addEventListener('mouseleave', () => {
            if (el.classList.contains('bento-item')) {
                el.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1)`;
            }
        });
    });

    // 4. Magnetic Nav Links
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            link.style.letterSpacing = "1px";
        });
        link.addEventListener('mouseleave', () => {
            link.style.letterSpacing = "0px";
        });
    });
});
