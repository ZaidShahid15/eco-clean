document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('form').forEach((form) => {
        if (!form.querySelector('.eco-clone-form-note')) {
            const note = document.createElement('p');
            note.className = 'eco-clone-form-note';
            note.textContent = 'Frontend-Demoformular. Die Verarbeitung ist in dieser Laravel-Clone-Version noch nicht verbunden.';
            form.appendChild(note);
        }

        form.addEventListener('submit', (event) => {
            event.preventDefault();
        });
    });

    const menuButton = document.querySelector('.menu-toggle, .hfe-nav-menu__toggle');
    const menuPanel = document.querySelector('.hfe-nav-menu, .main-menu__wrapper');

    if (menuButton && menuPanel) {
        menuButton.addEventListener('click', () => {
            menuPanel.classList.toggle('is-open');
        });
    }

    const sliders = document.querySelectorAll('.elementor-main-swiper');
    sliders.forEach((slider) => {
        const slides = Array.from(slider.querySelectorAll('.swiper-slide'));
        if (slides.length < 2) {
            return;
        }

        let index = 0;

        const showSlide = (nextIndex) => {
            slides.forEach((slide, slideIndex) => {
                slide.style.display = slideIndex === nextIndex ? 'block' : 'none';
            });
            index = nextIndex;
        };

        showSlide(0);

        const nextButton = slider.parentElement?.querySelector('.elementor-swiper-button-next');
        const prevButton = slider.parentElement?.querySelector('.elementor-swiper-button-prev');

        nextButton?.addEventListener('click', () => {
            showSlide((index + 1) % slides.length);
        });

        prevButton?.addEventListener('click', () => {
            showSlide((index - 1 + slides.length) % slides.length);
        });

        window.setInterval(() => {
            showSlide((index + 1) % slides.length);
        }, 5000);
    });
});
