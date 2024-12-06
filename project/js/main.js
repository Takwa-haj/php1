// Main JavaScript file for handling dynamic interactions
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Lucide icons
    lucide.createIcons();

    // Handle mobile menu
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Handle newsletter form submission
    const newsletterForm = document.querySelector('form[action="includes/subscribe.php"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = newsletterForm.querySelector('input[type="email"]').value;
            
            try {
                const response = await fetch('includes/subscribe.php', {
                    method: 'POST',
                    body: new FormData(newsletterForm)
                });
                
                if (response.ok) {
                    alert('Merci de votre inscription !');
                    newsletterForm.reset();
                } else {
                    alert('Une erreur est survenue. Veuillez réessayer.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        });
    }
});