document.addEventListener('DOMContentLoaded', () => {
    const progressBar = document.getElementById("progressBar");
    const isMobile = window.innerWidth < 768;

    // 1. Progress Bar Logic
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        if (progressBar) progressBar.style.width = scrolled + "%";
    });

    // 2. Intersection Observer (Desktop Only Stagger)
    const observerOptions = { threshold: 0.15, rootMargin: "0px 0px -50px 0px" };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (!isMobile && (entry.target.classList.contains('bento-grid') || entry.target.classList.contains('stats-grid'))) {
                    const children = entry.target.querySelectorAll('.reveal');
                    children.forEach((child, index) => {
                        setTimeout(() => { child.classList.add('active'); }, index * 150);
                    });
                } else {
                    entry.target.classList.add('active');
                }
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal, .bento-grid, .stats-grid').forEach(el => {
        observer.observe(el);
    });

    // 3. Hero Parallax (Desktop Only)
    if (!isMobile) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroText = document.querySelector('.hero h1');
            if (heroText) {
                heroText.style.transform = `translateY(${scrolled * 0.2}px)`;
                heroText.style.opacity = 1 - (scrolled / 600);
            }
        });
    } else {
        document.body.classList.add('is-mobile');
    }
});
