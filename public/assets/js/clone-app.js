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
        const header = widget.querySelector('.elementor-toc__header');
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

        if (header) {
            widget.classList.remove('is-collapsed');
            header.setAttribute('role', 'button');
            header.setAttribute('tabindex', '0');
            header.setAttribute('aria-expanded', 'true');
            body.style.display = '';

            const toggleToc = () => {
                const isCollapsed = widget.classList.toggle('is-collapsed');
                body.style.display = isCollapsed ? 'none' : '';
                header.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
            };

            header.addEventListener('click', toggleToc);
            header.addEventListener('keyup', (event) => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    toggleToc();
                }
            });
        }
    });

    document.querySelectorAll('form').forEach((form) => {
        const isSearchForm =
            form.matches('[role="search"]') ||
            form.classList.contains('sidebar__search-form') ||
            form.querySelector('input[type="search"]');

        if (!isSearchForm && !form.querySelector('.eco-clone-form-note')) {
            const note = document.createElement('p');
            note.className = 'eco-clone-form-note';
            note.textContent = 'Frontend-Demoformular. Die Verarbeitung ist in dieser Laravel-Clone-Version noch nicht verbunden.';
            form.appendChild(note);
        }

        if (!isSearchForm) {
            form.addEventListener('submit', (event) => {
                event.preventDefault();
            });
        }
    });

    const flyoutWidgets = document.querySelectorAll('.elementor-widget-navigation-menu');

    flyoutWidgets.forEach((widget) => {
        const trigger = widget.querySelector('.hfe-flyout-trigger, .hfe-nav-menu__toggle');
        const flyoutWrapper = widget.querySelector('.hfe-flyout-wrapper');
        const overlay = widget.querySelector('.hfe-flyout-overlay');
        const closeButton = widget.querySelector('.hfe-flyout-close');
        const flyoutSide = widget.querySelector('.hfe-flyout-container .hfe-side');

        if (!trigger || !flyoutWrapper || !flyoutSide) {
            return;
        }

        const layout =
            flyoutSide.dataset.layout ||
            (flyoutSide.classList.contains('hfe-flyout-right') ? 'right' :
                flyoutSide.classList.contains('bottom') ? 'bottom' :
                    flyoutSide.classList.contains('top') ? 'top' : 'left');

        const setExpanded = (expanded) => {
            trigger.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        };

        const openFlyout = () => {
            flyoutSide.classList.add('hfe-flyout-show');
            flyoutWrapper.classList.add('is-open');

            if (overlay) {
                overlay.style.display = 'block';
            }

            if (layout === 'right') {
                flyoutSide.style.right = '0';
            } else if (layout === 'top') {
                flyoutSide.style.top = '0';
            } else if (layout === 'bottom') {
                flyoutSide.style.bottom = '0';
            } else {
                flyoutSide.style.left = '0';
            }

            document.body.classList.add('hfe-flyout-active');
            setExpanded(true);
        };

        const closeFlyout = () => {
            flyoutWrapper.classList.remove('is-open');

            if (overlay) {
                overlay.style.display = 'none';
            }

            if (layout === 'right') {
                flyoutSide.style.right = '-100%';
            } else if (layout === 'top') {
                flyoutSide.style.top = '-100%';
            } else if (layout === 'bottom') {
                flyoutSide.style.bottom = '-100%';
            } else {
                flyoutSide.style.left = '-100%';
            }

            window.setTimeout(() => {
                if (!flyoutWrapper.classList.contains('is-open')) {
                    flyoutSide.classList.remove('hfe-flyout-show');
                }
            }, 200);

            document.body.classList.remove('hfe-flyout-active');
            setExpanded(false);
        };

        const handleTrigger = (event) => {
            if (event.type === 'keyup' && event.key !== 'Enter' && event.key !== ' ') {
                return;
            }

            event.preventDefault();

            if (flyoutWrapper.classList.contains('is-open')) {
                closeFlyout();
            } else {
                openFlyout();
            }
        };

        trigger.addEventListener('click', handleTrigger);
        trigger.addEventListener('keyup', handleTrigger);

        overlay?.addEventListener('click', closeFlyout);
        closeButton?.addEventListener('click', closeFlyout);
        closeButton?.addEventListener('keyup', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                closeFlyout();
            }
        });

        widget.querySelectorAll('.hfe-flyout-wrapper a.hfe-menu-item').forEach((link) => {
            link.addEventListener('click', closeFlyout);
        });
    });

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
