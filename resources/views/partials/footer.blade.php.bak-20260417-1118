<footer id="colophon" class="eco-site-footer" role="contentinfo">
    <style>
        .eco-site-footer {
            position: relative;
            margin-top: 0;
            background:
                radial-gradient(circle at 12% 18%, rgba(91, 158, 255, 0.14), transparent 32%),
                radial-gradient(circle at 83% 82%, rgba(109, 196, 255, 0.12), transparent 28%),
                linear-gradient(180deg, #103c80 0%, #0d346f 52%, #0a2c60 100%);
            color: #ffffff;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.05);
        }

        .eco-site-footer::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.04), transparent 32%),
                linear-gradient(12deg, transparent 58%, rgba(255, 255, 255, 0.03) 100%);
            pointer-events: none;
        }

        .eco-site-footer__inner,
        .eco-site-footer__bottom {
            position: relative;
            z-index: 1;
            width: min(100%, 1260px);
            margin: 0 auto;
            padding-left: 24px;
            padding-right: 24px;
        }

        .eco-site-footer__inner {
            display: grid;
            grid-template-columns: 1.15fr 0.95fr 0.85fr 1.05fr;
            gap: 42px;
            padding-top: 34px;
            padding-bottom: 28px;
            align-items: start;
        }

        .eco-site-footer__brand {
            max-width: 310px;
        }

        .eco-site-footer__logo {
            display: inline-flex;
            align-items: center;
            margin-bottom: 18px;
        }

        .eco-site-footer__logo img {
            width: 158px;
            max-width: 100%;
            height: auto;
            display: block;
        }

        .eco-site-footer__description {
            margin: 0 0 12px;
            color: rgba(255, 255, 255, 0.92);
            font-size: 16px;
            line-height: 1.72;
            font-weight: 500;
        }

        .eco-site-footer__feature-list,
        .eco-site-footer__nav,
        .eco-site-footer__contact-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .eco-site-footer__feature-list {
            display: grid;
            gap: 10px;
            margin-top: 12px;
        }

        .eco-site-footer__feature-item,
        .eco-site-footer__nav li,
        .eco-site-footer__contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255, 255, 255, 0.94);
            font-size: 15px;
            line-height: 1.45;
        }

        .eco-site-footer__feature-item svg,
        .eco-site-footer__nav li svg,
        .eco-site-footer__contact-item svg {
            flex: 0 0 auto;
            width: 14px;
            height: 14px;
            color: #95d34f;
            fill: currentColor;
        }

        .eco-site-footer__heading {
            margin: 6px 0 18px;
            color: #ffffff;
            font-size: 20px;
            line-height: 1.2;
            font-weight: 700;
        }

        .eco-site-footer__nav {
            display: grid;
            gap: 11px;
        }

        .eco-site-footer__nav a,
        .eco-site-footer__contact-item a,
        .eco-site-footer__bottom a {
            color: rgba(255, 255, 255, 0.94);
            text-decoration: none;
            transition: color 0.2s ease, opacity 0.2s ease;
        }

        .eco-site-footer__nav a:hover,
        .eco-site-footer__contact-item a:hover,
        .eco-site-footer__bottom a:hover {
            color: #b8ea74;
        }

        .eco-site-footer__contact-list {
            display: grid;
            gap: 12px;
            margin-bottom: 20px;
        }

        .eco-site-footer__cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 0 22px;
            border-radius: 10px;
            background: linear-gradient(180deg, #7cc14a 0%, #5a9f34 100%);
            box-shadow: 0 10px 24px rgba(3, 24, 58, 0.24);
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .eco-site-footer__cta:hover {
            color: #ffffff;
            filter: brightness(1.04);
        }

        .eco-site-footer__cta svg {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }

        .eco-site-footer__bottom-bar {
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            background: linear-gradient(180deg, rgba(3, 23, 56, 0.08), rgba(3, 23, 56, 0.18));
        }

        .eco-site-footer__bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .eco-site-footer__copyright {
            margin: 0;
            color: rgba(255, 255, 255, 0.82);
            font-size: 14px;
            line-height: 1.5;
        }

        .eco-site-footer__copyright strong {
            color: #ffffff;
            font-weight: 700;
        }

        .eco-site-footer__bottom-links {
            display: flex;
            align-items: center;
            gap: 14px;
            color: rgba(255, 255, 255, 0.38);
            font-size: 14px;
        }

        @media (max-width: 1100px) {
            .eco-site-footer__inner {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 34px 28px;
            }

            .eco-site-footer__brand {
                max-width: none;
            }
        }

        @media (max-width: 767px) {
            .eco-site-footer__inner,
            .eco-site-footer__bottom {
                padding-left: 18px;
                padding-right: 18px;
            }

            .eco-site-footer__inner {
                grid-template-columns: 1fr;
                gap: 26px;
                padding-top: 28px;
                padding-bottom: 24px;
            }

            .eco-site-footer__logo img {
                width: 150px;
            }

            .eco-site-footer__description {
                font-size: 15px;
                line-height: 1.65;
            }

            .eco-site-footer__heading {
                margin-bottom: 14px;
                font-size: 19px;
            }

            .eco-site-footer__cta {
                width: 100%;
                justify-content: center;
            }

            .eco-site-footer__bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .eco-site-footer__bottom-links {
                flex-wrap: wrap;
                gap: 10px;
            }
        }
    </style>

    <div class="eco-site-footer__inner">
        <div class="eco-site-footer__brand">
            <a class="eco-site-footer__logo" href="{{ url('/') }}" aria-label="Eco Clean Startseite">
                <img src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/ecoclean_logo-1-removebg-preview.png') }}" alt="Eco Clean">
            </a>

            <p class="eco-site-footer__description">
                Professionelle Reinigungsdienste in Wien &amp; Umgebung für Privat- und Gewerbeobjekte.
            </p>

            <ul class="eco-site-footer__feature-list">
                <li class="eco-site-footer__feature-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l2.45 4.96 5.48.8-3.96 3.86.93 5.46L12 14.9l-4.9 2.58.94-5.46L4.08 7.76l5.47-.8L12 2z"/></svg>
                    <span>5-Sterne Service</span>
                </li>
                <li class="eco-site-footer__feature-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a7 7 0 0 1 7 7c0 4.82-5.02 10.39-6.42 11.86a.83.83 0 0 1-1.16 0C10.02 19.39 5 13.82 5 9a7 7 0 0 1 7-7zm0 9.5A2.5 2.5 0 1 0 12 6a2.5 2.5 0 0 0 0 5.5z"/></svg>
                    <span>Wien &amp; Umgebung</span>
                </li>
                <li class="eco-site-footer__feature-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <span>Schnell &amp; zuverlässig</span>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="eco-site-footer__heading">Unsere Leistungen</h3>
            <ul class="eco-site-footer__nav">
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('services.professionelle-buroreinigung-in-wien') }}">Büroreinigung</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('services.fensterreinigung-in-wien') }}">Fensterreinigung</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('services.professionelle-bodenreinigung-in-wien') }}">Grundreinigung</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('services.bauendreinigung') }}">Baureinigung</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('services.teppichreinigung-in-wien') }}">Teppichreinigung</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="eco-site-footer__heading">Schnellzugriff</h3>
            <ul class="eco-site-footer__nav">
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('home') }}">Startseite</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('services.index') }}">Leistungen</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('about') }}">Über uns</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('contact') }}">Kontakt</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('legal.impressum') }}">Impressum</a>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.55 18.2 3.8 12.45l1.4-1.4 4.35 4.34 9.25-9.24 1.4 1.4L9.55 18.2z"/></svg>
                    <a href="{{ route('legal.impressum') }}">Datenschutz</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="eco-site-footer__heading">Kontakt</h3>
            <ul class="eco-site-footer__contact-list">
                <li class="eco-site-footer__contact-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.62 10.79a15.54 15.54 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.24c1.12.37 2.31.56 3.54.56a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.85 21 3 13.15 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.23.19 2.42.56 3.54a1 1 0 0 1-.25 1l-2.19 2.25z"/></svg>
                    <a href="tel:+4369917777752">+43 699 17777752</a>
                </li>
                <li class="eco-site-footer__contact-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16a1 1 0 0 1 1 1v.64l-9 6.75-9-6.75V6a1 1 0 0 1 1-1zm17 3.11-8.4 6.3a1 1 0 0 1-1.2 0L3 8.11V18a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V8.11z"/></svg>
                    <a href="mailto:office@eco-clean.at">info@eco-clean.at</a>
                </li>
                <li class="eco-site-footer__contact-item">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a7 7 0 0 1 7 7c0 4.82-5.02 10.39-6.42 11.86a.83.83 0 0 1-1.16 0C10.02 19.39 5 13.82 5 9a7 7 0 0 1 7-7zm0 9.5A2.5 2.5 0 1 0 12 6a2.5 2.5 0 0 0 0 5.5z"/></svg>
                    <span>Wien, Österreich</span>
                </li>
            </ul>

            <a class="eco-site-footer__cta" href="{{ route('contact') }}">
                <span>Jetzt Angebot anfragen</span>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.17 6.41 11.76 7.82 15.94 12l-4.18 4.18 1.41 1.41L18.76 12l-5.59-5.59z"/></svg>
            </a>
        </div>
    </div>

    <div class="eco-site-footer__bottom-bar">
        <div class="eco-site-footer__bottom">
            <p class="eco-site-footer__copyright">
                &copy; 2026 <strong>eco clean</strong> – Alle Rechte vorbehalten
            </p>

            <div class="eco-site-footer__bottom-links">
                <a href="{{ route('legal.impressum') }}">Impressum</a>
                <span>|</span>
                <a href="{{ route('legal.impressum') }}">Datenschutz</a>
            </div>
        </div>
    </div>
</footer>
