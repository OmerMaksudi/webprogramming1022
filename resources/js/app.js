const hamburger = document.querySelector('#hamburger');
const mobileMenu = document.querySelector('#mobile-menu');

if (hamburger instanceof HTMLButtonElement && mobileMenu instanceof HTMLElement) {
    hamburger.addEventListener('click', () => {
        const isExpanded = hamburger.getAttribute('aria-expanded') === 'true';

        hamburger.setAttribute('aria-expanded', String(!isExpanded));
        mobileMenu.classList.toggle('hidden', isExpanded);
    });
}
