@extends('layouts.app')

@section('title', 'Reinigungsfirma in Wien: Ihr zuverlässiger Partner für Sauberkeit')
@section('meta_description', 'Entdecken Sie, wie eine Reinigungsfirma in Wien Ihnen zu einem strahlend sauberen Zuhause verhilft. Lesen Sie weiter für wertvolle Tipps und Informationen!')
@section('canonical', '/')
@section('robots', 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large')
@section('og_title', 'Reinigungsfirma in Wien: Ihr zuverlässiger Partner für Sauberkeit')
@section('og_description', 'Entdecken Sie, wie eine Reinigungsfirma in Wien Ihnen zu einem strahlend sauberen Zuhause verhilft. Lesen Sie weiter für wertvolle Tipps und Informationen!')
@section('og_image', '')

@section('twitter_title', 'Reinigungsfirma in Wien: Ihr zuverlässiger Partner für Sauberkeit')
@section('twitter_description', 'Entdecken Sie, wie eine Reinigungsfirma in Wien Ihnen zu einem strahlend sauberen Zuhause verhilft. Lesen Sie weiter für wertvolle Tipps und Informationen!')

@section('body_class', 'home wp-singular page-template page-template-elementor_header_footer page page-id-532 custom-background wp-custom-logo wp-embed-responsive wp-theme-washup ehf-header ehf-footer ehf-template-washup ehf-stylesheet-washup no-sidebar elementor-default elementor-template-full-width elementor-kit-10 elementor-page elementor-page-532')

@section('schema')
@endsection

@section('content')
<style>
    .elementor-532 .elementor-widget-text-editor,
    .elementor-532 .elementor-widget-text-editor p,
    .elementor-532 .elementor-widget-text-editor span,
    .elementor-532 .elementor-widget-text-editor li,
    .elementor-532 .elementor-widget-text-editor b,
    .elementor-532 .elementor-widget-text-editor strong,
    .elementor-532 .elementor-widget-text-editor i {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .elementor-element-bdea079 .elementor-heading-title,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor li,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor i,
    .elementor-532 .elementor-element-8b8efd6 .elementor-heading-title,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor li,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor i,
    .elementor-532 .elementor-element-a6de2eb .elementor-heading-title,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor li,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor i,
    .elementor-532 .elementor-element-bdea079 .elementor-heading-title,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor li,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-bdea079 .elementor-widget-text-editor i,
    .elementor-532 .elementor-element-8b8efd6 .elementor-heading-title,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor li,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-8b8efd6 .elementor-widget-text-editor i,
    .elementor-532 .elementor-element-a6de2eb .elementor-heading-title,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor li,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-a6de2eb .elementor-widget-text-editor i,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-420d2ea .elementor-heading-title,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-420d2ea .elementor-widget-text-editor,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-420d2ea .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-420d2ea .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-420d2ea .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-420d2ea .elementor-widget-text-editor strong,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-18dbd8f .elementor-heading-title,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-18dbd8f .elementor-widget-text-editor,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-18dbd8f .elementor-widget-text-editor p,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-18dbd8f .elementor-widget-text-editor span,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-18dbd8f .elementor-widget-text-editor b,
    .elementor-532 .elementor-element-5bcdc63 .elementor-element-18dbd8f .elementor-widget-text-editor strong {
        color: #ffffff !important;
        fill: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-532 .elementor-element-8f2747c .elementor-heading-title,
    .elementor-532 .elementor-element-70cb5ca,
    .elementor-532 .elementor-element-70cb5ca p,
    .elementor-532 .elementor-element-70cb5ca span,
    .elementor-532 .elementor-element-70cb5ca b,
    .elementor-532 .elementor-element-70cb5ca strong,
    .elementor-532 .elementor-element-70cb5ca i,
    .elementor-532 .elementor-element-300e1de .elementor-heading-title,
    .elementor-532 .elementor-element-1d71cef,
    .elementor-532 .elementor-element-1d71cef p,
    .elementor-532 .elementor-element-1d71cef span,
    .elementor-532 .elementor-element-1d71cef b,
    .elementor-532 .elementor-element-1d71cef strong,
    .elementor-532 .elementor-element-1d71cef i {
        color: #6b6b6b !important;
        fill: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .elementor-element-fa463e4 .elementor-icon-list-text,
    .elementor-532 .elementor-element-fa463e4 .elementor-icon-list-text b,
    .elementor-532 .elementor-element-fa463e4 .elementor-icon-list-icon i,
    .elementor-532 .elementor-element-fa463e4 .elementor-icon-list-icon svg,
    .elementor-532 .elementor-element-436c5d0 .elementor-icon-list-text,
    .elementor-532 .elementor-element-436c5d0 .elementor-icon-list-text b,
    .elementor-532 .elementor-element-436c5d0 .elementor-icon-list-icon i,
    .elementor-532 .elementor-element-436c5d0 .elementor-icon-list-icon svg {
        color: #6b6b6b !important;
        fill: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .elementor-element-185292d .elementor-element-fa463e4 .elementor-icon-list-text,
    .elementor-532 .elementor-element-185292d .elementor-element-fa463e4 .elementor-icon-list-text b,
    .elementor-532 .elementor-element-185292d .elementor-element-fa463e4 .elementor-icon-list-icon i,
    .elementor-532 .elementor-element-185292d .elementor-element-fa463e4 .elementor-icon-list-icon svg {
        color: #ffffff !important;
        fill: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white p,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white span,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white b,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white strong,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white i {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white p.zaid-color,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white p.zaid-color span,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white p.zaid-color b,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white p.zaid-color strong,
    .elementor-532 .elementor-element-70cb5ca.home-blue-desc-white p.zaid-color i {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-532 .zaid-p-color,
    .elementor-532 .zaid-p-color p,
    .elementor-532 .zaid-p-color span,
    .elementor-532 .zaid-p-color b,
    .elementor-532 .zaid-p-color strong,
    .elementor-532 .zaid-p-color i {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .zaid-grey-block .elementor-heading-title,
    .elementor-532 .zaid-grey-block,
    .elementor-532 .zaid-grey-block p,
    .elementor-532 .zaid-grey-block span,
    .elementor-532 .zaid-grey-block b,
    .elementor-532 .zaid-grey-block strong,
    .elementor-532 .zaid-grey-block i {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block,
    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block .elementor-widget-container,
    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block p,
    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block span,
    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block b,
    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block strong,
    .elementor-532 .elementor-element-eb3d82f.zaid-grey-block i {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .elementor-element-32e0c6d .elementor-heading-title {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }

    .elementor-532 .eco-home-areas-head,
    .elementor-532 .eco-home-areas-row {
        background: #ffffff !important;
    }

    .elementor-532 .eco-home-areas-head {
        padding-top: 36px !important;
        padding-bottom: 18px !important;
    }

    .elementor-532 .eco-home-areas-row {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .elementor-532 .eco-home-areas-head .elementor-container,
    .elementor-532 .eco-home-areas-row .elementor-container {
        background: #ffffff !important;
    }

    .elementor-532 .eco-home-areas-row .elementor-widget-wrap {
        background: transparent !important;
    }

    .elementor-532 .eco-home-areas-row .elementor-button {
        background: #ffffff !important;
        border: 1px solid #c8daf8 !important;
        border-radius: 8px !important;
        box-shadow: none !important;
    }

    .elementor-532 .eco-home-areas-row .elementor-button:hover {
        background: #f7fbff !important;
        border-color: #9ebff2 !important;
    }

    .elementor-532 .home-cta-number-german-clean {
        display: block !important;
    }

    .elementor-532 .elementor-element-8dc9af5 .cta-one__inner .title .number p:not(.home-cta-number-german-clean) {
        display: none !important;
    }
</style>
<div data-rocket-location-hash="dc4bf842212fcf52ccf95f51116249f2" data-elementor-type="wp-page" data-elementor-id="532" class="elementor elementor-532" data-elementor-post-type="page">
				<div data-rocket-location-hash="4ca90ffd32e76df212c0618981202236" class="elementor-element elementor-element-a8b848d e-con-full e-flex e-con e-parent" data-id="a8b848d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-337953b elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-widget elementor-widget-slides" data-id="337953b" data-element_type="widget" data-e-type="widget" data-settings="{&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
				<div class="elementor-widget-container">
									<div class="elementor-swiper">
					<div class="elementor-slides-wrapper elementor-main-swiper swiper" role="region" aria-roledescription="Karussell" aria-label="Folien" dir="ltr" data-animation="fadeInUp">
				<div class="swiper-wrapper elementor-slides">
										<div class="elementor-repeater-item-ef6474e swiper-slide" role="group" aria-roledescription="slide"><div class="swiper-slide-bg" role="img" aria-label="main-slider-v1-img1"></div><div class="elementor-background-overlay"></div><a class="swiper-slide-inner" href="tel:+43%201%204420281"><div class="swiper-slide-contents"><div class="elementor-slide-heading"><h5>Ihre zuverlässige Reinigungsfirma in Wien</5> <br> <h1>Willkommen bei Ihrer Reinigungsfirma in Wien!</1></div><div class="elementor-slide-description">Wir sind stolz darauf, als Full-Reinigungsdienstleister eine breite Palette von Reinigungsdiensten anzubieten, die auf die spezifischen Bedürfnisse unserer Kunden zugeschnitten sind. Egal, ob Sie eine gründliche Hausreinigung, Büroreinigung oder eine umfassende Gebäudereinigung benötigen – unser engagiertes Team steht Ihnen mit Fachwissen und Erfahrung zur Seite.
</div><div  class="elementor-button elementor-slide-button elementor-size-md">Jetzt Anrufen!</div></div></a></div><div class="elementor-repeater-item-71d4e74 swiper-slide" role="group" aria-roledescription="slide"><div class="swiper-slide-bg" role="img" aria-label="main-slider-v1-img2"></div><div class="elementor-background-overlay"></div><a class="swiper-slide-inner" href="tel:+43%201%204420281"><div class="swiper-slide-contents"><div class="elementor-slide-heading"><h5>Ihre zuverlässige Reinigungsfirma in Wien</5> <br> <h1>Willkommen bei Ihrer Reinigungsfirma in Wien! </1></div><div class="elementor-slide-description">Wir sind stolz darauf, als Full-Reinigungsdienstleister eine breite Palette von Reinigungsdiensten anzubieten, die auf die spezifischen Bedürfnisse unserer Kunden zugeschnitten sind. Egal, ob Sie eine gründliche Hausreinigung, Büroreinigung oder eine umfassende Gebäudereinigung benötigen – unser engagiertes Team steht Ihnen mit Fachwissen und Erfahrung zur Seite.
</div><div  class="elementor-button elementor-slide-button elementor-size-md">Jetzt anrufen!</div></div></a></div><div class="elementor-repeater-item-69d1b12 swiper-slide" role="group" aria-roledescription="slide"><div class="swiper-slide-bg" role="img" aria-label="main-slider-v1-img3"></div><div class="elementor-background-overlay"></div><a class="swiper-slide-inner" href="tel:+43%201%204420281"><div class="swiper-slide-contents"><div class="elementor-slide-heading"><h5>Ihre zuverlässige Reinigungsfirma in Wien</5> <br> <h1>Willkommen bei Ihrer Reinigungsfirma in Wien! </1></div><div class="elementor-slide-description">Wir sind stolz darauf, als Full-Reinigungsdienstleister eine breite Palette von Reinigungsdiensten anzubieten, die auf die spezifischen Bedürfnisse unserer Kunden zugeschnitten sind. Egal, ob Sie eine gründliche Hausreinigung, Büroreinigung oder eine umfassende Gebäudereinigung benötigen – unser engagiertes Team steht Ihnen mit Fachwissen und Erfahrung zur Seite.
</div><div  class="elementor-button elementor-slide-button elementor-size-md">Jetzt anrufen!</div></div></a></div>				</div>
															<div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0" aria-label="Vorherige Folie">
							<svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-left" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path></svg>						</div>
						<div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0" aria-label="Nächste Folie">
							<svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path></svg>						</div>
																	</div>
				</div>
								</div>
				</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e9b1e4b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e9b1e4b" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b410ed3" data-id="b410ed3" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-38f8b0c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="38f8b0c" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-651755d" data-id="651755d" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f0a3055 elementor-widget elementor-widget-image" data-id="f0a3055" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="400" height="400" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb.png') }}" class="attachment-full size-full wp-image-2870" alt="" srcset="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb.png') }} 400w, {{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb-120x120.png') }} 120w" sizes="(max-width: 400px) 100vw, 400px" />															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6463e1e" data-id="6463e1e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-753457c elementor-widget elementor-widget-heading" data-id="753457c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">eco-clean.at</p>				</div>
				</div>
				<div class="elementor-element elementor-element-bb36d35 elementor-widget elementor-widget-heading" data-id="bb36d35" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default">Ausgezeichnet</h5>				</div>
				</div>
				<div class="elementor-element elementor-element-552e033 elementor-widget elementor-widget-rating" data-id="552e033" data-element_type="widget" data-e-type="widget" data-widget_type="rating.default">
				<div class="elementor-widget-container">
							<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
			<meta itemprop="worstRating" content="0">
			<meta itemprop="bestRating" content="5">
			<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Mit 5 von 5 bewertet">
							<div class="e-icon">
				<div class="e-icon-wrapper e-icon-marked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
				<div class="e-icon-wrapper e-icon-unmarked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
			</div>
						<div class="e-icon">
				<div class="e-icon-wrapper e-icon-marked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
				<div class="e-icon-wrapper e-icon-unmarked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
			</div>
						<div class="e-icon">
				<div class="e-icon-wrapper e-icon-marked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
				<div class="e-icon-wrapper e-icon-unmarked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
			</div>
						<div class="e-icon">
				<div class="e-icon-wrapper e-icon-marked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
				<div class="e-icon-wrapper e-icon-unmarked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
			</div>
						<div class="e-icon">
				<div class="e-icon-wrapper e-icon-marked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
				<div class="e-icon-wrapper e-icon-unmarked">
					<svg aria-hidden="true" class="e-font-icon-svg e-eicon-star" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z"></path></svg>				</div>
			</div>
						</div>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-b6b474b elementor-widget elementor-widget-heading" data-id="b6b474b" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">4,9 von 5,0 aus 452 Bewertungen</p>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cc9ba25" data-id="cc9ba25" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-328c9a9 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="328c9a9" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">24-Stunden-Reinigungsservice</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Bar- &amp; Kartenzahlung möglich</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0a3db3e" data-id="0a3db3e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4a060ee elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4a060ee" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Schonende und gründliche Reinigung</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Schnelle Verfügbarkeit vor Ort</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2af65de elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="2af65de" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45af193" data-id="45af193" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d832b30 elementor-widget elementor-widget-about" data-id="d832b30" data-element_type="widget" data-e-type="widget" data-widget_type="about.default">
				<div class="elementor-widget-container">
					
        <section class="about-one pd-120-0-120">
                            <div class="about-one__img2 wow slideInRight" data-wow-delay="500ms"><img decoding="async" class="float-bob-x" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/about-v1-img2.png') }}" alt="" /></div>
                        
            <div class="container">
                <div class="row">
                    <!--Start About One Img-->
                    <div class="col-xl-6">
                        <div class="about-one__img clearfix">
                                                            <div class="about-one__img-inner">
                                    <img decoding="async" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/about-v1-img1.jpg') }}" alt="" />
                                </div>
                                                        <div class="experince-box">
                                <h2>Jahrzehnte Erfahrung</h2>
                            </div>
                        </div>
                    </div>
                    <!--End About One Img-->

                    <!--Start About One Content-->
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="section-title">
                                <span class="section-title__tagline">Über Uns</span>
                                <h2 class="section-title__title">Umfassende Reinigungsdienstleistungen</h2>                            </div>
                            <div class="about-one__content-inner">
                                                                    <p class="about-one__content-text1">Als renommierte Reinigungsfirma bieten wir ein breites Spektrum an Reinigungsleistungen, darunter:</p>
                                                                                                    <p class="about-one__content-text2">Egal, ob Sie eine regelmäßige Wohnungsreinigung wünschen oder eine spezielle Fensterreinigung benötigen – wir haben das richtige Offerte für Sie.</p>
                                                                <div class="about-one__content-list">
                                    <ul>
                                                                                    <li>
                                                <p>Hausbetreuung: Von der Fensterreinigung bis zur Pflege Ihrer Wohnung – wir kümmern uns um alles.k</p>
                                            </li>
                                                                                    <li>
                                                <p>Büroreinigung: Ein sauberes Büro fördert nicht nur die Produktivität, sondern auch das Wohlbefinden der Mitarbeiter.</p>
                                            </li>
                                                                                    <li>
                                                <p>Gebäudereinigung: Unser Reinigungsdienst gewährleistet die Pflege aller Arten von Immobilien.</p>
                                            </li>
                                                                                    <li>
                                                <p>Sonderreinigung: Individuelle Lösungen für besondere Reinigungsanforderungen.</p>
                                            </li>
                                                                            </ul>
                                </div>
                                <div class="about-one__content-btn">
                                                                            <a href="tel:+43%201%204420281" target="_blank" rel="nofollow" class="thm-btn about-one__btn" class="thm-btn">
                                            <span>+43 1 4420281</span>
                                            <div class="liquid"></div>
                                        </a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Content-->
                </div>
            </div>
        </section>

        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section id="leistungen" class="elementor-section elementor-top-section elementor-element elementor-element-5f431ca elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="5f431ca" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72daf5d" data-id="72daf5d" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-577117f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="577117f" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-01d5c31" data-id="01d5c31" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-829decb elementor-widget elementor-widget-twinkle_heading" data-id="829decb" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_heading.default">
				<div class="elementor-widget-container">
					
        
            <div class="section-title">
                                    <span class="section-title__tagline">Leistungen</span>
                                <h2 class="section-title__title">Gebäudereinigung</h2>                            </div>

        
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-d767e5b e-flex e-con-boxed e-con e-parent" data-id="d767e5b" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-da422e0 e-con-full e-flex e-con e-child" data-id="da422e0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-9152e13 elementor-widget elementor-widget-twinkle_services" data-id="9152e13" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-7.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/fensterreinigung-in-wien/') }}">
                                Fensterreinigung                            </a>
                        </h2>
                                                                <p>Sicher und umweltfreundliche Fensterreinigung in Wien
</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-357a20f e-con-full e-flex e-con e-child" data-id="357a20f" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-c13dc6c elementor-widget elementor-widget-twinkle_services" data-id="c13dc6c" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-8.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/professionelle-buroreinigung-in-wien/') }}">
                                Büroreinigung                            </a>
                        </h2>
                                                                <p>Ihre Zufriedenheit ist unsere höchste Priorität
</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-984772d e-con-full e-flex e-con e-child" data-id="984772d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-eba0ef6 elementor-widget elementor-widget-twinkle_services" data-id="eba0ef6" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-9-1.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/professionelle-bodenreinigung-in-wien/') }}">
                                Bodenreinigung                            </a>
                        </h2>
                                                                <p>Schnellen und zuverlässigen Bodenreinigung in Wien.</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-a6c3fda e-con-full e-flex e-con e-child" data-id="a6c3fda" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-5fff302 elementor-widget elementor-widget-twinkle_services" data-id="5fff302" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-10.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/professionelle-fassadenreinigung/') }}">
                                Fassadenreinigung                            </a>
                        </h2>
                                                                <p>Professionelle Fassadenreinigung mit Eco-Clean.
</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-74eecb1 e-flex e-con-boxed e-con e-parent" data-id="74eecb1" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-92ce237 e-con-full e-flex e-con e-child" data-id="92ce237" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-010ebfc elementor-widget elementor-widget-twinkle_services" data-id="010ebfc" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-11.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/teppichreinigung-in-wien/') }}">
                                Teppichreinigung                            </a>
                        </h2>
                                                                <p>Eco-Clean – Ihr Partner für die Teppichreinigung in Wien</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-ddb17c9 e-con-full e-flex e-con e-child" data-id="ddb17c9" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-6100017 elementor-widget elementor-widget-twinkle_services" data-id="6100017" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-12.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/bauendreinigung/') }}">
                                Bauendreinigung                            </a>
                        </h2>
                                                                <p>Alles in einem Paket mit Eco-Clean Baureinigung Wien
</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-51328fd e-con-full e-flex e-con e-child" data-id="51328fd" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2a5bac3 elementor-widget elementor-widget-twinkle_services" data-id="2a5bac3" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-13.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/sonderreinigung-in-wien/') }}">
                                Sonderreinigung                            </a>
                        </h2>
                                                                <p>Sonderreinigung in Wien und Umgebung
</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-dbac294 e-con-full e-flex e-con e-child" data-id="dbac294" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-74859b0 elementor-widget elementor-widget-twinkle_services" data-id="74859b0" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-14.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/industriereinigung-in-wien/') }}">
                                Industriereinigung                            </a>
                        </h2>
                                                                <p>Industriereinigung in Wien
 von Eco Clean.</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-deba1c0 elementor-widget elementor-widget-twinkle_heading" data-id="deba1c0" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_heading.default">
				<div class="elementor-widget-container">
					
        
            <div class="section-title">
                                <h2 class="section-title__title">Hausbetreuung</h2>                            </div>

        
        				</div>
				</div>
		<div class="elementor-element elementor-element-e453733 e-flex e-con-boxed e-con e-parent" data-id="e453733" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-0822ac5 e-con-full e-flex e-con e-child" data-id="0822ac5" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-52bda77 elementor-widget elementor-widget-twinkle_services" data-id="52bda77" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-3.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/professionelle-stiegenhausreinigung-in-wien/') }}">
                                Stiegenhausreinigung                            </a>
                        </h2>
                                                                <p>Treppe reinigen und pflegen.</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-b26571d e-con-full e-flex e-con e-child" data-id="b26571d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-dc53aa7 elementor-widget elementor-widget-twinkle_services" data-id="dc53aa7" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/industriereinigung-in-wien/') }}">
                                Garagenreinigung                            </a>
                        </h2>
                                                                <p>Professionelle Reinigung Ihrer Tiefgarage</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-833ee3d e-con-full e-flex e-con e-child" data-id="833ee3d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-32b5f4d elementor-widget elementor-widget-twinkle_services" data-id="32b5f4d" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-4.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/gartenpflege-in-wien/') }}">
                                Gartenpflege                            </a>
                        </h2>
                                                                <p>Professionelle Gartenpflege in Wien</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-d53c1ec e-con-full e-flex e-con e-child" data-id="d53c1ec" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-66b8210 elementor-widget elementor-widget-twinkle_services" data-id="66b8210" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-one__single">
                <div class="services-one__single-img">
                                        <div class="services-one__single-img-inner">
                        <img decoding="async" class="parallax-img" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/Garagenreinigung-6.png') }}" alt="" />
                    </div>
                                                        </div>
                <div class="services-one__single-content text-center">
                                            <h2>
                            <a target="" rel="" href="{{ url('/winterdienst-in-wien/') }}">
                                Winterdienst                            </a>
                        </h2>
                                                                <p>Sehen Sie dem Winter mit Gelassenheit entgegen</p>
                                        <p></p>
                </div>
            </div>

        
        				</div>
				</div>
				</div>
					</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-bdea079 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bdea079" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf16631" data-id="bf16631" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d842c4c elementor-widget elementor-widget-heading zaid-grey-block" data-id="d842c4c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Warum  eine  Reinigungsfirma  in  Wien  beauftragen?
 </h2>				</div>
				</div>
				<div class="elementor-element elementor-element-eb3d82f elementor-widget elementor-widget-text-editor zaid-p-color zaid-grey-block" data-id="eb3d82f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Die Entscheidung, eine professionelle </span><i><span style="font-weight: 400;">Reinigungsfirma</span></i><span style="font-weight: 400;"> zu beauftragen, bringt viele Vorteile mit sich. Unser Ziel ist es, Ihnen eine erstklassige </span><i><span style="font-weight: 400;">Reinigung</span></i><span style="font-weight: 400;"> zu bieten, die für </span><i><span style="font-weight: 400;">Sauberkeit</span></i><span style="font-weight: 400;"> und Hygiene in Ihren </span><i><span style="font-weight: 400;">Räumlichkeiten</span></i><span style="font-weight: 400;"> sorgt. Mit einem erfahrenen </span><i><span style="font-weight: 400;">Reinigungspersonal</span></i><span style="font-weight: 400;"> und modernen </span><i><span style="font-weight: 400;">Reinigungsmitteln</span></i><span style="font-weight: 400;"> garantieren wir, dass Sie stets auf unsere Dienstleistungen vertrauen können. Ihre Zufriedenheit hat für uns höchste Priorität.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-4668050 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="4668050" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-da4e10b e-flex e-con-boxed e-con e-parent" data-id="da4e10b" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-fc434e3 e-con-full e-flex e-con e-child" data-id="fc434e3" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-43bbacc elementor-widget elementor-widget-heading" data-id="43bbacc" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Individuelle Reinigungskonzepte</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-315e171 elementor-widget elementor-widget-text-editor" data-id="315e171" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Jede </span><i><span style="font-weight: 400;">Liegenschaft</span></i><span style="font-weight: 400;"> hat einzigartige Anforderungen. Aus diesem Grund erstellen wir maßgeschneiderte </span><i><span style="font-weight: 400;">Reinigungskonzepte</span></i><span style="font-weight: 400;">, die auf die spezifischen Bedürfnisse unserer </span><i><span style="font-weight: 400;">Kunden</span></i><span style="font-weight: 400;"> abgestimmt sind. Unsere </span><i><span style="font-weight: 400;">Reinigungsfirma in Wien</span></i><span style="font-weight: 400;"> bringt nicht nur das notwendige </span><i><span style="font-weight: 400;">Know-how</span></i><span style="font-weight: 400;">, sondern auch die Erfahrung mit, um effiziente Lösungen zu finden. Wir stehen Ihnen bei allen </span><i><span style="font-weight: 400;">Anliegen</span></i><span style="font-weight: 400;"> zur Seite, sei es bei einmaligen </span><i><span style="font-weight: 400;">Reinigungsarbeiten</span></i><span style="font-weight: 400;"> oder bei langfristigen Projekten.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-2e7f8bd elementor-widget elementor-widget-shortcode" data-id="2e7f8bd" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="container" data-elementor-id="1953" class="elementor elementor-1953" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-d8acbcb e-flex e-con-boxed e-con e-parent" data-id="d8acbcb" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-70fb267 elementor-widget elementor-widget-twinkle_btn" data-id="70fb267" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_btn.default">
				<div class="elementor-widget-container">
					
                            <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="thm-btn service-details__btn">
                    KONTAKT                </a>
            
        				</div>
				</div>
					</div>
				</div>
				</div>
		</div>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-80920c9 e-con-full e-flex e-con e-child" data-id="80920c9" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-8e439be elementor-widget elementor-widget-image" data-id="8e439be" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="585" height="495" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/tab-v1-img.jpg') }}" class="attachment-full size-full wp-image-501" alt="" />															</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-02cafa1 e-flex e-con-boxed e-con e-parent" data-id="02cafa1" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-d48074b e-con-full e-flex e-con e-child" data-id="d48074b" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-d9b0fc1 elementor-widget elementor-widget-image" data-id="d9b0fc1" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="770" height="525" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/service-details-img1.jpg') }}" class="attachment-full size-full wp-image-400" alt="" />															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-a6e1db5 e-con-full e-flex e-con e-child" data-id="a6e1db5" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-fa3ddd0 elementor-widget elementor-widget-heading" data-id="fa3ddd0" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Sicherheitsstandards und Qualität</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-b3c5933 elementor-widget elementor-widget-text-editor" data-id="b3c5933" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Sicherheit und Qualität sind bei unserer </span><i><span style="font-weight: 400;">Reinigungsfirma</span></i><span style="font-weight: 400;"> von größter Bedeutung. Wir verwenden umweltfreundliche Produkte, die sowohl für Menschen als auch für die Umwelt unbedenklich sind. Darüber hinaus stellen wir sicher, dass unser </span><i><span style="font-weight: 400;">Reinigungspersonal</span></i><span style="font-weight: 400;"> gut ausgebildet ist und alle Sicherheitsstandards einhält. Bei uns können Sie sich darauf verlassen, dass Ihre </span><i><span style="font-weight: 400;">Räumlichkeiten</span></i><span style="font-weight: 400;"> in besten Händen sind.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-4f51e24 elementor-widget elementor-widget-shortcode" data-id="4f51e24" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="container" data-elementor-id="1953" class="elementor elementor-1953" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-d8acbcb e-flex e-con-boxed e-con e-parent" data-id="d8acbcb" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-70fb267 elementor-widget elementor-widget-twinkle_btn" data-id="70fb267" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_btn.default">
				<div class="elementor-widget-container">
					
                            <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="thm-btn service-details__btn">
                    KONTAKT                </a>
            
        				</div>
				</div>
					</div>
				</div>
				</div>
		</div>
						</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-5ba4dad e-flex e-con-boxed e-con e-parent" data-id="5ba4dad" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-1060fb9 e-con-full e-flex e-con e-child" data-id="1060fb9" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-dc672f2 elementor-widget elementor-widget-heading" data-id="dc672f2" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Kontaktieren Sie uns!</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-e572645 elementor-widget elementor-widget-text-editor" data-id="e572645" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Wenn Sie auf der Suche nach einer vertrauenswürdigen </span><i><span style="font-weight: 400;">Reinigungsfirma</span></i><span style="font-weight: 400;"> sind, zögern Sie nicht, uns zu kontaktieren! Rufen Sie uns an oder schreiben Sie uns eine E-Mail, um mehr über unsere Dienstleistungen zu erfahren oder ein individuelles Angebot zu erhalten. Wir freuen uns darauf, Ihnen helfen zu dürfen!</span><span style="font-weight: 400;"><br /></span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-ee6e20b elementor-widget elementor-widget-shortcode" data-id="ee6e20b" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="container" data-elementor-id="1953" class="elementor elementor-1953" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-d8acbcb e-flex e-con-boxed e-con e-parent" data-id="d8acbcb" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-70fb267 elementor-widget elementor-widget-twinkle_btn" data-id="70fb267" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_btn.default">
				<div class="elementor-widget-container">
					
                            <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="thm-btn service-details__btn">
                    KONTAKT                </a>
            
        				</div>
				</div>
					</div>
				</div>
				</div>
		</div>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-ab65016 e-con-full e-flex e-con e-child" data-id="ab65016" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-e53d516 elementor-widget elementor-widget-image" data-id="e53d516" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1920" height="1280" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/09/footer-v1-bg.jpg') }}" class="attachment-full size-full wp-image-578" alt="" srcset="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/09/footer-v1-bg.jpg') }} 1920w, {{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/09/footer-v1-bg-1536x1024.jpg') }} 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />															</div>
				</div>
				</div>
					</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8b8efd6 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8b8efd6" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d3f8564" data-id="d3f8564" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-32e0c6d elementor-widget elementor-widget-heading" data-id="32e0c6d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Vertrauen Sie auf unsere Erfahrung und Professionalität
</h2>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-7cc64a6 e-flex e-con-boxed e-con e-parent" data-id="7cc64a6" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-1de9f50 e-con-full e-flex e-con e-child" data-id="1de9f50" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-b17411a elementor-widget elementor-widget-image" data-id="b17411a" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="560" height="715" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/main-slider-v2-img2.png') }}" class="attachment-full size-full wp-image-292" alt="" />															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-cd207ec e-con-full e-flex e-con e-child" data-id="cd207ec" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-528a125 elementor-widget elementor-widget-heading" data-id="528a125" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Warum EcoClean Ihre erste Wahl ist
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-6c73f9e elementor-widget elementor-widget-text-editor" data-id="6c73f9e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Als etablierte </span><i><span style="font-weight: 400;">Reinigungsfirma in Wien</span></i><span style="font-weight: 400;"> hat sich EcoClean durch hervorragende Leistungen und zufriedene </span><i><span style="font-weight: 400;">Kunden</span></i><span style="font-weight: 400;"> einen Namen gemacht. Wir wissen, dass die Wahl des richtigen Reinigungsdienstleisters entscheidend für die Sauberkeit und das Wohlbefinden in Ihren Räumlichkeiten ist. Unser </span><i><span style="font-weight: 400;">Team</span></i><span style="font-weight: 400;"> aus qualifizierten </span><i><span style="font-weight: 400;">Reinigungskräften</span></i><span style="font-weight: 400;"> bringt nicht nur Fachwissen, sondern auch Leidenschaft für </span><i><span style="font-weight: 400;">Sauberkeit</span></i><span style="font-weight: 400;"> mit. Wir sind stolz darauf, dass unsere Kunden uns immer wieder ihr Vertrauen schenken.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-495e4e0 elementor-widget elementor-widget-shortcode" data-id="495e4e0" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="container" data-elementor-id="1953" class="elementor elementor-1953" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-d8acbcb e-flex e-con-boxed e-con e-parent" data-id="d8acbcb" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-70fb267 elementor-widget elementor-widget-twinkle_btn" data-id="70fb267" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_btn.default">
				<div class="elementor-widget-container">
					
                            <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="thm-btn service-details__btn">
                    KONTAKT                </a>
            
        				</div>
				</div>
					</div>
				</div>
				</div>
		</div>
						</div>
				</div>
				</div>
					</div>
				</div>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-185292d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="185292d" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0a03111" data-id="0a03111" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-8f2747c elementor-widget elementor-widget-heading" data-id="8f2747c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default" style="color: #ffffff !important; -webkit-text-fill-color: #ffffff !important;">Maßgeschneiderte Lösungen für jede Immobilie
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-70cb5ca elementor-widget elementor-widget-text-editor home-blue-desc-white" data-id="70cb5ca" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container" style="color: #ffffff !important; -webkit-text-fill-color: #ffffff !important;">
									<p class="zaid-color" style="color: #ffffff !important; -webkit-text-fill-color: #ffffff !important;"><span style="font-weight: 400; color: #ffffff !important;">Ob Sie Eigentümer einer großen Gewerbeimmobilie oder einer kleinen Wohnung sind, unser Ziel ist es, Ihnen einen </span><i><span style="font-weight: 400; color: #ffffff !important;">Reinigungsservice</span></i><span style="font-weight: 400; color: #ffffff !important;"> anzubieten, der auf Ihre speziellen Bedürfnisse zugeschnitten ist. Wir verstehen, dass jede </span><i><span style="font-weight: 400; color: #ffffff !important;">Immobilie</span></i><span style="font-weight: 400; color: #ffffff !important;"> unterschiedliche Anforderungen hat, und deshalb erstellen wir individuelle </span><i><span style="font-weight: 400; color: #ffffff !important;">Reinigungskonzepte</span></i><span style="font-weight: 400; color: #ffffff !important;">. Unsere </span><i><span style="font-weight: 400; color: #ffffff !important;">Reinigungsdienstleistungen</span></i><span style="font-weight: 400; color: #ffffff !important;"> umfassen:</span></p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-397f276" data-id="397f276" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-fa463e4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="fa463e4" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Regelmäßige Hausreinigung:</b> Damit Ihr Zuhause stets einladend und sauber bleibt.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Professionelle Büroreinigung:</b>Für ein produktives und hygienisches Arbeitsumfeld.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Fensterreinigung:</b>Damit Sie den Blick nach draußen genießen können.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Schneeräumung im Winter:</b>Damit Ihre Wege und Zugänge stets sicher sind.</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9ba084f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9ba084f" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d22ba72" data-id="d22ba72" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-b2892ff elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b2892ff" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5cf45c9" data-id="5cf45c9" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0bf68bc elementor-widget elementor-widget-twinkle_services" data-id="0bf68bc" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-three__single text-center">
                                
                <div class="services-three__single-content">
                                            <h3>
                            <a target="_self" rel="nofollow" href="{{ url('/leistungen/') }}">
                                Qualitative Reinigungsarbeiten                            </a>
                        </h3>
                                                                <p>Unser Reinigungsunternehmen legt großen Wert auf die Qualität der Reinigungsarbeiten. Wir verwenden nur die besten Reinigungsprodukte und -methoden, um sicherzustellen, dass jede Reinigung gründlich und effizient erfolgt. Wir sind uns bewusst, dass es um mehr als nur Sauberkeit geht; es geht um Ihr Wohlbefinden. Deshalb streben wir stets danach, die höchste Qualität zu bieten.
</p>
                                    </div>
            </div>

        
        				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5062280" data-id="5062280" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0cd196a elementor-widget elementor-widget-twinkle_services" data-id="0cd196a" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-three__single text-center">
                                
                <div class="services-three__single-content">
                                            <h3>
                            <a target="_self" rel="nofollow" href="{{ url('/leistungen/') }}">
                                Kundenorientierter Service                            </a>
                        </h3>
                                                                <p>Die Zufriedenheit unserer Kunden steht an erster Stelle. Wir hören auf Ihr Feedback und passen unsere Dienstleistungen entsprechend an. Bei Fragen oder besonderen Wünschen stehen wir Ihnen jederzeit zur Verfügung. Wir sind Ihr verlässlicher Partner, wenn es um alle Aspekte der Reinigung geht. Unsere engagierten Reinigungskräfte sind bereit, Ihre Erwartungen zu übertreffen und Ihnen eine angenehme Erfahrung zu bieten.</p>
                                    </div>
            </div>

        
        				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a6810e" data-id="2a6810e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5e620af elementor-widget elementor-widget-twinkle_services" data-id="5e620af" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_services.default">
				<div class="elementor-widget-container">
					
        
            <div class="services-three__single text-center">
                                
                <div class="services-three__single-content">
                                            <h3>
                            <a target="" rel="" href="">
                                Kontakt und Angebote                            </a>
                        </h3>
                                                                <p>Möchten Sie mehr über unsere flexiblen Offerte erfahren? Wir bieten maßgeschneiderte Lösungen zu fairen Preisen. Zögern Sie nicht, uns zu kontaktieren, um ein individuelles Angebot zu erhalten. Rufen Sie uns an oder schreiben Sie uns eine E-Mail, um mehr über unsere Dienstleistungen zu erfahren und wie wir Ihnen helfen können. Ihr Reinigungsunternehmen in Wien ist nur einen Anruf entfernt!</p>
                                    </div>
            </div>

        
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6741931 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6741931" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb0487f" data-id="fb0487f" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a2cb0e7 elementor-widget elementor-widget-heading" data-id="a2cb0e7" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">So finden Sie die richtige Reinigungsfirma in Wien</h2>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-942b97e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="942b97e" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-54b1bce" data-id="54b1bce" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-300e1de elementor-widget elementor-widget-heading" data-id="300e1de" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Maßgeschneiderte Lösungen für jede Immobilie
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-1d71cef elementor-widget elementor-widget-text-editor" data-id="1d71cef" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="color: #ffffff !important; -webkit-text-fill-color: #ffffff !important;"><span style="font-weight: 400; color: #ffffff !important;">Ob Sie Eigentümer einer großen Gewerbeimmobilie oder einer kleinen Wohnung sind, unser Ziel ist es, Ihnen einen </span><i><span style="font-weight: 400; color: #ffffff !important;">Reinigungsservice</span></i><span style="font-weight: 400; color: #ffffff !important;"> anzubieten, der auf Ihre speziellen Bedürfnisse zugeschnitten ist. Wir verstehen, dass jede </span><i><span style="font-weight: 400; color: #ffffff !important;">Immobilie</span></i><span style="font-weight: 400; color: #ffffff !important;"> unterschiedliche Anforderungen hat, und deshalb erstellen wir individuelle </span><i><span style="font-weight: 400; color: #ffffff !important;">Reinigungskonzepte</span></i><span style="font-weight: 400; color: #ffffff !important;">. Unsere </span><i><span style="font-weight: 400; color: #ffffff !important;">Reinigungsdienstleistungen</span></i><span style="font-weight: 400; color: #ffffff !important;"> umfassen:</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-436c5d0 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="436c5d0" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Bewertungen und Referenzen prüfen:</b> Damit Ihr Zuhause stets einladend und sauber bleibt. Suchen Sie nach Kundenbewertungen und Empfehlungen. Ein zuverlässiger Reinigungsdienstleister wird positive Rückmeldungen von zufriedenen Kunden vorweisen können.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Angebot anfordern:</b>Stellen Sie sicher, dass Sie ein detailliertes Offerte für die gewünschten Reinigungsdienstleistungen erhalten. Vergleichen Sie die Preise und Leistungen verschiedener Anbieter.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Erfahrung und Fachwissen:</b> Achten Sie darauf, wie lange das Reinigungsunternehmen bereits tätig ist und welches Fachwissen das Team mitbringt. Ein erfahrenes Unternehmen hat in der Regel bewährte Verfahren zur Sicherstellung der Sauberkeit.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Flexibilität: </b> Überprüfen Sie, ob das Unternehmen flexible Lösungen anbieten kann, die auf Ihre spezifischen Bedürfnisse zugeschnitten sind. Dies ist besonders wichtig, wenn Sie regelmäßig unterschiedliche Dienstleistungen benötigen.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg>						</span>
										<span class="elementor-icon-list-text"><b>Verwendung von umweltfreundlichen Produkten:</b>Informieren Sie sich darüber, welche Reinigungsmittel verwendet werden. Ein guter Reinigungsdienstleister in Wien setzt auf umweltfreundliche Produkte, die sowohl sicher als auch effektiv sind.</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1331536 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1331536" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-09253e3" data-id="09253e3" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-48da8ca elementor-widget elementor-widget-heading" data-id="48da8ca" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Unser Versprechen an Sie</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-3fa374f elementor-widget elementor-widget-text-editor" data-id="3fa374f" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Bei EcoClean setzen wir alles daran, Ihnen die besten </span><i><span style="font-weight: 400;">Reinigungsdienstleistungen</span></i><span style="font-weight: 400;"> in Wien anzubieten. Unser </span><i><span style="font-weight: 400;">Reinigungsteam</span></i><span style="font-weight: 400;"> ist gut ausgebildet und bringt viel </span><i><span style="font-weight: 400;">Erfahrung</span></i><span style="font-weight: 400;"> mit. Wir wissen, dass jede Immobilie einzigartig ist, und deshalb bieten wir maßgeschneiderte Lösungen an, die auf Ihre spezifischen Bedürfnisse abgestimmt sind.</span></p><p><span style="font-weight: 400;">Wir garantieren Ihnen die höchste </span><i><span style="font-weight: 400;">Qualität</span></i><span style="font-weight: 400;"> in unseren </span><i><span style="font-weight: 400;">Reinigungsarbeiten</span></i><span style="font-weight: 400;">. Unsere </span><i><span style="font-weight: 400;">Reinigungsfirma</span></i><span style="font-weight: 400;"> ist nicht nur auf die Erbringung von Dienstleistungen fokussiert, sondern auch auf die Schaffung eines angenehmen und sauberen Umfelds für unsere </span><i><span style="font-weight: 400;">Kunden</span></i><span style="font-weight: 400;">.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-9da5dac elementor-widget elementor-widget-shortcode" data-id="9da5dac" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="container" data-elementor-id="1953" class="elementor elementor-1953" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-d8acbcb e-flex e-con-boxed e-con e-parent" data-id="d8acbcb" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-70fb267 elementor-widget elementor-widget-twinkle_btn" data-id="70fb267" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_btn.default">
				<div class="elementor-widget-container">
					
                            <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="thm-btn service-details__btn">
                    KONTAKT                </a>
            
        				</div>
				</div>
					</div>
				</div>
				</div>
		</div>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-181a932" data-id="181a932" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f8cbb4a elementor-widget elementor-widget-image" data-id="f8cbb4a" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="560" height="715" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/main-slider-v2-img3.png') }}" class="attachment-full size-full wp-image-293" alt="" />															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-804c750 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="804c750" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dfb2dec" data-id="dfb2dec" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-76af485 elementor-widget elementor-widget-heading" data-id="76af485" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Kontaktieren Sie uns noch heute!</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-99fba86 elementor-widget elementor-widget-text-editor" data-id="99fba86" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Zögern Sie nicht, uns zu kontaktieren! Rufen Sie uns an oder schreiben Sie uns eine E-Mail, um mehr über unsere Angebote zu erfahren und ein individuelles Offerte für Ihre </span><i><span style="font-weight: 400;">Reinigungsbedürfnisse</span></i><span style="font-weight: 400;"> zu erhalten. Bei EcoClean stehen wir Ihnen jederzeit zur Verfügung und freuen uns darauf, Ihre Erwartungen zu übertreffen. Vertrauen Sie auf unsere </span><i><span style="font-weight: 400;">Reinigungsfirma in Wien</span></i><span style="font-weight: 400;"> – Ihr Partner für Sauberkeit und Pflege!</span></p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-42482b5" data-id="42482b5" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ac2b3b5 elementor-widget elementor-widget-shortcode" data-id="ac2b3b5" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode"><div class='fluentform ff-default fluentform_wrapper_1 ffs_custom_wrap'><form data-form_id="1" id="fluentform_1" class="frm-fluent-form fluent_form_1 ff-el-form-top ff_form_instance_1_1 ff-form-loading ffs_custom" data-form_instance="ff_form_instance_1_1" method="POST" action="{{ route('contact.submit') }}" ><fieldset  style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Contact Form Demo</legend>@csrf<input type='hidden' name='__fluent_form_embded_post_id' value='532' /><input type="hidden" id="_fluentform_1_fluentformnonce" name="_fluentform_1_fluentformnonce" value="689ab3a505" /><input type="hidden" name="_wp_http_referer" value="{{ url('/') }}" /><input type="hidden" name="eco_form_source" value="{{ url()->current() }}" />@if (session('status'))<div class="eco-flash__item eco-flash__item--success">{{ session('status') }}</div>@endif @if ($errors->has('contact_form'))<div class="eco-flash__item eco-flash__item--error">{{ $errors->first('contact_form') }}</div>@endif<div data-type="name-element" data-name="names" class=" ff-field_container ff-name-field-wrapper" ><div class='ff-t-container'><div class='ff-t-cell '><div class='ff-el-group'><div class="ff-el-input--label asterisk-right"><label for='ff_1_names_first_name_' id='label_ff_1_names_first_name_' >First Name</label></div><div class='ff-el-input--content'><input type="text" name="names[first_name]" id="ff_1_names_first_name_" class="ff-el-form-control" placeholder="First Name" aria-invalid="false" aria-required=false value="{{ old('names.first_name') }}"></div></div></div><div class='ff-t-cell '><div class='ff-el-group'><div class="ff-el-input--label asterisk-right"><label for='ff_1_names_last_name_' id='label_ff_1_names_last_name_' >Last Name</label></div><div class='ff-el-input--content'><input type="text" name="names[last_name]" id="ff_1_names_last_name_" class="ff-el-form-control" placeholder="Last Name" aria-invalid="false" aria-required=false value="{{ old('names.last_name') }}"></div></div></div></div></div><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_email' id='label_ff_1_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_1_email" class="ff-el-form-control" placeholder="Email Address" data-name="email"  aria-invalid="false" aria-required=true value="{{ old('email') }}"></div></div><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_1_message' id='label_ff_1_message' aria-label="Your Message">Your Message</label></div><div class='ff-el-input--content'><textarea aria-required="true" aria-labelledby="label_ff_1_message" name="message" id="ff_1_message" class="ff-el-form-control" placeholder="Your Message" rows="4" cols="2" data-name="message" >{{ old('message') }}</textarea></div></div><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"  aria-label="Submit Form">Submit Form</button></div></fieldset></form><div id='fluentform_1_errors' class='ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors'></div></div>            <script type="text/javascript">
                window.fluent_form_ff_form_instance_1_1 = {"id":"1","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","cssClassName":"","asteriskPlacement":"asterisk-right"},"restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_1_1","form_id_selector":"fluentform_1","rules":{"names[first_name]":{"required":{"value":false,"message":"This field is required","global":false,"global_message":"This field is required"}},"names[middle_name]":{"required":{"value":false,"message":"This field is required","global":false,"global_message":"This field is required"}},"names[last_name]":{"required":{"value":false,"message":"This field is required","global":false,"global_message":"This field is required"}},"email":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email","global":false,"global_message":"This field must contain a valid email"}},"message":{"required":{"value":true,"message":"This field is required","global":false,"global_message":"This field is required"}}},"debounce_time":300};
                            </script>
            </div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2738980 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="2738980" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ea450a" data-id="7ea450a" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e3a3577 elementor-widget elementor-widget-heading" data-id="e3a3577" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Häufige Fragen (FAQ)</h2>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a6de2eb elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a6de2eb" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-de28b90" data-id="de28b90" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3aaf225 elementor-widget elementor-widget-heading" data-id="3aaf225" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Kontaktieren Sie uns!</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-3e63a52 elementor-widget elementor-widget-text-editor" data-id="3e63a52" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Wir freuen uns darauf, Ihnen bei Ihren </span><i><span style="font-weight: 400;">Reinigungsbedürfnissen</span></i><span style="font-weight: 400;"> zu helfen! </span><b>Rufen Sie uns an oder schreiben Sie uns eine E-Mail</b><span style="font-weight: 400;">, um mehr über unsere Dienstleistungen zu erfahren und ein individuelles Angebot zu erhalten. Bei </span><b>Eco Clean</b><span style="font-weight: 400;"> sind wir Ihr Partner für Sauberkeit in Wien – Ihr Zuhause verdient die beste Pflege!</span></p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-daf2445" data-id="daf2445" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d118842 elementor-widget__width-auto elementor-widget elementor-widget-shortcode" data-id="d118842" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">		<div data-elementor-type="container" data-elementor-id="1953" class="elementor elementor-1953" data-elementor-post-type="elementor_library">
				<div class="elementor-element elementor-element-d8acbcb e-flex e-con-boxed e-con e-parent" data-id="d8acbcb" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-70fb267 elementor-widget elementor-widget-twinkle_btn" data-id="70fb267" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_btn.default">
				<div class="elementor-widget-container">
					
                            <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="thm-btn service-details__btn">
                    KONTAKT                </a>
            
        				</div>
				</div>
					</div>
				</div>
				</div>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-44afe4a elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="44afe4a" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ab9adaf" data-id="ab9adaf" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1899147 elementor-widget elementor-widget-heading" data-id="1899147" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Unsere Leistungen im Bereich Hausbetreuung</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-38d71a9 elementor-widget elementor-widget-text-editor" data-id="38d71a9" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><b>Hausbetreuung</b><span style="font-weight: 400;"> ist ein zentraler Bestandteil unserer Dienstleistungen. Wir kümmern uns um alles, was Ihr Zuhause benötigt, damit Sie sich entspannen können. Unsere </span><b>Reinigungskräfte</b><span style="font-weight: 400;"> sind darauf spezialisiert, Ihre Wohnräume regelmäßig zu reinigen und instand zu halten. Dazu gehören auch spezifische Aufgaben wie die Pflege des </span><b>Wintergartens</b><span style="font-weight: 400;"> und die gründliche </span><b>Fensterreinigung</b><span style="font-weight: 400;">. Egal, ob es sich um eine einmalige </span><b>Gebäudereinigung</b><span style="font-weight: 400;"> oder um eine regelmäßige </span><b>Hausbetreuung</b><span style="font-weight: 400;"> handelt, wir bieten Ihnen einen maßgeschneiderten </span><b>Reinigungsservice</b><span style="font-weight: 400;">, der auf Ihre Bedürfnisse abgestimmt ist.</span></p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3ca64ff elementor-section-full_width elementor-section-stretched elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default" data-id="3ca64ff" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-af7c2af" data-id="af7c2af" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f9eb01e elementor-widget elementor-widget-twinkle_heading" data-id="f9eb01e" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_heading.default">
				<div class="elementor-widget-container">
					
                    
            <div class="section-title text-left">

                <div class="section-title__style2">
                    <div class="section-title">
                                                <h1 class="section-title__title">Professionelle Gebäudereinigung für Ihr Unternehmen</h1>                    </div>
                                            <div class="text-box">
                            <p>Unsere Reinigungsdienste umfassen auch die Gebäudereinigung für gewerbliche Objekte. Wir verstehen, dass die Sauberkeit Ihrer Gebäude entscheidend für das Wohlbefinden Ihrer Mitarbeiter und Kunden ist. Deshalb bieten wir umfassende Reinigungsservices, die alle Bereiche Ihrer Immobilien abdecken. Unsere erfahrenen Gebäudereiniger garantieren Ihnen höchste Qualität bei der Ausführung ihrer Arbeiten. Egal, ob es sich um die Reinigung von Büros, Verkaufsflächen oder Veranstaltungen handelt, wir stehen Ihnen jederzeit zur Verfügung.
</p>
                        </div>
                                    </div>
                
            </div>

        
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a392e8f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a392e8f" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64d5a98" data-id="64d5a98" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-368bbfe elementor-widget elementor-widget-heading" data-id="368bbfe" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Flexible Reinigungsservices für verschiedene Bereiche</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-e3ace76 elementor-widget elementor-widget-text-editor" data-id="e3ace76" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Unsere </span><b>Putzfirma</b><span style="font-weight: 400;"> bietet flexible </span><b>Reinigungsservices</b><span style="font-weight: 400;"> für verschiedene </span><b>Bereiche</b><span style="font-weight: 400;"> an, einschließlich privater Haushalte und gewerblicher Immobilien. Wir passen unsere Dienstleistungen an Ihre spezifischen Anforderungen an und bieten Ihnen transparente </span><b>Preise</b><span style="font-weight: 400;">, die ohne versteckte Kosten auskommen. Zudem garantieren wir Ihnen eine </span><b>Abnahmegarantie</b><span style="font-weight: 400;">, sodass Sie mit unseren Ergebnissen stets zufrieden sind.</span></p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5463610" data-id="5463610" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-98c41e5 elementor-widget elementor-widget-heading" data-id="98c41e5" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Ihr vertrauenswürdiger Partner in Niederösterreich</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-eb84004 elementor-widget elementor-widget-text-editor" data-id="eb84004" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Als etablierte </span><b>Reinigungsfirma</b><span style="font-weight: 400;"> in </span><b>Niederösterreich</b><span style="font-weight: 400;"> bieten wir Ihnen ein umfassendes Leistungsspektrum. Von der </span><b>Hausbetreuung</b><span style="font-weight: 400;"> bis hin zur professionellen </span><b>Gebäudereinigung</b><span style="font-weight: 400;"> – wir sind der </span><b>Profi</b><span style="font-weight: 400;"> für Ihre Reinigungsbedürfnisse. Unsere </span><b>Reinigungskräfte</b><span style="font-weight: 400;"> sind geschult, um Ihnen in allen </span><b>Bereichen</b><span style="font-weight: 400;"> eine gleichbleibend hohe Qualität zu bieten. Egal, ob es um die Pflege Ihrer Wohnräume oder die gründliche Reinigung Ihrer Geschäftsräume geht, wir haben die passende Lösung für Sie.</span></p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5bcdc63 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5bcdc63" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-420d2ea" data-id="420d2ea" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2e6a0c6 elementor-widget elementor-widget-heading" data-id="2e6a0c6" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Vertrauen Sie auf die Qualität von EcoClean</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-495d864 elementor-widget elementor-widget-text-editor" data-id="495d864" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Bei </span><b>EcoClean</b><span style="font-weight: 400;"> steht die Kundenzufriedenheit im Mittelpunkt. Wir sind stolz darauf, Ihnen erstklassige </span><b>Reinigungsdienste</b><span style="font-weight: 400;"> zu bieten, die auf Ihre individuellen Bedürfnisse abgestimmt sind. Unsere </span><b>Reinigungsunternehmens</b><span style="font-weight: 400;">-Philosophie basiert auf Zuverlässigkeit, Effizienz und höchster Professionalität. Lassen Sie uns Ihr nächstes </span><b>Projekt</b><span style="font-weight: 400;"> übernehmen, und Sie werden den Unterschied spüren!</span></p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-18dbd8f" data-id="18dbd8f" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-057b22a elementor-widget elementor-widget-heading" data-id="057b22a" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Kontaktieren Sie uns für ein individuelles Angebot
</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-5174849 elementor-widget elementor-widget-text-editor" data-id="5174849" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Sind Sie bereit, die Vorteile unserer </span><b>Reinigungsservices</b><span style="font-weight: 400;"> zu genießen? Besuchen Sie unsere </span><b>Website</b><span style="font-weight: 400;"> oder kontaktieren Sie uns direkt, um mehr über unsere Dienstleistungen zu erfahren. Wir erstellen Ihnen gerne ein individuelles Angebot, das auf Ihre Bedürfnisse zugeschnitten ist. Vertrauen Sie </span><b>EcoClean</b><span style="font-weight: 400;"> – Ihr Partner für Sauberkeit und Pflege in </span><b>Niederösterreich</b><span style="font-weight: 400;">!</span></p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-065ab9b eco-home-areas-head elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="065ab9b" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a9cbee5" data-id="a9cbee5" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b96a443 eco-home-areas-kicker elementor-widget elementor-widget-heading" data-id="b96a443" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h4 class="elementor-heading-title elementor-size-default">Wussten Sie?</h4>				</div>
				</div>
				<div class="elementor-element elementor-element-e8afdac eco-home-areas-title elementor-widget elementor-widget-heading" data-id="e8afdac" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Wo wir für Sie arbeiten!</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-619b3d5 eco-home-areas-subtitle elementor-widget elementor-widget-heading" data-id="619b3d5" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h6 class="elementor-heading-title elementor-size-default">Alle Bezirke Wiens und Umgebung sowie weitere Gebiete</h6>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-72ffeea eco-home-areas-row elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="72ffeea" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ee86d47" data-id="ee86d47" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-04b30d3 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="04b30d3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1010-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1010</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-9dc176f" data-id="9dc176f" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d50003e elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="d50003e" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1020-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1020</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ce6998f" data-id="ce6998f" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c962c04 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="c962c04" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1030-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1030</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-db1cd33" data-id="db1cd33" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2a9f771 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="2a9f771" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1040-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1040</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-8ac161e" data-id="8ac161e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3a5c161 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="3a5c161" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1050-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1050</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-6a32f75" data-id="6a32f75" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-31597be elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="31597be" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1060-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1060</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ddae885" data-id="ddae885" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ab88cad elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="ab88cad" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1070-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1070</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-675a333 eco-home-areas-row elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="675a333" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-7aea889" data-id="7aea889" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b187d95 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="b187d95" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1080-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1080</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-51ee0b3" data-id="51ee0b3" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6028a30 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="6028a30" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1090-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1090</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-a956a93" data-id="a956a93" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c94e0a0 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="c94e0a0" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1100-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1100</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-01472cc" data-id="01472cc" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-16740db elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="16740db" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1110-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1110</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-aff0237" data-id="aff0237" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7f7d398 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="7f7d398" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1120-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1120</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-a5c87ee" data-id="a5c87ee" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5ec8e70 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="5ec8e70" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1130-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1130</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ae99e4a" data-id="ae99e4a" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-91bee2c elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="91bee2c" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1140-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1140</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-850049a eco-home-areas-row elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="850049a" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-23a71cc" data-id="23a71cc" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-bd2fde3 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="bd2fde3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1150-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1150</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-86bc963" data-id="86bc963" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-978e3f5 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="978e3f5" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1160-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1160</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-1a59621" data-id="1a59621" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b922366 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="b922366" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1170-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1170</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-a97fd61" data-id="a97fd61" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7dceb2d elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="7dceb2d" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1180-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1180</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-0b59b3b" data-id="0b59b3b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2690e0a elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="2690e0a" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1190-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1190</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-58f882e" data-id="58f882e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-21e18ab elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="21e18ab" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1200-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1200</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ef8e212" data-id="ef8e212" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4140ed1 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="4140ed1" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1210-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1210</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-4ccc44c eco-home-areas-row elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="4ccc44c" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-7d96ceb" data-id="7d96ceb" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-78ab5c9 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="78ab5c9" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1220-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1220</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-46f9268" data-id="46f9268" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-657db2b elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="657db2b" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-1230-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">1230</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-7c6368b" data-id="7c6368b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-85b1273 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="85b1273" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-wiener-neustadt/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Wiener Neustadt</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-8b5398e" data-id="8b5398e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3877726 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="3877726" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-gerasdorf-bei-wien/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Gerasdorf</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-36de790" data-id="36de790" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-02a2cc1 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="02a2cc1" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-vosendorf/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Vösendorf</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-dce5f7d" data-id="dce5f7d" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-16a0c59 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="16a0c59" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-niederosterreich/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Niederösterreich</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-074fdf9" data-id="074fdf9" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-fe504fd elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="fe504fd" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/gebaudereinigung/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Gebäudereinigung</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-4d6f190 eco-home-areas-row elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="4d6f190" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-80a8c3f" data-id="80a8c3f" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ff05be6 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="ff05be6" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/hausbetreuung/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Hausbetreuung</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-eec7fff" data-id="eec7fff" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-5788ce9 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="5788ce9" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-parndorf/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Parndorf</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-1318775" data-id="1318775" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ab3f9bd elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="ab3f9bd" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-innsbruck/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Innsbruck</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-6b7f75a" data-id="6b7f75a" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-77e8756 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="77e8756" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-salzburg/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text"> Salzburg</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-ea3119e" data-id="ea3119e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-8660f83 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="8660f83" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-klagenfurt/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Klagenfurt</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-e7d8711" data-id="e7d8711" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-78fa7a3 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="78fa7a3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-ganserndorf/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Gänserndorf</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-a187447" data-id="a187447" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-428acf3 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="428acf3" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-vorarlberg/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Vorarlberg</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-16518a5 eco-home-areas-row elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="16518a5" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-aa124f8" data-id="aa124f8" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-87918e7 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="87918e7" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-graz/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Graz</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-93354f7" data-id="93354f7" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3374304 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="3374304" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-linz/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Linz</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-56368de" data-id="56368de" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2009c28 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="2009c28" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-wels/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Wels</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-e9f9bf3" data-id="e9f9bf3" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0528359 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="0528359" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-schwechat/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Schwechat</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-f3f06e3" data-id="f3f06e3" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-82d9aee elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="82d9aee" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-modling/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Mödling</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-988bc9d" data-id="988bc9d" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c075a1b elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="c075a1b" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-baden/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Baden</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-4999402" data-id="4999402" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a146de5 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="a146de5" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-in-stockerau/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Stockerau</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1f29cd7 eco-home-areas-row eco-home-areas-row-final elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="1f29cd7" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-67eb4cf" data-id="67eb4cf" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3e1fe48 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="3e1fe48" data-element_type="widget" data-e-type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="{{ url('/reinigungsfirma-im-burgenland/') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text"> Burgenland </span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-3155ced" data-id="3155ced" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-91735f3" data-id="91735f3" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-cac496e" data-id="cac496e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-9d24011" data-id="9d24011" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-2b695a6" data-id="2b695a6" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
				<div class="elementor-column elementor-col-14 elementor-top-column elementor-element elementor-element-1e09a22" data-id="1e09a22" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap">
							</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-85a9798 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="85a9798" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c2f021" data-id="2c2f021" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7b0f17a elementor-widget elementor-widget-twinkle_testimonial_slider" data-id="7b0f17a" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_testimonial_slider.default">
				<div class="elementor-widget-container">
					
                    <section class="testimonials-one pd-120-0-120">
                <div class="testimonials-one__bg" style="background-image: url({{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/images/backgrounds/testimonials-v1-bg.jpg') }});"></div>
                <div class="container">
                    <div class="section-title text-center">
                        
                        <h2 class="section-title__title">Das sagen unsere Kunden</h2>                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-style1">
                                                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__single-icon">
                                        <span class="icon-left-quote"></span>
                                    </div>
                                                                            <div class="testimonials-one__single-text">
                                            <p>Ich bin absolut begeistert von dem Reinigungsservice! Die Mitarbeiter waren pünktlich, freundlich und sehr professionell. Unser Büro sah nach der Reinigung wie neu aus – alles glänzte und duftete herrlich frisch. Ich kann diesen Service jedem empfehlen, der eine gründliche und zuverlässige Reinigung möchte!</p>
                                        </div>
                                                                        <div class="client-info">
                                                                                    <div class="img">
                                                <img decoding="async" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/testimonials-v2-thumb-img1.jpg') }}" alt="">
                                            </div>
                                                                                <div class="text">
                                             
                                                <h2>Amili</h2>
                                                                                                                                        <p>Leitung</p>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__single-icon">
                                        <span class="icon-left-quote"></span>
                                    </div>
                                                                            <div class="testimonials-one__single-text">
                                            <p>Die beste Entscheidung für unsere Firma! Wir haben schon viele Reinigungsfirmen ausprobiert, aber keine war so gründlich und zuverlässig wie diese. Die Kommunikation war stets freundlich und unsere Wünsche wurden immer berücksichtigt. Einfach top – vielen Dank für die tolle Arbeit!</p>
                                        </div>
                                                                        <div class="client-info">
                                                                                    <div class="img">
                                                <img decoding="async" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/testimonials-v2-thumb-img2.jpg') }}" alt="">
                                            </div>
                                                                                <div class="text">
                                             
                                                <h2>Rashal Khan</h2>
                                                                                                                                        <p>Gründer</p>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__single-icon">
                                        <span class="icon-left-quote"></span>
                                    </div>
                                                                            <div class="testimonials-one__single-text">
                                            <p>Ich bin sehr zufrieden mit dem Service! Die Reinigungskräfte sind nicht nur gründlich, sondern auch extrem respektvoll im Umgang mit unserem Eigentum. Selbst schwierige Flecken und hartnäckiger Schmutz waren nach der Reinigung verschwunden. Eine klare Empfehlung von meiner Seite!</p>
                                        </div>
                                                                        <div class="client-info">
                                                                                    <div class="img">
                                                <img decoding="async" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/testimonials-v2-thumb-img3.jpg') }}" alt="">
                                            </div>
                                                                                <div class="text">
                                             
                                                <h2>Emma</h2>
                                                                                                                                        <p>Leitung</p>
                                                                                    </div>
                                    </div>
                                </div>
                                                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__single-icon">
                                        <span class="icon-left-quote"></span>
                                    </div>
                                                                            <div class="testimonials-one__single-text">
                                            <p>Diese Firma hat unsere Erwartungen übertroffen! Der Kundenservice ist super freundlich und hilfsbereit, und die Qualität der Reinigung ist erstklassig. Nach jeder Reinigung fühlt sich unser Zuhause wie ein Luxushotel an – sauber und ordentlich bis ins kleinste Detail. Vielen Dank für die großartige Arbeit!</p>
                                        </div>
                                                                        <div class="client-info">
                                                                                    <div class="img">
                                                <img decoding="async" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/testimonials-v2-thumb-img1.jpg') }}" alt="">
                                            </div>
                                                                                <div class="text">
                                             
                                                <h2>Robin</h2>
                                                                                                                                        <p>Gründer</p>
                                                                                    </div>
                                    </div>
                                </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8a4e1c3 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="8a4e1c3" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a993ab0" data-id="a993ab0" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-8dc9af5 elementor-widget elementor-widget-twinkle_cta" data-id="8dc9af5" data-element_type="widget" data-e-type="widget" data-widget_type="twinkle_cta.default">
				<div class="elementor-widget-container">
					            <section class="cta-one cta-one--gallery">
                <div class="image-layer" style="background-image: url({{ asset('assets/mirror/twinkletheme.com/themeforest/wp/elementor/washup/wp-content/uploads/2023/10/cta-v1-bg.jpg') }});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cta-one__inner">
                                <div class="title">
                                    <h2>
                                        <h2 >Rufen Sie uns an, um einen außergewöhnlichen Service in Anspruch zu nehmen! </h2> 
                                    </h2>
                                    <div class="number">
                                        <p class="home-cta-number-german-clean">Anruf: <a href="tel:+43%201%204420281">Wir sind nur einen Anruf entfernt</a></p>
                                        <p class="home-cta-number-german">Anruf: <a href="tel:+43%201%204420281">Wir sind nur einen Anruf entfernt 🙂</a></p>
                                        <p>Call: <a href="tel:+Wir sind nur einen Anruf entfernt :-)">Wir sind nur einen Anruf entfernt 🙂</a></p>
                                    </div>
                                </div>
                                                                    <div class="button-box">
                                        <a href="tel:+43%201%204420281" target="_blank" rel="nofollow" class="thm-btn service-details__btn" class="thm-btn">
                                            <span>+43 1 4420281</span>
                                            <div class="liquid"></div>
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
            </section>

        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				</div>
@endsection

