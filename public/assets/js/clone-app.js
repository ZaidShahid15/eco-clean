document.addEventListener('DOMContentLoaded', () => {
    const slugifyHeading = (text, fallback) => {
        const slug = (text || '')
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');

        return slug || fallback;
    };

    document.querySelectorAll('.elementor-widget-table-of-contents').forEach((widget, widgetIndex) => {
        const body = widget.querySelector('.elementor-toc__body');
        if (!body) {
            return;
        }

        let settings = {};
        const rawSettings = widget.getAttribute('data-settings');

        if (rawSettings) {
            try {
                settings = JSON.parse(rawSettings.replace(/&quot;/g, '"'));
            } catch (error) {
                settings = {};
            }
        }

        const headingSelector = Array.isArray(settings.headings_by_tags) && settings.headings_by_tags.length
            ? settings.headings_by_tags.join(',')
            : 'h2,h3,h4';

        const headings = Array.from(document.querySelectorAll(headingSelector))
            .filter((heading) => !widget.contains(heading))
            .filter((heading) => heading.textContent.trim().length > 0);

        body.innerHTML = '';

        if (!headings.length) {
            const emptyState = document.createElement('div');
            emptyState.className = 'elementor-toc__no-headings';
            emptyState.textContent = settings.no_headings_message || 'No headings were found on this page.';
            body.appendChild(emptyState);
            return;
        }

        const list = document.createElement('ul');
        list.className = 'elementor-toc__list-wrapper';

        headings.forEach((heading, headingIndex) => {
            if (!heading.id) {
                heading.id = slugifyHeading(heading.textContent, `toc-${widgetIndex + 1}-${headingIndex + 1}`);
            }

            const item = document.createElement('li');
            item.className = `elementor-toc__list-item elementor-toc__list-item-${heading.tagName.toLowerCase()}`;

            const link = document.createElement('a');
            link.className = 'elementor-toc__list-item-text';
            link.href = `#${heading.id}`;
            link.textContent = heading.textContent.trim();

            item.appendChild(link);
            list.appendChild(item);
        });

        body.appendChild(list);
    });

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
