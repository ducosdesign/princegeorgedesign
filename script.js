document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Progress
    const progressBar = document.getElementById("progressBar");
    window.addEventListener('scroll', () => {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        if (progressBar) progressBar.style.width = scrolled + "%";
    });

    // 2. Staggered Reveal Logic
    const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // If it's a grid, animate children with delay
                if (entry.target.classList.contains('stagger-grid')) {
                    const children = entry.target.children;
                    Array.from(children).forEach((child, i) => {
                        setTimeout(() => {
                            child.classList.add('active');
                        }, i * 150);
                    });
                } else {
                    entry.target.classList.add('active');
                }
            }
        });
    }, observerOptions);

    // Targets
    document.querySelectorAll('.reveal, .bento-grid, .pricing-grid, .stats-grid').forEach(el => {
        if(el.classList.contains('bento-grid') || el.classList.contains('pricing-grid') || el.classList.contains('stats-grid')) {
            el.classList.add('stagger-grid');
            // Ensure children have the reveal class
            Array.from(el.children).forEach(child => child.classList.add('reveal'));
        }
        observer.observe(el);
    });

    // 3. Ultra-Smooth Tilt
    const tiltElements = document.querySelectorAll('.bento-item, .price-card, .stat-item');
    tiltElements.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width/2;
            const y = e.clientY - rect.top - rect.height/2;
            el.style.transform = `perspective(1000px) rotateX(${-y/30}deg) rotateY(${x/30}deg) translateY(-10px)`;
        });
        el.addEventListener('mouseleave', () => {
            el.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)`;
        });
    });
});
