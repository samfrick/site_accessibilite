// Gestion de l'accessibilité du menu déroulant
document.addEventListener("DOMContentLoaded", () => {
    const menuButtons = document.querySelectorAll('nav [aria-haspopup="true"]');

    menuButtons.forEach(button => {
        const parentLi = button.closest('li');
        const submenu = parentLi.querySelector('ul[role="menu"]');

        // Gestion du clic sur le bouton
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const isExpanded = button.getAttribute('aria-expanded') === 'true';

            // Fermer tous les autres menus
            menuButtons.forEach(btn => {
                if (btn !== button) {
                    btn.setAttribute('aria-expanded', 'false');
                }
            });

            // Basculer l'état du menu actuel
            button.setAttribute('aria-expanded', !isExpanded);
        });

        // Gestion du focus-within pour synchroniser aria-expanded
        parentLi.addEventListener('focusin', () => {
            button.setAttribute('aria-expanded', 'true');
        });

        parentLi.addEventListener('focusout', (e) => {
            // Vérifier si le focus reste dans le sous-menu
            if (!parentLi.contains(e.relatedTarget)) {
                button.setAttribute('aria-expanded', 'false');
            }
        });

        // Fermer le menu avec Échap
        parentLi.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                button.setAttribute('aria-expanded', 'false');
                button.focus();
            }
        });

        // Fermer le menu au clic en dehors
        document.addEventListener('click', (e) => {
            if (!parentLi.contains(e.target)) {
                button.setAttribute('aria-expanded', 'false');
            }
        });
    });
});
