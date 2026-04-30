document.addEventListener('DOMContentLoaded', () => {
    const progressBar = document.getElementById("progressBar");

    // 1. Smooth Scroll Progress Logic
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        if (progressBar) {
            progressBar.style.width = scrolled + "%";
        }
    });

    // 2. Advanced Intersection Observer with Staggered Delays
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px" // Triggers slightly before element hits the view
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // If the element is a container (grid), stagger its children
                if (entry.target.classList.contains('bento-grid') || 
                    entry.target.classList.contains('pricing-grid') || 
                    entry.target.classList.contains('stats-grid')) {
                    
                    const children = entry.target.querySelectorAll('.reveal');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('active');
                        }, index * 150); // 150ms delay between each card
                    });
                } else {
                    entry.target.classList.add('active');
                }
                // Unobserve after animating to save performance
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // 3. Track Grids and Standalone Elements
    const revealElements = document.querySelectorAll('.reveal, .bento-grid, .pricing-grid, .stats-grid');
    revealElements.forEach(el => {
        observer.observe(el);
    });

    // 4. Hero Parallax Effect
    // This makes the text move slightly slower than the scroll, creating depth
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroText = document.querySelector('.hero h1');
        const heroTag = document.querySelector('.hero .hero-tag');
        
        if (heroText) {
            heroText.style.transform = `translateY(${scrolled * 0.2}px)`;
            heroText.style.opacity = 1 - (scrolled / 600);
        }
        if (heroTag) {
            heroTag.style.transform = `translateY(${scrolled * 0.1}px)`;
        }
    });
});
// Check screen width
const isMobile = window.innerWidth < 768;

if (!isMobile) {
    // Only initialize complex animations if NOT on mobile
    // Example: GSAP.to(".reveal", { opacity: 1, stagger: 0.2 });
} else {
    // Optionally: Add a class to the body to help with styling
    document.body.classList.add('is-mobile');
}
