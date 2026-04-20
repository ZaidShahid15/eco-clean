<script src="{{ asset('assets/js/clone-app.js') }}"></script>
<script>
(() => {
    const prefix = 'cmplz_';
    const expiryDays = 365;
    const categories = ['preferences', 'statistics', 'marketing'];

    const setCookie = (name, value) => {
        const expires = new Date(Date.now() + expiryDays * 864e5).toUTCString();
        document.cookie = `${prefix}${name}=${encodeURIComponent(value)}; expires=${expires}; path=/; SameSite=Lax`;
    };

    const getCookie = (name) => {
        const target = `${prefix}${name}=`;
        return document.cookie
            .split(';')
            .map((item) => item.trim())
            .find((item) => item.startsWith(target))
            ?.slice(target.length) ?? '';
    };

    document.addEventListener('DOMContentLoaded', () => {
        const banner = document.querySelector('#cmplz-cookiebanner-container .cmplz-cookiebanner');
        const manageButton = document.querySelector('#cmplz-manage-consent .cmplz-manage-consent');

        if (!banner || !manageButton) return;

        const optionalCheckboxes = Array.from(banner.querySelectorAll('.cmplz-consent-checkbox:not(.cmplz-functional)'));
        const acceptButton = banner.querySelector('.cmplz-accept');
        const denyButton = banner.querySelector('.cmplz-deny');
        const saveButton = banner.querySelector('.cmplz-save-preferences');
        const viewPreferencesButton = banner.querySelector('.cmplz-view-preferences');
        const closeButton = banner.querySelector('.cmplz-close');
        const details = Array.from(banner.querySelectorAll('.cmplz-category'));

        const showBanner = () => {
            banner.classList.remove('cmplz-hidden');
            banner.classList.remove('cmplz-dismissed');
            banner.classList.add('cmplz-show');
            manageButton.classList.remove('cmplz-show');
            manageButton.classList.add('cmplz-dismissed', 'cmplz-hidden');
        };

        const hideBanner = () => {
            banner.classList.remove('cmplz-show');
            banner.classList.add('cmplz-dismissed', 'cmplz-hidden');
            manageButton.classList.remove('cmplz-hidden', 'cmplz-dismissed');
            manageButton.classList.add('cmplz-show');
        };

        const setPreferencesVisibility = (visible) => {
            banner.classList.toggle('cmplz-categories-visible', visible);

            details.forEach((detail, index) => {
                detail.open = index === 0 || visible;
            });
        };

        const applyConsentToInputs = () => {
            optionalCheckboxes.forEach((checkbox) => {
                const category = checkbox.dataset.category?.replace('cmplz_', '');
                checkbox.checked = getCookie(category) === 'allow';
            });
        };

        const setBannerStatus = (status) => {
            setCookie('banner-status', status);

            if (status === 'dismissed') {
                hideBanner();
                return;
            }

            showBanner();
        };

        const setConsent = (category, allowed) => {
            setCookie(category, allowed ? 'allow' : 'deny');
        };

        const acceptAll = () => {
            categories.forEach((category) => setConsent(category, true));
            applyConsentToInputs();
            setBannerStatus('dismissed');
        };

        const denyAll = () => {
            categories.forEach((category) => setConsent(category, false));
            applyConsentToInputs();
            setBannerStatus('dismissed');
        };

        const savePreferences = () => {
            optionalCheckboxes.forEach((checkbox) => {
                const category = checkbox.dataset.category?.replace('cmplz_', '');
                setConsent(category, checkbox.checked);
            });

            hideBanner();
        };

        const resetLegacyConsent = () => {
            try {
                localStorage.removeItem('cmplz_cookie_consent');
            } catch (error) {
                // Ignore storage cleanup issues.
            }
        };

        resetLegacyConsent();
        applyConsentToInputs();
        setPreferencesVisibility(false);

        if (getCookie('banner-status') === 'dismissed') {
            hideBanner();
        } else {
            showBanner();
        }

        acceptButton?.addEventListener('click', () => {
            acceptAll();
        });

        denyButton?.addEventListener('click', () => {
            denyAll();
        });

        saveButton?.addEventListener('click', () => {
            savePreferences();
            setBannerStatus('dismissed');
        });

        viewPreferencesButton?.addEventListener('click', () => {
            setPreferencesVisibility(!banner.classList.contains('cmplz-categories-visible'));
        });

        manageButton?.addEventListener('click', () => {
            setPreferencesVisibility(false);
            setBannerStatus('show');
        });

        closeButton?.addEventListener('click', () => {
            setBannerStatus('dismissed');
        });

        closeButton?.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                setBannerStatus('dismissed');
            }
        });
    });
})();
</script>
<script>
(() => {
    const exactTextMap = new Map([
        ['First Name', 'Vorname'],
        ['Last Name', 'Nachname'],
        ['Email', 'E-Mail'],
        ['Email Address', 'E-Mail-Adresse'],
        ['Phone/Mobile', 'Telefon/Mobil'],
        ['Mobile Number', 'Mobilnummer'],
        ['Regarding', 'Betreff'],
        ['News', 'Nachricht'],
        ['Your Message', 'Ihre Nachricht'],
        ['Submit Form', 'Formular absenden'],
        ['Contact Form Demo', 'Kontaktformular'],
        ['Blank Form (#3)', 'Kontaktformular'],
        ['Services Form', 'Leistungsformular'],
        ['- Select -', '- Bitte wählen -'],
        ['Window Cleaning', 'Fensterreinigung'],
        ['Office Cleaning', 'Büroreinigung'],
        ['Floor Cleaning In Vienna', 'Bodenreinigung in Wien'],
        ['Facade Cleaning', 'Fassadenreinigung'],
        ['Carpet Cleaning Vienna', 'Teppichreinigung Wien'],
        ['Final Cleaning', 'Endreinigung'],
        ['Special Cleaning In Vienna And The Surrounding Area', 'Sonderreinigung in Wien und Umgebung'],
        ['Leave a Reply', 'Kommentar hinterlassen'],
        ['Cancel reply', 'Antwort abbrechen'],
        ['Your email address will not be published.', 'Ihre E-Mail-Adresse wird nicht veröffentlicht.'],
        ['Required fields are marked', 'Pflichtfelder sind markiert'],
        ['Your Name', 'Ihr Name'],
        ['Website', 'Webseite'],
        ['Write a Message', 'Schreiben Sie eine Nachricht'],
        ['Post Comment', 'Kommentar absenden'],
        ['Search here', 'Hier suchen'],
        ['Send Message', 'Nachricht senden'],
        ['Have Any Query?', 'Haben Sie Fragen?'],
        ['Our Location', 'Unser Standort'],
        ['Quick Contact', 'Schnellkontakt'],
        ['P.O. Box - 115037, Dubai U.A.E', 'Postfach - 115037, Dubai, V.A.E.'],
        ['1 Comment', '1 Kommentar'],
        ['No Comments', 'Keine Kommentare'],
        ['Comment', 'Kommentar'],
        ['Comments', 'Kommentare']
    ]);

    exactTextMap.set('- Regarding-', '- Betreff -');
    exactTextMap.set('Dropdown', 'Auswahl');
    exactTextMap.set('Miscellaneous', 'Sonstiges');
    exactTextMap.set('Home Care', 'Hausbetreuung');
    exactTextMap.set('Winter Service', 'Winterdienst');
    exactTextMap.set('Garden Care', 'Gartenpflege');
    exactTextMap.set('Garage Cleaning', 'Garagenreinigung');
    exactTextMap.set('Office/Maintenance Cleaning', 'BÃ¼ro-/Unterhaltsreinigung');
    exactTextMap.set('Basic Cleaning', 'Grundreinigung');
    exactTextMap.set('Carpet Cleaning', 'Teppichreinigung');

    const privacyEnglish = 'I have read the privacy policy. I agree that my details and data will be collected and stored electronically to answer my request. Note: You can revoke your consent at any time by sending an email to office@eco.clean.at .';
    const privacyGerman = 'Ich habe die Datenschutzerklärung gelesen. Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und gespeichert werden. Hinweis: Sie können Ihre Einwilligung jederzeit per E-Mail an office@eco.clean.at widerrufen.';

    const replaceExactText = (value) => exactTextMap.get(value.trim()) ?? value;

    const translateNodeText = (node) => {
        if (!node || !node.textContent) return;
        const original = node.textContent.trim();
        if (!original) return;
        if (original === privacyEnglish) {
            node.textContent = privacyGerman;
            return;
        }
        const translated = exactTextMap.get(original);
        if (translated) {
            node.textContent = translated;
        }
    };

    const translateAttribute = (element, attribute) => {
        const value = element.getAttribute(attribute);
        if (!value) return;
        if (value === privacyEnglish) {
            element.setAttribute(attribute, privacyGerman);
            return;
        }
        const translated = exactTextMap.get(value.trim());
        if (translated) {
            element.setAttribute(attribute, translated);
        }
    };

    const translateFluentValidationMessages = () => {
        const replacements = {
            'This field is required': 'Dieses Feld ist erforderlich',
            'This field must contain a valid email': 'Dieses Feld muss eine gültige E-Mail-Adresse enthalten',
            'Phone number is not valid': 'Die Telefonnummer ist nicht gültig'
        };

        for (const key of Object.keys(window)) {
            if (!key.startsWith('fluent_form_')) continue;
            const config = window[key];
            if (!config || typeof config !== 'object' || !config.rules) continue;

            for (const fieldRules of Object.values(config.rules)) {
                if (!fieldRules || typeof fieldRules !== 'object') continue;
                for (const rule of Object.values(fieldRules)) {
                    if (!rule || typeof rule !== 'object') continue;
                    if (typeof rule.message === 'string' && replacements[rule.message]) {
                        rule.message = replacements[rule.message];
                    }
                    if (typeof rule.global_message === 'string' && replacements[rule.global_message]) {
                        rule.global_message = replacements[rule.global_message];
                    }
                }
            }
        }
    };

    const translateForms = (root = document) => {
        root.querySelectorAll('form legend, form label, form button span, form button, form option, form p span, form p label, form p, form a, form h3, form .required-field-message, form #email-notes').forEach(translateNodeText);

        root.querySelectorAll('form input, form textarea, form select, form button').forEach((element) => {
            ['placeholder', 'aria-label', 'value', 'title'].forEach((attribute) => translateAttribute(element, attribute));
        });

        root.querySelectorAll('.comment-reply-title').forEach((title) => {
            const smallLink = title.querySelector('small a');
            if (title.firstChild && title.firstChild.nodeType === Node.TEXT_NODE) {
                title.firstChild.textContent = 'Kommentar hinterlassen ';
            }
            if (smallLink) {
                smallLink.textContent = 'Antwort abbrechen';
            }
        });

        root.querySelectorAll('.comment-notes').forEach((note) => {
            const emailNotes = note.querySelector('#email-notes');
            const requiredMessage = note.querySelector('.required-field-message');
            if (emailNotes) emailNotes.textContent = 'Ihre E-Mail-Adresse wird nicht veröffentlicht.';
            if (requiredMessage) {
                requiredMessage.childNodes[0].textContent = 'Pflichtfelder sind markiert ';
            }
        });

        root.querySelectorAll('.comment-form-cookies-consent label').forEach((label) => {
            label.textContent = 'Meinen Namen, meine E-Mail-Adresse und meine Webseite in diesem Browser für meinen nächsten Kommentar speichern.';
        });

        root.querySelectorAll('.sidebar__search-form input[type="search"]').forEach((input) => {
            input.setAttribute('placeholder', 'Hier suchen');
        });

        root.querySelectorAll('.ff-el-form-check-label, .ff-el-form-check-label span').forEach((node) => {
            if (node.textContent.trim() === privacyEnglish) {
                node.textContent = privacyGerman;
            }
        });

        root.querySelectorAll('.ff-el-form-check-input').forEach((input) => {
            if (input.value === privacyEnglish) {
                input.value = privacyGerman;
            }
            if (input.getAttribute('aria-label') === privacyEnglish) {
                input.setAttribute('aria-label', privacyGerman);
            }
        });

        translateFluentValidationMessages();
    };

    document.addEventListener('DOMContentLoaded', () => {
        translateForms();

        const observer = new MutationObserver((mutations) => {
            for (const mutation of mutations) {
                mutation.addedNodes.forEach((node) => {
                    if (node.nodeType === Node.ELEMENT_NODE) {
                        translateForms(node);
                    }
                });
            }
        });

        observer.observe(document.body, { childList: true, subtree: true });
    });
})();
</script>
