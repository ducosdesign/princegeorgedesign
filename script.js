document.addEventListener('DOMContentLoaded', () => {
    const progressBar = document.getElementById("progressBar");

    // 1. Progress Bar Logic
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        if (progressBar) {
            progressBar.style.width = scrolled + "%";
        }
    });

    // 2. Intersection Observer for Reveal Animations
    const observerOptions = {
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    // Apply reveal to all designated elements
    const revealElements = document.querySelectorAll('.reveal, .stat-item, .bento-item, .price-card');
    revealElements.forEach(el => {
        el.classList.add('reveal'); // Ensure class is present
        observer.observe(el);
    });
});
