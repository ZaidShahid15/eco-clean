@extends('layouts.app')

@section('title', 'Professionelle Gartenpflege in Wien: Ihr Weg zu einem blühenden Garten')
@section('meta_description', 'Entdecken Sie, wie professionelle Gartenpflege in Wien Ihren Garten zum Blühen bringt. Lesen Sie weiter für praktische Tipps und wertvolle Anleitungen!')
@section('canonical', '/gartenpflege-in-wien/')
@section('robots', 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large')
@section('og_title', 'Professionelle Gartenpflege in Wien: Ihr Weg zu einem blühenden Garten')
@section('og_description', 'Entdecken Sie, wie professionelle Gartenpflege in Wien Ihren Garten zum Blühen bringt. Lesen Sie weiter für praktische Tipps und wertvolle Anleitungen!')
@section('og_image', '/assets/mirror/eco-clean.at/wp-content/uploads/2023/10/contact-v1-img1-600x562.png')

@section('twitter_title', 'Professionelle Gartenpflege in Wien: Ihr Weg zu einem blühenden Garten')
@section('twitter_description', 'Entdecken Sie, wie professionelle Gartenpflege in Wien Ihren Garten zum Blühen bringt. Lesen Sie weiter für praktische Tipps und wertvolle Anleitungen!')

@section('schema')
@endsection

@section('content')
<style>
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-heading .elementor-heading-title,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor p,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor span,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor li,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor b,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor strong,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor i,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor h1,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor h2,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor h3,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor h4,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor h5,
    .elementor-1205 > .elementor-element:not(.elementor-element-0d6748a):not(.elementor-element-6910057):not(.elementor-element-d8059cb) .elementor-widget-text-editor h6 {
        /* color: #6b6b6b !important; */
        /* -webkit-text-fill-color: #6b6b6b !important; */
    }
    .elementor-1205 .elementor-element-6910057 .elementor-heading-title,
    .elementor-1205 .elementor-element-6910057 .elementor-widget-text-editor,
    .elementor-1205 .elementor-element-6910057 .elementor-widget-text-editor p,
    .elementor-1205 .elementor-element-6910057 .elementor-widget-text-editor span,
    .elementor-1205 .elementor-element-6910057 .elementor-widget-text-editor li,
    .elementor-1205 .elementor-element-6910057 .elementor-widget-text-editor b,
    .elementor-1205 .elementor-element-6910057 .elementor-widget-text-editor strong,
    .elementor-1205 .elementor-element-6910057 .elementor-icon-list-text,
    .elementor-1205 .elementor-element-6910057 .elementor-icon-list-icon i,
    .elementor-1205 .elementor-element-6910057 .elementor-icon-list-icon svg,
    .elementor-1205 .elementor-element-6910057 .elementor-element-ac24fac .elementor-heading-title,
    .elementor-1205 .elementor-element-6910057 .elementor-element-cf0cd2d .elementor-heading-title,
    .elementor-1205 .elementor-element-6910057 .elementor-element-6d4c65c .elementor-heading-title,
    .elementor-1205 .elementor-element-6910057 .elementor-element-41286ea,
    .elementor-1205 .elementor-element-6910057 .elementor-element-41286ea .e-rating,
    .elementor-1205 .elementor-element-6910057 .elementor-element-41286ea .e-rating-wrapper,
    .elementor-1205 .elementor-element-6910057 .elementor-element-5bd1725 .elementor-icon-list-text,
    .elementor-1205 .elementor-element-6910057 .elementor-element-5bd1725 .elementor-icon-list-icon i,
    .elementor-1205 .elementor-element-6910057 .elementor-element-5bd1725 .elementor-icon-list-icon svg,
    .elementor-1205 .elementor-element-6910057 .elementor-element-ba4689f .elementor-icon-list-text,
    .elementor-1205 .elementor-element-6910057 .elementor-element-ba4689f .elementor-icon-list-icon i,
    .elementor-1205 .elementor-element-6910057 .elementor-element-ba4689f .elementor-icon-list-icon svg,
    .elementor-1205 .elementor-element-2ad2bf8,
    .elementor-1205 .elementor-element-2ad2bf8 p,
    .elementor-1205 .elementor-element-2ad2bf8 span,
    .elementor-1205 .elementor-element-2ad2bf8 li,
    .elementor-1205 .elementor-element-2ad2bf8 b,
    .elementor-1205 .elementor-element-2ad2bf8 strong,
    .elementor-1205 .elementor-element-2ad2bf8 i,
    .elementor-1205 .elementor-element-2ad2bf8 h1,
    .elementor-1205 .elementor-element-2ad2bf8 h2,
    .elementor-1205 .elementor-element-2ad2bf8 h3,
    .elementor-1205 .elementor-element-2ad2bf8 h4,
    .elementor-1205 .elementor-element-2ad2bf8 h5,
    .elementor-1205 .elementor-element-2ad2bf8 h6,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container p,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container span,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container b,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container strong,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container i,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container h4,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container h4 span,
    .elementor-1205 .elementor-element-2ad2bf8 .elementor-widget-container h4 b,
    .elementor-1205 .elementor-element-d8059cb .elementor-heading-title,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-7bc6dd9 .elementor-heading-title,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-6ca7c69 .elementor-heading-title,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-fe47d6e .elementor-heading-title,
    .elementor-1205 .elementor-element-d8059cb .elementor-widget-text-editor,
    .elementor-1205 .elementor-element-d8059cb .elementor-widget-text-editor p,
    .elementor-1205 .elementor-element-d8059cb .elementor-widget-text-editor span,
    .elementor-1205 .elementor-element-d8059cb .elementor-widget-text-editor li,
    .elementor-1205 .elementor-element-d8059cb .elementor-widget-text-editor b,
    .elementor-1205 .elementor-element-d8059cb .elementor-widget-text-editor strong,
    .elementor-1205 .elementor-element-d8059cb .elementor-icon-list-text,
    .elementor-1205 .elementor-element-d8059cb .elementor-icon-list-icon i,
    .elementor-1205 .elementor-element-d8059cb .elementor-icon-list-icon svg,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-e573b1d .elementor-icon-list-text,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-e573b1d .elementor-icon-list-icon i,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-e573b1d .elementor-icon-list-icon svg,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-7c4afac .elementor-icon-list-text,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-7c4afac .elementor-icon-list-icon i,
    .elementor-1205 .elementor-element-d8059cb .elementor-element-7c4afac .elementor-icon-list-icon svg {
        color: #ffffff !important;
        fill: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-1205 .zaid-blue-white-text,
    .elementor-1205 .zaid-blue-white-text .elementor-widget-container,
    .elementor-1205 .zaid-blue-white-text .elementor-heading-title,
    .elementor-1205 .zaid-blue-white-text p,
    .elementor-1205 .zaid-blue-white-text span,
    .elementor-1205 .zaid-blue-white-text li,
    .elementor-1205 .zaid-blue-white-text b,
    .elementor-1205 .zaid-blue-white-text strong,
    .elementor-1205 .zaid-blue-white-text i,
    .elementor-1205 .zaid-blue-white-text h1,
    .elementor-1205 .zaid-blue-white-text h2,
    .elementor-1205 .zaid-blue-white-text h3,
    .elementor-1205 .zaid-blue-white-text h4,
    .elementor-1205 .zaid-blue-white-text h5,
    .elementor-1205 .zaid-blue-white-text h6 {
        color: #ffffff !important;
        fill: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-1205 .elementor-element-2ad2bf8 span[style*="font-weight: 400"],
    .elementor-1205 .elementor-element-2ad2bf8 p span[style*="font-weight: 400"],
    .elementor-1205 .elementor-element-2ad2bf8 h4 span,
    .elementor-1205 .elementor-element-2ad2bf8 p,
    .elementor-1205 .elementor-element-2ad2bf8 p span,
    .elementor-1205 .elementor-element-2ad2bf8 p b,
    .elementor-1205 .elementor-element-2ad2bf8 p strong {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-1205 .elementor-element-2ad2bf8,
    .elementor-1205 .elementor-element-2ad2bf8 * {
        color: #ffffff !important;
        fill: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
        opacity: 1 !important;
    }

    .elementor-1205 .elementor-element-d8059cb .elementor-element-7bc6dd9.zaid-grey-heading .elementor-heading-title {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }
</style>
<div data-rocket-location-hash="da3f53dfcbb3c143a40b866e0cde99ca" data-elementor-type="wp-page" data-elementor-id="1205" class="elementor elementor-1205" data-elementor-post-type="page">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-0d6748a elementor-section-full_width elementor-section-stretched elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="0d6748a" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cfbdc7d" data-id="cfbdc7d" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-74d5dbe elementor-widget elementor-widget-heading" data-id="74d5dbe" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Professionelle Gartenpflege in Wien</h1>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
		<div class="elementor-element elementor-element-6910057 e-flex e-con-boxed e-con e-parent" data-id="6910057" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-f52619a e-con-full e-flex e-con e-child" data-id="f52619a" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-a682707 e-con-full e-flex e-con e-child" data-id="a682707" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-3414e2c elementor-widget elementor-widget-image" data-id="3414e2c" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="137" height="136" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb.png') }}" class="attachment-full size-full wp-image-1116" alt="" srcset="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb.png') }} 137w, {{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb-120x120.png') }} 120w" sizes="(max-width: 137px) 100vw, 137px" />															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-fd1f78d e-con-full e-flex e-con e-child" data-id="fd1f78d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-ac24fac elementor-widget elementor-widget-heading" data-id="ac24fac" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">eco-clean.at</p>				</div>
				</div>
		<div class="elementor-element elementor-element-7f81fa5 e-con-full e-flex e-con e-child" data-id="7f81fa5" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-dbbad41 e-con-full e-flex e-con e-child" data-id="dbbad41" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-cf0cd2d elementor-widget elementor-widget-heading" data-id="cf0cd2d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default">Ausgezeichnet</h5>				</div>
				</div>
				<div class="elementor-element elementor-element-41286ea elementor-widget elementor-widget-rating" data-id="41286ea" data-element_type="widget" data-e-type="widget" data-widget_type="rating.default">
				<div class="elementor-widget-container">
							<div class="e-rating" itemtype="https://schema.org/Rating" itemscope="" itemprop="reviewRating">
			<meta itemprop="worstRating" content="0">
			<meta itemprop="bestRating" content="5">
			<div class="e-rating-wrapper" itemprop="ratingValue" content="5" role="img" aria-label="Rated 5 out of 5">
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
				</div>
				</div>
				<div class="elementor-element elementor-element-6d4c65c elementor-widget elementor-widget-heading" data-id="6d4c65c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">4,9 von 5,0 aus 452 Bewertungen</p>				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1a573c6 e-con-full e-flex e-con e-child" data-id="1a573c6" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-5bd1725 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5bd1725" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
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
				<div class="elementor-element elementor-element-ba4689f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ba4689f" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
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
		<div data-rocket-location-hash="a8f6bd786a69dfd5e12e7eba3a9b81e8" class="elementor-element elementor-element-b1d8ac2 e-flex e-con-boxed e-con e-parent" data-id="b1d8ac2" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
					</div>
				</div>
		<div class="elementor-element elementor-element-8ba9200 e-flex e-con-boxed e-con e-parent" data-id="8ba9200" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-db6fc53 elementor-widget elementor-widget-heading" data-id="db6fc53" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Professionelle Gartenpflege in Wien – Ihr Experte für gepflegte Grünflächen und lebendige Gärten</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-8096374 elementor-widget elementor-widget-text-editor" data-id="8096374" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Willkommen bei Ihrem </span><b>Experten</b><span style="font-weight: 400;"> für </span><b>professionelle Gartenpflege in Wien</b><span style="font-weight: 400;"> und </span><b>Umgebung</b><span style="font-weight: 400;">! Ein gepflegter </span><b>Garten</b><span style="font-weight: 400;"> ist nicht nur eine Augenweide, sondern schafft auch eine grüne </span><b>Oase</b><span style="font-weight: 400;"> der </span><b>Freude</b><span style="font-weight: 400;"> und Erholung. Unser </span><b>Team</b><span style="font-weight: 400;"> bietet umfassende </span><b>Leistungen</b><span style="font-weight: 400;"> für die Pflege und Gestaltung von </span><b>Grünflächen</b><span style="font-weight: 400;"> und </span><b>Außenanlagen</b><span style="font-weight: 400;">, damit Ihr </span><b>Garten</b><span style="font-weight: 400;"> stets in bestem Zustand bleibt. Von </span><b>Rasenpflege</b><span style="font-weight: 400;"> und </span><b>Baumschnitt</b><span style="font-weight: 400;"> bis zur kompletten </span><b>Gartengestaltung</b><span style="font-weight: 400;">: Mit unserer langjährigen </span><b>Erfahrung</b><span style="font-weight: 400;"> und </span><b>Meisterhand</b><span style="font-weight: 400;"> setzen wir Ihre Wünsche in die Tat um.</span></p>								</div>
				</div>
		<div class="elementor-element elementor-element-05bbd36 e-con-full e-flex e-con e-child" data-id="05bbd36" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-31b1753 e-con-full e-flex e-con e-child" data-id="31b1753" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-0c6eab2 elementor-widget elementor-widget-heading" data-id="0c6eab2" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Warum ist Gartenpflege wichtig?</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-ad3b128 elementor-widget elementor-widget-text-editor" data-id="ad3b128" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Regelmäßige </span><b>Gartenpflege</b><span style="font-weight: 400;"> trägt entscheidend zur Schönheit und Gesundheit Ihrer </span><b>Pflanzen</b><span style="font-weight: 400;"> bei. Ein gepflegter </span><b>Garten</b><span style="font-weight: 400;"> verbessert das </span><b>Erscheinungsbild</b><span style="font-weight: 400;"> Ihres </span><b>Hauses</b><span style="font-weight: 400;"> und bietet eine sichere, harmonische Umgebung. Unsere </span><b>Gartenservice</b><span style="font-weight: 400;">-Leistungen umfassen alle wesentlichen </span><b>Tätigkeiten</b><span style="font-weight: 400;"> wie </span><b>Rasenmähen</b><span style="font-weight: 400;">, </span><b>Heckenschnitt</b><span style="font-weight: 400;">, </span><b>Unkrautentfernung</b><span style="font-weight: 400;"> und vieles mehr. Unser Ziel ist es, das volle Potenzial Ihres </span><b>Gartens</b><span style="font-weight: 400;"> in </span><b>Wien</b><span style="font-weight: 400;"> und </span><b>Umgebung</b><span style="font-weight: 400;"> zu entfalten – für ein dauerhaft gepflegtes </span><b>Erscheinungsbild</b><span style="font-weight: 400;"> und blühende </span><b>Pflanzen</b><span style="font-weight: 400;"> in allen </span><b>Jahreszeiten</b><span style="font-weight: 400;">.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-0f8485e elementor-widget elementor-widget-shortcode" data-id="0f8485e" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
		<div class="elementor-element elementor-element-c22d4c2 e-con-full e-flex e-con e-child" data-id="c22d4c2" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2fb8982 elementor-widget elementor-widget-image" data-id="2fb8982" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="530" height="370" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/tab-v1-img-585x370.jpg') }}" class="attachment-medium_large size-medium_large wp-image-1481" alt="" />															</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-59dea90 e-con-full e-flex e-con e-child" data-id="59dea90" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-8fdf8d3 e-con-full e-flex e-con e-child" data-id="8fdf8d3" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-42f1e12 elementor-widget elementor-widget-heading" data-id="42f1e12" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Unsere umfassenden Gartenservice-Leistungen</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-253785d elementor-widget elementor-widget-text-editor" data-id="253785d" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Wir verstehen, dass jeder </span><b>Garten</b><span style="font-weight: 400;"> einzigartig ist. Unsere </span><b>Gärtnerei</b><span style="font-weight: 400;"> bietet deshalb individuelle </span><b>Lösungen</b><span style="font-weight: 400;">, die genau auf die </span><b>Bedürfnisse</b><span style="font-weight: 400;"> Ihrer </span><b>Grünflächen</b><span style="font-weight: 400;"> abgestimmt sind. Ob </span><b>Rodungen</b><span style="font-weight: 400;"> für neue Projekte, </span><b>Pflege</b><span style="font-weight: 400;"> bestehender </span><b>Bepflanzungen</b><span style="font-weight: 400;"> oder die Installation von </span><b>Bewässerungsanlagen</b><span style="font-weight: 400;"> – wir bieten einen </span><b>Gartenservice</b><span style="font-weight: 400;">, der alle Anforderungen erfüllt. Unsere erfahrenen </span><b>Gärtner</b><span style="font-weight: 400;"> stehen Ihnen als </span><b>Ansprechpartner</b><span style="font-weight: 400;"> zur Seite und übernehmen alle anfallenden </span><b>Gartenarbeiten</b><span style="font-weight: 400;">.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-144f6d5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="144f6d5" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Rasenpflege und Rasenmähen: Ein gepflegter Rasen ist das Aushängeschild jedes Gartens. Unsere Experten kümmern sich um das Rasenmähen, die richtige Rasenpflege und das Düngen, um eine gleichmäßige, grüne Fläche zu gewährleisten.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Pflege von Bäumen und Sträuchern: Der Baumschnitt und die Pflege von Sträuchern sind essenziell, um die Gesundheit und Form Ihrer Pflanzen zu sichern. Unser Team führt diese Arbeiten sorgfältig und mit der nötigen Sicherheit durch.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Unkrautentfernung und Düngen: Unkraut kann die Pflanzen in Ihrem Garten beeinträchtigen. Unser Service umfasst das Entfernen von Unkraut und das gezielte Düngen Ihrer Pflanzen, um optimale Wachstumsbedingungen zu schaffen.</span>
									</li>
						</ul>
						</div>
				</div>
		<div class="elementor-element elementor-element-e7563b2 e-con-full e-flex e-con e-child" data-id="e7563b2" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-2ad2bf8 zaid-blue-white-text elementor-widget elementor-widget-text-editor" data-id="2ad2bf8" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<h4><span style="color: #ffffff !important;"><b style="color: #ffffff !important;">Gartengestaltung nach Ihren Vorstellungen</b></span></h4><p><span style="color: #ffffff !important;"><span style="font-weight: 400; color: #ffffff !important;">Ihre persönliche grüne </span><b style="color: #ffffff !important;">Oase</b><span style="font-weight: 400; color: #ffffff !important;"> beginnt mit einer professionellen </span><b style="color: #ffffff !important;">Gartengestaltung</b><span style="font-weight: 400; color: #ffffff !important;">. Unser </span><b style="color: #ffffff !important;">Team</b><span style="font-weight: 400; color: #ffffff !important;"> hilft Ihnen, Ihre </span><b style="color: #ffffff !important;">Grünflächen</b><span style="font-weight: 400; color: #ffffff !important;"> in ein Refugium der </span><b style="color: #ffffff !important;">Freude</b><span style="font-weight: 400; color: #ffffff !important;"> und Entspannung zu verwandeln. Vom Anlegen von </span><b style="color: #ffffff !important;">Wegen</b><span style="font-weight: 400; color: #ffffff !important;"> und </span><b style="color: #ffffff !important;">Terrassen</b><span style="font-weight: 400; color: #ffffff !important;"> bis zur Auswahl und </span><b style="color: #ffffff !important;">Bepflanzung</b><span style="font-weight: 400; color: #ffffff !important;"> mit den passenden </span><b style="color: #ffffff !important;">Pflanzen</b><span style="font-weight: 400; color: #ffffff !important;"> – unsere </span><b style="color: #ffffff !important;">Gärtnerei</b><span style="font-weight: 400; color: #ffffff !important;"> verwandelt Ihre Ideen in ein prachtvolles, grünes Paradies. Auch bei der Auswahl robuster </span><b style="color: #ffffff !important;">Blumen</b><span style="font-weight: 400; color: #ffffff !important;"> und langlebiger </span><b style="color: #ffffff !important;">Sträucher</b><span style="font-weight: 400; color: #ffffff !important;"> sowie der Gestaltung von </span><b style="color: #ffffff !important;">Gemüsebeeten</b><span style="font-weight: 400; color: #ffffff !important;"> stehen wir Ihnen zur Seite.</span></span></p><h4><span style="color: #ffffff !important;"><b style="color: #ffffff !important;">Gartenpflege während der Gartensaison</b></span></h4><p><span style="color: #ffffff !important;"><span style="font-weight: 400; color: #ffffff !important;">Die intensive </span><b style="color: #ffffff !important;">Gartensaison</b><span style="font-weight: 400; color: #ffffff !important;"> ist der ideale Zeitpunkt, um Ihren </span><b style="color: #ffffff !important;">Garten</b><span style="font-weight: 400; color: #ffffff !important;"> auf Vordermann zu bringen. Wir bieten Ihnen alle nötigen </span><b style="color: #ffffff !important;">Gartenarbeiten</b><span style="font-weight: 400; color: #ffffff !important;">, um die Schönheit und Gesundheit Ihrer </span><b style="color: #ffffff !important;">Pflanzen</b><span style="font-weight: 400; color: #ffffff !important;"> zu erhalten. Unser </span><b style="color: #ffffff !important;">Gartenservice</b><span style="font-weight: 400; color: #ffffff !important;"> in </span><b style="color: #ffffff !important;">Wien und Umgebung</b><span style="font-weight: 400; color: #ffffff !important;"> umfasst das saisonale </span><b style="color: #ffffff !important;">Rasenmähen</b><span style="font-weight: 400; color: #ffffff !important;">, den </span><b style="color: #ffffff !important;">Heckenschnitt</b><span style="font-weight: 400; color: #ffffff !important;">, und die gezielte </span><b style="color: #ffffff !important;">Pflege</b><span style="font-weight: 400; color: #ffffff !important;"> Ihrer </span><b style="color: #ffffff !important;">Pflanzen</b><span style="font-weight: 400; color: #ffffff !important;"> durch </span><b style="color: #ffffff !important;">Düngen</b><span style="font-weight: 400; color: #ffffff !important;"> und Bewässerung. So bleibt Ihr </span><b style="color: #ffffff !important;">Garten</b><span style="font-weight: 400; color: #ffffff !important;"> in allen </span><b style="color: #ffffff !important;">Jahreszeiten</b><span style="font-weight: 400; color: #ffffff !important;"> einladend und lebendig.</span></span></p><h4><span style="color: #ffffff !important;"><b style="color: #ffffff !important;">Unsere Gärtnerei in Wien – Ihr Profi für alle Gartenarbeiten</b></span></h4><p><span style="color: #ffffff !important;"><span style="font-weight: 400; color: #ffffff !important;">Unser erfahrenes </span><b style="color: #ffffff !important;">Team</b><span style="font-weight: 400; color: #ffffff !important;"> von </span><b style="color: #ffffff !important;">Gärtnern</b><span style="font-weight: 400; color: #ffffff !important;"> und </span><b style="color: #ffffff !important;">Experten</b><span style="font-weight: 400; color: #ffffff !important;"> ist in </span><b style="color: #ffffff !important;">Wien</b><span style="font-weight: 400; color: #ffffff !important;"> und </span><b style="color: #ffffff !important;">Niederösterreich</b><span style="font-weight: 400; color: #ffffff !important;"> für Sie da. Ob Sie umfassende </span><b style="color: #ffffff !important;">Pflege</b><span style="font-weight: 400; color: #ffffff !important;">-Leistungen, gezielte </span><b style="color: #ffffff !important;">Gartengestaltung</b><span style="font-weight: 400; color: #ffffff !important;"> oder die </span><b style="color: #ffffff !important;">Ausführung</b><span style="font-weight: 400; color: #ffffff !important;"> von speziellen </span><b style="color: #ffffff !important;">Gartenarbeiten</b><span style="font-weight: 400; color: #ffffff !important;"> wünschen – wir stehen Ihnen für alle </span><b style="color: #ffffff !important;">Fragen</b><span style="font-weight: 400; color: #ffffff !important;"> zur Seite. Unsere </span><b style="color: #ffffff !important;">Gärtnerei</b><span style="font-weight: 400; color: #ffffff !important;"> bietet Ihnen alles, was Sie für die Pflege und Gestaltung Ihres </span><b style="color: #ffffff !important;">Gartens</b><span style="font-weight: 400; color: #ffffff !important;"> benötigen.</span></span></p><h4><span style="color: #ffffff !important;"><b style="color: #ffffff !important;">Kontaktieren Sie uns für ein persönliches Gartenangebot!</b></span></h4><p><span style="color: #ffffff !important;"><span style="font-weight: 400; color: #ffffff !important;">Möchten Sie die volle Schönheit Ihres </span><b style="color: #ffffff !important;">Gartens</b><span style="font-weight: 400; color: #ffffff !important;"> entdecken? Rufen Sie uns an oder schreiben Sie uns eine E-Mail, und unser </span><b style="color: #ffffff !important;">Team</b><span style="font-weight: 400; color: #ffffff !important;"> erstellt Ihnen ein maßgeschneidertes </span><b style="color: #ffffff !important;">Angebot</b><span style="font-weight: 400; color: #ffffff !important;"> für Ihren </span><b style="color: #ffffff !important;">Garten</b><span style="font-weight: 400; color: #ffffff !important;"> in </span><b style="color: #ffffff !important;">Wien</b><span style="font-weight: 400; color: #ffffff !important;"> und </span><b style="color: #ffffff !important;">Umgebung</b><span style="font-weight: 400; color: #ffffff !important;">. Wir freuen uns darauf, Ihnen als verlässlicher Partner für die </span><b style="color: #ffffff !important;">Gartenpflege</b><span style="font-weight: 400; color: #ffffff !important;"> zur Seite zu stehen.</span></span></p>								</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1bd4f8f e-con-full e-flex e-con e-child" data-id="1bd4f8f" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-484a3e3 e-con-full e-flex e-con e-child" data-id="484a3e3" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-221c8f1 elementor-widget elementor-widget-heading" data-id="221c8f1" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Maßgeschneiderte Gartenpflege für Wien und Niederösterreich – Unsere Leistungen im Detail</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-673f841 elementor-widget elementor-widget-text-editor" data-id="673f841" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Als erfahrene </span><b>Gärtnerei</b><span style="font-weight: 400;"> in </span><b>Wien und Umgebung</b><span style="font-weight: 400;"> bieten wir Ihnen einen umfassenden </span><b>Gartenservice</b><span style="font-weight: 400;"> an, der auf die individuellen </span><b>Bedürfnisse</b><span style="font-weight: 400;"> Ihrer </span><b>Grünflächen</b><span style="font-weight: 400;"> zugeschnitten ist. Unser Ziel ist es, Ihren </span><b>Garten</b><span style="font-weight: 400;"> in eine grüne </span><b>Oase</b><span style="font-weight: 400;"> zu verwandeln, die Ihren Vorstellungen entspricht und das ganze Jahr über gepflegt ist. Mit </span><b>Meisterhand</b><span style="font-weight: 400;"> und Leidenschaft für </span><b>Pflanzen</b><span style="font-weight: 400;"> übernehmen wir die professionelle </span><b>Gartenpflege</b><span style="font-weight: 400;"> und kümmern uns um alle wichtigen </span><b>Arbeiten</b><span style="font-weight: 400;"> – vom Anlegen neuer </span><b>Bepflanzungen</b><span style="font-weight: 400;"> bis hin zur Wartung Ihrer </span><b>Bewässerungsanlagen</b><span style="font-weight: 400;">.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-2563b16 elementor-widget elementor-widget-shortcode" data-id="2563b16" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
		<div class="elementor-element elementor-element-b170a31 e-con-full e-flex e-con e-child" data-id="b170a31" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-e1eb809 elementor-widget elementor-widget-image" data-id="e1eb809" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="530" height="562" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/about-v1-img2.png') }}" class="attachment-large size-large wp-image-1480" alt="" />															</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-4c9f5fe e-con-full e-flex e-con e-child" data-id="4c9f5fe" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-e6cf8f0 e-con-full e-flex e-con e-child" data-id="e6cf8f0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-d74390f elementor-widget elementor-widget-heading" data-id="d74390f" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Rodungen und Baumpflege – für sichere und gepflegte Grünflächen</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-1fcd7e5 elementor-widget elementor-widget-text-editor" data-id="1fcd7e5" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><b>Bäume</b><span style="font-weight: 400;"> und </span><b>Sträucher</b><span style="font-weight: 400;"> bringen Leben und Struktur in Ihren </span><b>Garten</b><span style="font-weight: 400;">. Doch um Ihre </span><b>Außenanlagen</b><span style="font-weight: 400;"> gesund und sicher zu halten, sind regelmäßige </span><b>Baumpflege</b><span style="font-weight: 400;"> und </span><b>Rodungen</b><span style="font-weight: 400;"> unerlässlich. Unser </span><b>Team</b><span style="font-weight: 400;"> übernimmt für Sie die sorgfältige </span><b>Pflege</b><span style="font-weight: 400;"> Ihrer </span><b>Bäume</b><span style="font-weight: 400;"> und </span><b>Sträucher</b><span style="font-weight: 400;">, einschließlich </span><b>Baumschnitt</b><span style="font-weight: 400;"> und </span><b>Heckenschnitt</b><span style="font-weight: 400;">. Dabei legen wir besonderen Wert auf eine fachgerechte und schonende Ausführung, um die </span><b>Sicherheit</b><span style="font-weight: 400;"> Ihres </span><b>Gartens</b><span style="font-weight: 400;"> zu gewährleisten und Ihre </span><b>Pflanzen</b><span style="font-weight: 400;"> langfristig zu fördern.</span></p><p><span style="font-weight: 400;">Unsere Experten bieten Ihnen </span><b>Baumpflege</b><span style="font-weight: 400;">-Services wie:</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-b485b0f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="b485b0f" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Baumschnitt zur Förderung gesunder Wachstumsbedingungen.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Gezielte Rodungen bei kranken oder unerwünschten Bäumen und Sträuchern.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Beratung zur Gestaltung und Sicherheit von Grünflächen.</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-2b54650 elementor-widget elementor-widget-text-editor" data-id="2b54650" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Unser Ziel ist es, dass Ihre </span><b>Garage</b><span style="font-weight: 400;"> nicht nur sauber aussieht, sondern auch alle Anforderungen an </span><b>Sicherheit</b><span style="font-weight: 400;"> und Hygiene erfüllt. Unsere </span><b>Reinigung</b><span style="font-weight: 400;"> bringt dabei nicht nur Ordnung, sondern auch ein spürbares Maß an Zuverlässigkeit und Qualität mit sich. Vertrauen Sie auf uns, wenn es um die gründliche und </span><b>professionelle Garagenreinigung</b><span style="font-weight: 400;"> in </span><b>Wien</b><span style="font-weight: 400;"> geht. </span><b>Rufen Sie uns an oder schreiben Sie uns eine E-Mail</b><span style="font-weight: 400;">, und lassen Sie uns gemeinsam die beste Reinigungsstrategie für Ihre </span><b>Garage</b><span style="font-weight: 400;"> entwickeln.</span></p>								</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-ac75d8d e-con-full e-flex e-con e-child" data-id="ac75d8d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-134bc06 elementor-widget elementor-widget-heading" data-id="134bc06" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Fachgerechte Rasenpflege und Rollrasen-Verlegung</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-7cc3d38 elementor-widget elementor-widget-text-editor" data-id="7cc3d38" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Ein dichter und grüner </span><b>Rasen</b><span style="font-weight: 400;"> verleiht jedem </span><b>Garten</b><span style="font-weight: 400;"> das perfekte </span><b>Erscheinungsbild</b><span style="font-weight: 400;">. Unsere </span><b>Gartenservice</b><span style="font-weight: 400;">-Experten kümmern sich nicht nur um das regelmäßige </span><b>Rasenmähen</b><span style="font-weight: 400;">, sondern bieten auch gezielte </span><b>Rasenpflege</b><span style="font-weight: 400;">-Maßnahmen wie das Entfernen von </span><b>Unkraut</b><span style="font-weight: 400;">, das </span><b>Düngen</b><span style="font-weight: 400;"> und die richtige Bewässerung an. Für eine schnelle Begrünung steht Ihnen unser </span><b>Rollrasen</b><span style="font-weight: 400;">-Service zur Verfügung – ideal für eine sofortige Verschönerung Ihres </span><b>Gartens</b><span style="font-weight: 400;">.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-3b29b0a elementor-widget elementor-widget-heading" data-id="3b29b0a" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Bepflanzung und Blumenpflege für jede Jahreszeit</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-b510a0e elementor-widget elementor-widget-text-editor" data-id="b510a0e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Ob frische </span><b>Blumen</b><span style="font-weight: 400;">, langlebige </span><b>Sträucher</b><span style="font-weight: 400;"> oder dekorative </span><b>Pflanzen</b><span style="font-weight: 400;"> – die richtige </span><b>Bepflanzung</b><span style="font-weight: 400;"> macht Ihren </span><b>Garten</b><span style="font-weight: 400;"> lebendig und einladend. Unsere </span><b>Gärtner</b><span style="font-weight: 400;"> beraten Sie bei der Auswahl geeigneter </span><b>Pflanzen</b><span style="font-weight: 400;">, die optimal zu den Bedingungen in </span><b>Wien</b><span style="font-weight: 400;"> und </span><b>Umgebung</b><span style="font-weight: 400;"> passen. Wir übernehmen die gesamte Planung und </span><b>Ausführung</b><span style="font-weight: 400;"> der </span><b>Pflanzarbeiten</b><span style="font-weight: 400;"> und kümmern uns darum, dass Ihre </span><b>Grünflächen</b><span style="font-weight: 400;"> zu jeder Zeit im Jahr in voller Pracht erstrahlen.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-2969468 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2969468" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Pflanzen-Beratung für die idealen Pflanzen in Ihrem Garten.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Pflege und Düngung von Blumen und Sträuchern.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Saisonale Anpassung und regelmäßige Pflanzenpflege.</span>
									</li>
						</ul>
						</div>
				</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="6102d649fe6af2b1cdec67695b2ece0a" class="elementor-element elementor-element-7bd633a e-flex e-con-boxed e-con e-parent" data-id="7bd633a" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-47d8563 elementor-widget elementor-widget-text-editor" data-id="47d8563" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<h4><span style="color: #000000;"><b>Gestaltung von Wegen und Terrassen</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Zur optimalen Nutzung und einem stilvollen </span><b>Erscheinungsbild</b><span style="font-weight: 400;"> gehört die passende </span><b>Gestaltung</b><span style="font-weight: 400;"> Ihrer </span><b>Gartenflächen</b><span style="font-weight: 400;">. Unser </span><b>Team</b><span style="font-weight: 400;"> plant und gestaltet Ihre </span><b>Wege</b><span style="font-weight: 400;">, </span><b>Terrassen</b><span style="font-weight: 400;"> und andere </span><b>Außenanlagen</b><span style="font-weight: 400;">. Dabei legen wir besonderen Wert auf hochwertige Materialien und eine fachgerechte </span><b>Ausführung</b><span style="font-weight: 400;">. Ob Sie klare </span><b>Wege</b><span style="font-weight: 400;"> für eine strukturierte Anordnung oder eine gemütliche </span><b>Terrasse</b><span style="font-weight: 400;"> für entspannte Stunden wünschen – wir bieten Ihnen maßgeschneiderte </span><b>Lösungen</b><span style="font-weight: 400;">.</span></span></p><h4><span style="color: #000000;"><b>Effiziente Bewässerungsanlagen und Unkrautbekämpfung</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Damit Ihre </span><b>Pflanzen</b><span style="font-weight: 400;"> auch bei hohen Temperaturen optimal versorgt sind, installieren wir moderne </span><b>Bewässerungsanlagen</b><span style="font-weight: 400;"> und bieten Ihnen die passende </span><b>Beratung</b><span style="font-weight: 400;"> für eine effiziente </span><b>Gartenpflege</b><span style="font-weight: 400;">. So bleibt Ihr </span><b>Garten</b><span style="font-weight: 400;"> in allen </span><b>Jahreszeiten</b><span style="font-weight: 400;"> gepflegt, und Sie sparen gleichzeitig Wasser und Zeit. Darüber hinaus bekämpfen wir lästiges </span><b>Unkraut</b><span style="font-weight: 400;"> mit wirksamen und umweltfreundlichen Methoden, damit Ihre </span><b>Pflanzen</b><span style="font-weight: 400;"> den Raum und die Nährstoffe erhalten, die sie benötigen.</span></span></p><h4><span style="color: #000000;"><b>Ihr Ansprechpartner für Gartenprojekte in Wien und Umgebung</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Unser Ziel ist es, als verlässlicher </span><b>Ansprechpartner</b><span style="font-weight: 400;"> für alle Aspekte der </span><b>Gartenpflege</b><span style="font-weight: 400;"> und </span><b>Gartengestaltung</b><span style="font-weight: 400;"> in </span><b>Wien</b><span style="font-weight: 400;"> und </span><b>Niederösterreich</b><span style="font-weight: 400;"> an Ihrer Seite zu stehen. Mit unserem umfassenden </span><b>Service</b><span style="font-weight: 400;"> können Sie sich auf eine professionelle </span><b>Ausführung</b><span style="font-weight: 400;"> aller </span><b>Gartenarbeiten</b><span style="font-weight: 400;"> verlassen. Von der Planung neuer </span><b>Projekte</b><span style="font-weight: 400;"> bis zur Pflege bestehender Anlagen begleiten wir Sie mit Leidenschaft und Know-how.</span></span></p><h4><span style="color: #000000;"><b>Kontaktieren Sie uns für professionelle Gartenpflege in Wien!</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Nutzen Sie die Erfahrung unseres </span><b>Teams</b><span style="font-weight: 400;"> und entdecken Sie die Vorteile einer professionellen </span><b>Gartenpflege</b><span style="font-weight: 400;"> in </span><b>Wien und Umgebung</b><span style="font-weight: 400;">. Ob Sie Unterstützung bei der </span><b>Rasenpflege</b><span style="font-weight: 400;">, </span><b>Bepflanzung</b><span style="font-weight: 400;"> oder der Pflege Ihrer </span><b>Gartenanlagen</b><span style="font-weight: 400;"> wünschen – wir stehen Ihnen zur Verfügung. </span><b>Rufen Sie uns an oder schreiben Sie uns eine E-Mail</b><span style="font-weight: 400;">, und lassen Sie uns gemeinsam Ihren </span><b>Garten</b><span style="font-weight: 400;"> in eine grüne Oase der </span><b>Freude</b><span style="font-weight: 400;"> verwandeln!</span></span></p><h3><span style="color: #000000;"><b>Gartenpflege mit Herz und Fachwissen – Ihr Wiener Gartenservice für jeden Bedarf</b></span></h3><p><span style="color: #000000;"><span style="font-weight: 400;">Unsere </span><b>Gärtnerei</b><span style="font-weight: 400;"> in </span><b>Wien</b><span style="font-weight: 400;"> steht Ihnen mit einem erfahrenen </span><b>Gärtner</b><span style="font-weight: 400;">-Team zur Seite, das die </span><b>Gartenpflege</b><span style="font-weight: 400;"> mit Leidenschaft und Kompetenz ausführt. Für uns ist der Garten ein Ort, der von Menschen für Menschen gestaltet wird – ein Raum, der den individuellen Bedürfnissen entspricht und Freude bringt. Unser professionelles Team aus </span><b>Gärtnern</b><span style="font-weight: 400;"> bietet Ihnen sämtliche Dienstleistungen der </span><b>Gartenarbeit</b><span style="font-weight: 400;">, von der Pflege und Gestaltung über die Düngung bis hin zur Planung Ihrer </span><b>Gemüsebeete</b><span style="font-weight: 400;">.</span></span></p><h4><span style="color: #000000;"><b>Gartenarbeit und Rasenpflege für ein gesundes Grün</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Ein gesunder </span><b>Rasen</b><span style="font-weight: 400;"> bildet das Herzstück vieler Gärten, und wir wissen, dass er regelmäßige Pflege erfordert. Unsere </span><b>Gärtner</b><span style="font-weight: 400;"> bieten umfassende </span><b>Rasen</b><span style="font-weight: 400;">-Services, die vom </span><b>Rasenmähen</b><span style="font-weight: 400;"> bis zum gezielten Einsatz von </span><b>Dünger</b><span style="font-weight: 400;"> reichen. Durch das richtige Maß an </span><b>Düngen</b><span style="font-weight: 400;"> und Bewässerung bleibt der </span><b>Rasen</b><span style="font-weight: 400;"> kräftig und grün – perfekt für alle Jahreszeiten und ein echtes Highlight in Ihrem Garten.</span></span></p><h4><span style="color: #000000;"><b>Gartenpflege für Mensch und Natur – Nachhaltigkeit als Ziel</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">In unserer </span><b>Gärtnerei</b><span style="font-weight: 400;"> setzen wir auf eine nachhaltige </span><b>Gartenpflege</b><span style="font-weight: 400;">, die im Einklang mit der Natur steht und den </span><b>Menschen</b><span style="font-weight: 400;"> ebenso wie der Umwelt zugutekommt. Unsere Experten in </span><b>Wien</b><span style="font-weight: 400;"> legen großen Wert auf ökologische Maßnahmen, die den Garten gesund und die </span><b>Grünflächen</b><span style="font-weight: 400;"> langfristig schön halten. Von der Auswahl umweltfreundlicher </span><b>Dünger</b><span style="font-weight: 400;"> bis zur sorgfältigen Pflege von Bäumen und Sträuchern ist </span><b>alles</b><span style="font-weight: 400;"> darauf ausgerichtet, ein grünes und lebenswertes Umfeld zu schaffen.</span></span></p><h4><span style="color: #000000;"><b>Gärtner für Wien und Umgebung – Persönlich und engagiert</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Unsere </span><b>Gärtner</b><span style="font-weight: 400;"> stehen Ihnen in </span><b>Wien</b><span style="font-weight: 400;"> und Umgebung als verlässlicher Partner zur Seite, der sich um alle Aspekte der </span><b>Gartenarbeit</b><span style="font-weight: 400;"> kümmert. Egal, ob es um den regelmäßigen Rückschnitt von Bäumen, die Pflege von Blumenbeeten, oder die Anlage neuer </span><b>Gemüsebeete</b><span style="font-weight: 400;"> geht – unsere </span><b>Gärtnerei</b><span style="font-weight: 400;"> bietet Ihnen alles, was Sie für einen schönen und gepflegten Garten benötigen.</span></span></p><p><span style="color: #000000;"><span style="font-weight: 400;">Für uns zählt dabei nicht nur die Effizienz, sondern auch das menschliche Miteinander. Denn ein gepflegter Garten ist ein Ort, an dem sich </span><b>Menschen</b><span style="font-weight: 400;"> wohlfühlen und entspannen können – und genau dafür arbeiten wir täglich mit Freude und Leidenschaft.</span></span></p><h4><span style="color: #000000;"><b>Kontaktieren Sie Ihre Wiener Gärtnerei für professionelle Gartenpflege</b></span></h4><p><span style="color: #000000;"><span style="font-weight: 400;">Nichts ist schöner als ein Garten, der alle Sinne anspricht und perfekt gepflegt ist. Unser Team in </span><b>Wien</b><span style="font-weight: 400;"> freut sich darauf, Ihnen mit unserer Erfahrung und Kompetenz zur Seite zu stehen. </span><b>Rufen Sie uns an oder schreiben Sie uns eine E-Mail</b><span style="font-weight: 400;"> und lassen Sie uns gemeinsam Ihren Garten in eine grüne Wohlfühloase verwandeln.</span></span></p>								</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="e940855baeb7e9fbb423628b9dfb3993" class="elementor-element elementor-element-e4ff83f e-flex e-con-boxed e-con e-parent" data-id="e4ff83f" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-fa9b404 e-con-full e-flex e-con e-child" data-id="fa9b404" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-e1d5f36 elementor-widget elementor-widget-heading" data-id="e1d5f36" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">EcoClean – Professionelles Reinigungsunternehmen Wien &amp; Umgebung</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-eb05386 e-con-full e-flex e-con e-child" data-id="eb05386" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-35114d1 elementor-widget elementor-widget-heading" data-id="35114d1" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Monday<br>
09:00 – 17:00</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-30ad2f0 e-con-full e-flex e-con e-child" data-id="30ad2f0" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-5fa001d elementor-widget elementor-widget-heading" data-id="5fa001d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Friday<br>
09:00 – 17:00</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-c0878f9 e-con-full e-flex e-con e-child" data-id="c0878f9" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-bfe1b72 elementor-widget elementor-widget-heading" data-id="bfe1b72" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Karl-Czerny-Gasse 4 <br>
1200 Vienna <br>
Austria</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-50509e8 e-con-full e-flex e-con e-child" data-id="50509e8" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-2c15ca6 elementor-widget elementor-widget-heading" data-id="2c15ca6" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Tuesday<br>
09:00 – 17:00</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-42f0ec5 e-con-full e-flex e-con e-child" data-id="42f0ec5" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-331b3e6 elementor-widget elementor-widget-heading" data-id="331b3e6" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Saturday<br>
Closed</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-d876fe8 e-con-full e-flex e-con e-child" data-id="d876fe8" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-a53f5da elementor-widget elementor-widget-heading" data-id="a53f5da" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Tel: 0699 17777752
Email: office@eco-clean.at</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-a8584ee e-con-full e-flex e-con e-child" data-id="a8584ee" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-44e51b2 elementor-widget elementor-widget-heading" data-id="44e51b2" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Wednesday<br>
09:00 – 17:00</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-056a3eb e-con-full e-flex e-con e-child" data-id="056a3eb" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-89f2832 elementor-widget elementor-widget-heading" data-id="89f2832" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Sunday<br>
Closed</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-092d86e e-con-full e-flex e-con e-child" data-id="092d86e" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-a070c0a elementor-widget elementor-widget-heading" data-id="a070c0a" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Opening hours:</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-97e9e75 e-con-full e-flex e-con e-child" data-id="97e9e75" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-8505ff1 elementor-widget elementor-widget-heading" data-id="8505ff1" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Thursday<br>
09:00 – 17:00</p>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-2ddfba9 e-con-full e-flex e-con e-child" data-id="2ddfba9" data-element_type="container" data-e-type="container">
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="3f822353bb1abc37a46499176bf99350" class="elementor-element elementor-element-c9bc441 e-flex e-con-boxed e-con e-parent" data-id="c9bc441" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-e49da33 elementor-widget elementor-widget-heading" data-id="e49da33" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Direkt zu Google Maps
</h2>				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-d8059cb e-flex e-con-boxed e-con e-parent" data-id="d8059cb" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-6cb7b86 e-con-full e-flex e-con e-child" data-id="6cb7b86" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-7bc6dd9 zaid-grey-heading elementor-widget elementor-widget-heading" data-id="7bc6dd9" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Kontaktdaten</h2>				</div>
				</div>
		<div class="elementor-element elementor-element-41f8d2a e-con-full e-flex e-con e-child" data-id="41f8d2a" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-64f058b e-con-full e-flex e-con e-child" data-id="64f058b" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-6ca7c69 elementor-widget elementor-widget-heading" data-id="6ca7c69" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Unser Standort
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-e573b1d elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="e573b1d" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">P.O. Box - 115037, Dubai U.A.E</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-fe47d6e elementor-widget elementor-widget-heading" data-id="fe47d6e" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Schneller Kontakt
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-7c4afac elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7c4afac" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>						</span>
										<span class="elementor-icon-list-text">+971 56 420 67 99</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>						</span>
										<span class="elementor-icon-list-text">project.coordinator@arrowhead.ae</span>
									</li>
						</ul>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-28a5c95 e-con-full e-flex e-con e-child" data-id="28a5c95" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-ea0f2d7 elementor-widget elementor-widget-shortcode" data-id="ea0f2d7" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode"><div class='fluentform ff-default fluentform_wrapper_3 ffs_custom_wrap'><form data-form_id="3" id="fluentform_3" class="eco-contact-form fluent_form_3 ff-el-form-top ff_form_instance_3_1 ff-form-loading ffs_custom" data-form_instance="ff_form_instance_3_1" method="POST" action="{{ route('contact.submit') }}" >
@csrf<fieldset  style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Blank Form (#3)</legend><input type='hidden' name='__fluent_form_embded_post_id' value='1205' /><input type="hidden" id="_fluentform_3_fluentformnonce" name="_fluentform_3_fluentformnonce" value="689ab3a505" /><input type="hidden" name="_wp_http_referer" value="{{ url('/gartenpflege-in-wien/') }}" /><div data-type="name-element" data-name="names" class=" ff-field_container ff-name-field-wrapper" ><div class='ff-t-container'><div class='ff-t-cell '><div class='ff-el-group ff-el-form-top'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_3_names_first_name_' id='label_ff_3_names_first_name_' >First Name</label></div><div class='ff-el-input--content'><input type="text" name="names[first_name]" id="ff_3_names_first_name_" class="ff-el-form-control" placeholder="First Name" aria-invalid="false" aria-required=true></div></div></div><div class='ff-t-cell '><div class='ff-el-group ff-el-form-top'><div class="ff-el-input--label asterisk-right"><label for='ff_3_names_last_name_' id='label_ff_3_names_last_name_' >Last Name</label></div><div class='ff-el-input--content'><input type="text" name="names[last_name]" id="ff_3_names_last_name_" class="ff-el-form-control" placeholder="Last Name" aria-invalid="false" aria-required=false></div></div></div></div></div><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_3_email' id='label_ff_3_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_3_email" class="ff-el-form-control" placeholder="Email Address" data-name="email"  aria-invalid="false" aria-required=true></div></div><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_3_phone' id='label_ff_3_phone' aria-label="Phone/Mobile">Phone/Mobile</label></div><div class='ff-el-input--content'><input name="phone" class="ff-el-form-control ff-el-phone" type="tel" placeholder="Mobile Number" data-name="phone" id="ff_3_phone" inputmode="tel"  aria-invalid='false' aria-required=true></div></div><div class='ff-el-group'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_3_dropdown' id='label_ff_3_dropdown' aria-label="Regarding">Regarding</label></div><div class='ff-el-input--content'><select name="dropdown" id="ff_3_dropdown" class="ff-el-form-control" data-name="dropdown" data-calc_value="0"  aria-invalid="false" aria-required="true" aria-labelledby="label_ff_3_dropdown"><option value="">- Select -</option><option value="Window Cleaning"  >Window Cleaning</option><option value="Office Cleaning"  >Office Cleaning</option><option value="Floor Cleaning In Vienna"  >Floor Cleaning In Vienna</option><option value="Facade Cleaning"  >Facade Cleaning</option><option value="Carpet Cleaning Vienna"  >Carpet Cleaning Vienna</option><option value="Final Cleaning"  >Final Cleaning</option><option value="Special Cleaning In Vienna And The Surrounding Area"  >Special Cleaning In Vienna And The Surrounding Area</option></select></div></div><div class='ff-el-group'><div class="ff-el-input--label asterisk-right"><label for='ff_3_input_text' id='label_ff_3_input_text' aria-label="News">News</label></div><div class='ff-el-input--content'><input type="text" name="input_text" class="ff-el-form-control" placeholder="News" data-name="input_text" id="ff_3_input_text"  aria-invalid="false" aria-required=false></div></div><div class='ff-el-group'><div class='ff-el-input--content'><div class='ff-el-form-check ff-el-form-check-'><label class='ff-el-form-check-label' for='checkbox_02b9c90c11270c73306a1840f794663b'><input  type="checkbox" name="checkbox[]" data-name="checkbox" class="ff-el-form-check-input ff-el-form-check-checkbox" value="I have read the privacy policy. I agree that my details and data will be collected and stored electronically to answer my request. Note: You can revoke your consent at any time by sending an email to office@eco.clean.at ."  id='checkbox_02b9c90c11270c73306a1840f794663b' aria-label='I have read the privacy policy. I agree that my details and data will be collected and stored electronically to answer my request. Note: You can revoke your consent at any time by sending an email to office@eco.clean.at .' aria-invalid='false' aria-required=true> <span>I have read the privacy policy. I agree that my details and data will be collected and stored electronically to answer my request. Note: You can revoke your consent at any time by sending an email to office@eco.clean.at .</span></label></div></div></div><div class='ff-el-group ff-text-left ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"  aria-label="Submit Form">Submit Form</button></div></fieldset></form><div id='fluentform_3_errors' class='ff-errors-in-stack ff_form_instance_3_1 ff-form-loading_errors ff_form_instance_3_1_errors'></div></div>            <script type="text/javascript">
                window.fluent_form_ff_form_instance_3_1 = {"id":"3","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","cssClassName":"","asteriskPlacement":"asterisk-right"},"restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_3_1","form_id_selector":"fluentform_3","rules":{"names[first_name]":{"required":{"value":true,"message":"This field is required","global_message":"This field is required","global":true}},"names[middle_name]":{"required":{"value":false,"message":"This field is required","global_message":"This field is required","global":true}},"names[last_name]":{"required":{"value":false,"message":"This field is required","global_message":"This field is required","global":true}},"email":{"required":{"value":true,"message":"This field is required","global_message":"This field is required","global":true},"email":{"value":true,"message":"This field must contain a valid email","global_message":"This field must contain a valid email","global":true}},"phone":{"required":{"value":true,"global":true,"message":"This field is required","global_message":"This field is required"},"valid_phone_number":{"value":false,"global":true,"message":"Phone number is not valid","global_message":"Phone number is not valid"}},"dropdown":{"required":{"value":true,"message":"This field is required","global_message":"This field is required","global":true}},"input_text":{"required":{"value":false,"message":"This field is required","global_message":"This field is required","global":true}},"checkbox":{"required":{"value":true,"message":"This field is required","global_message":"This field is required","global":true}}},"debounce_time":300};
                            </script>
            </div>
						</div>
				</div>
				</div>
				</div>
				</div>
					</div>
				</div>
				</div>
@endsection
