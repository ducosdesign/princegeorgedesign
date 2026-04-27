document.addEventListener('DOMContentLoaded', () => {
    const pages = document.querySelectorAll('header, section, footer');
    const progressBar = document.getElementById("progressBar");

    // 1. Page Turn Observer
    const pageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // If the page is above the viewport, tilt it away
            if (!entry.isIntersecting && entry.boundingClientRect.top < 0) {
                entry.target.classList.add('page-off-screen');
            } else {
                entry.target.classList.remove('page-off-screen');
            }
        });
    }, {
        threshold: 0,
        rootMargin: "-10% 0px -90% 0px"
    });

    pages.forEach(page => pageObserver.observe(page));

    // 2. Progress Bar
    window.addEventListener('scroll', () => {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        if (progressBar) progressBar.style.width = scrolled + "%";
    });

    // 3. Card Interactivity
    const cards = document.querySelectorAll('.bento-item, .price-card, .stat-item');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left - rect.width/2) / 20;
            const y = (e.clientY - rect.top - rect.height/2) / -20;
            card.style.transform = `perspective(1000px) rotateX(${y}deg) rotateY(${x}deg) translateY(-10px)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = `perspective(1000px) rotateX(0) rotateY(0) translateY(0)`;
        });
    });
});
