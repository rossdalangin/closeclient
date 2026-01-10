// CloseClient.com - Animations & Interactivity
// -------------------------------------------

document.addEventListener('DOMContentLoaded', function() {

    // --- On-Scroll Reveal Animation ---
    const revealElements = document.querySelectorAll('.reveal');

    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Stop observing once it's visible
                }
            });
        }, {
            threshold: 0.1 // Trigger when 10% of the element is visible
        });

        revealElements.forEach(elem => {
            revealObserver.observe(elem);
        });
    }

    // --- Active Nav Link Styling ---
    // Note: This is a simple implementation. For a more complex site (e.g., a single-page app),
    // a more robust routing solution would be better.
    const navLinks = document.querySelectorAll('.nav a');
    const currentLocation = window.location.pathname.split('/').pop();

    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href').split('/').pop();
        // Remove current active class
        link.classList.remove('active');
        // Add active class if the link href matches the current page
        if (currentLocation === linkPath || (currentLocation === '' && linkPath === 'index.html')) {
            link.classList.add('active');
        }
    });

});
