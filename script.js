document.addEventListener('DOMContentLoaded', () => {
    // Scroll Reveal Logic
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // Magnetic Button Effect
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.letterSpacing = '3px';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.letterSpacing = '2px';
        });
    });
});
