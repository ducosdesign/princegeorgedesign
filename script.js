document.addEventListener('DOMContentLoaded', () => {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                if (entry.target.classList.contains('stats-grid') || entry.target.classList.contains('pricing-grid') || entry.target.classList.contains('bento-grid')) {
                    Array.from(entry.target.children).forEach((child, i) => {
                        setTimeout(() => child.classList.add('active'), i * 150);
                    });
                }
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal, .stats-grid, .pricing-grid, .bento-grid').forEach(el => revealObserver.observe(el));

    document.querySelectorAll('.stat-item, .bento-item, .price-card').forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const rotateX = (e.clientY - rect.top - rect.height/2) / -25;
            const rotateY = (e.clientX - rect.left - rect.width/2) / 25;
            el.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-15px)`;
        });
        el.addEventListener('mouseleave', () => el.style.transform = `perspective(1000px) rotateX(0) rotateY(0) translateY(0)`);
    });
});
