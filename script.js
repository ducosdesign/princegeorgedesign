document.addEventListener('DOMContentLoaded', () => {
    // Scroll Reveal Logic
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal');
                // If it's a grid, also trigger its children
                if (entry.target.classList.contains('animate-on-scroll')) {
                    entry.target.classList.add('is-visible');
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('[data-animate], .animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Magnetic Button Effect
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.letterSpacing = '4px';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.letterSpacing = '2px';
        });
    });
});
