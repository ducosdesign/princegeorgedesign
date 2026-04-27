document.addEventListener('DOMContentLoaded', () => {
    const progressBar = document.getElementById("progressBar");

    // 1. Progress Bar Logic
    window.addEventListener('scroll', () => {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        if (progressBar) progressBar.style.width = scrolled + "%";
    });

    // 2. Reveal Animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('active');
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal, .stat-item, .bento-item, .price-card').forEach(el => {
        el.classList.add('reveal');
        observer.observe(el);
    });
});
