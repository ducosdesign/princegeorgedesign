document.addEventListener('DOMContentLoaded', () => {
    const isMobile = window.innerWidth < 768;

    // 1. Reveal Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // 2. Parallax Headers (Desktop Only)
    if (!isMobile) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroTitle = document.querySelector('.hero h1');
            if (heroTitle) {
                heroTitle.style.transform = `translateY(${scrolled * 0.15}px)`;
                heroTitle.style.opacity = 1 - (scrolled / 800);
            }
        });
    }
});
