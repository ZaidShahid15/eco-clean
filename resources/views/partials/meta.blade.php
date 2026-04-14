<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'ECO Clean')</title>
<meta name="description" content="@yield('meta_description', '')">
@if(trim($__env->yieldContent('robots')) !== '')
<meta name="robots" content="@yield('robots')">
@endif
@php
    $canonicalValue = trim($__env->yieldContent('canonical'));
    $canonicalUrl = $canonicalValue === '' ? url()->current() : (str_starts_with($canonicalValue, 'http') ? $canonicalValue : url($canonicalValue));
    $ogImageValue = trim($__env->yieldContent('og_image'));
    $ogImageUrl = $ogImageValue === '' ? '' : (str_starts_with($ogImageValue, 'http') ? $ogImageValue : asset(ltrim($ogImageValue, '/')));
@endphp
<link rel="canonical" href="{{ $canonicalUrl }}">
<meta property="og:type" content="website">
<meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title')))">
<meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description')))">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:site_name" content="ECO Clean">
@if($ogImageUrl !== '')
<meta property="og:image" content="{{ $ogImageUrl }}">
@endif
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('title')))">
<meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('meta_description')))">
@if($ogImageUrl !== '')
<meta name="twitter:image" content="{{ $ogImageUrl }}">
@endif
<link rel="icon" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2024/11/cropped-eco-clean-high-resolution-logo-4-32x32.png') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widget.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/fluentform/assets/css/fluent-forms-public.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/fluentform/assets/css/fluentform-public-default.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/complianz-gdpr-premium/assets/css/cookieblocker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/custom-frontend.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-10.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/twinkle-core/assets/css/twinkle-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/custom-pro-widget-slides.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-image.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-heading.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-rating.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/custom-widget-icon-list.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-divider.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-532.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1504.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-713.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/animate/custom-animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/jarallax/jarallax.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/odometer/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/conult-icons/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/reey-font/stylesheet.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/vendors/nice-select/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor-pro/assets/css/widget-blockquote.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor-pro/assets/css/widget-mega-menu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/dmsans.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/manrope.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/intertight.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/nunitosans.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/poppins.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1953.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/custom-widget-icon-box.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/roboto.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-2853.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-535.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/adlamdisplay.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/conditionals/shapes.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1748.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor-pro/assets/css/widget-table-of-contents.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1298.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-854.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/plugins/elementor/assets/css/widget-google_maps.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-56.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/google-fonts/css/raleway.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-926.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1897.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1740.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1708.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1703.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1693.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1671.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1827.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1819.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1814.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1310.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1286.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1277.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1937.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1902.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1907.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1912.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1917.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1922.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1802.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1789.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1676.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1760.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1657.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1647.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1640.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-872.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1210.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1205.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1184.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1192.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1179.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1174.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1169.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1139.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1156.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1161.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1698.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1858.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1892.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1883.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1878.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1873.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1868.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1829.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1804.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1787.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1779.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1758.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1753.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1266.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1197.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-includes/css/dist/block-library/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-core.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-unit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/themes/washup/assets/css/washup-responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/clone-overrides.css') }}">
<style>
    .elementor-element-fa04447 {
        padding: 28px 22px 24px !important;
        border-radius: 28px !important;
        background: rgba(255, 255, 255, 0.9) !important;
        box-shadow: 0 24px 60px rgba(15, 39, 77, 0.22) !important;
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
    }

    .elementor-element-fa04447 > .elementor-widget-heading {
        margin-bottom: 18px !important;
    }

    .elementor-element-fa04447 > .elementor-widget-heading .elementor-heading-title {
        margin: 0 !important;
        color: #1f4f95 !important;
        font-size: 28px !important;
        font-weight: 800 !important;
        line-height: 1.15 !important;
        text-align: center !important;
        letter-spacing: -0.02em;
    }

    .elementor-element-fa04447 .elementor-widget-shortcode,
    .elementor-element-fa04447 .elementor-widget-container,
    .elementor-element-fa04447 .elementor-shortcode,
    .elementor-element-fa04447 .fluentform_wrapper_4,
    .elementor-element-fa04447 .fluentform_wrapper_4 form,
    .elementor-element-fa04447 .fluentform_wrapper_4 fieldset {
        width: 100%;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4.ffs_default_wrap {
        margin: 0 !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-group {
        margin-bottom: 18px !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-t-container {
        gap: 16px;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-t-cell {
        min-width: 0;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff_columns_total_2 .ff-t-column-1,
    .elementor-element-fa04447 .fluentform_wrapper_4 .ff_columns_total_2 .ff-t-column-2 {
        flex: 1 1 calc(50% - 8px) !important;
        width: calc(50% - 8px) !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-input--label,
    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-is-error .text-danger,
    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-errors-in-stack {
        color: #5d6c82 !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-form-control,
    .elementor-element-fa04447 .fluentform_wrapper_4 select.ff-el-form-control,
    .elementor-element-fa04447 .fluentform_wrapper_4 textarea.ff-el-form-control {
        min-height: 60px !important;
        padding: 16px 18px !important;
        border: 1px solid #ced7e5 !important;
        border-radius: 10px !important;
        background: rgba(255, 255, 255, 0.98) !important;
        box-shadow: inset 0 1px 2px rgba(17, 38, 69, 0.04) !important;
        color: #5d6c82 !important;
        font-size: 15px !important;
        font-weight: 500 !important;
        line-height: 1.4 !important;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 select.ff-el-form-control {
        padding-right: 42px !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 textarea.ff-el-form-control {
        min-height: 114px !important;
        resize: vertical;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-form-control::placeholder {
        color: #5d6c82 !important;
        opacity: 1;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-form-control:focus,
    .elementor-element-fa04447 .fluentform_wrapper_4 select.ff-el-form-control:focus,
    .elementor-element-fa04447 .fluentform_wrapper_4 textarea.ff-el-form-control:focus {
        border-color: #2a61ad !important;
        box-shadow: 0 0 0 3px rgba(42, 97, 173, 0.12) !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff_submit_btn_wrapper {
        margin: 2px 0 10px !important;
        text-align: center !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-btn.ff-btn-submit {
        min-width: 194px !important;
        height: 42px !important;
        padding: 0 28px !important;
        border: 0 !important;
        border-radius: 10px !important;
        background: linear-gradient(180deg, #2465b8 0%, #1953a0 100%) !important;
        box-shadow: 0 10px 22px rgba(28, 86, 163, 0.28) !important;
        color: #ffffff !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        line-height: 42px !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-btn.ff-btn-submit:hover,
    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-btn.ff-btn-submit:focus {
        transform: translateY(-1px);
        background: linear-gradient(180deg, #2b6fc6 0%, #1d5aab 100%) !important;
        color: #ffffff !important;
    }

    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-message-success,
    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-errors-in-stack,
    .elementor-element-fa04447 .fluentform_wrapper_4 .ff-form-success {
        margin-top: 8px !important;
        text-align: center;
        font-size: 12px !important;
    }

    @media (max-width: 767px) {
        .elementor-element-fa04447 {
            padding: 24px 16px 20px !important;
            border-radius: 24px !important;
        }

        .elementor-element-fa04447 > .elementor-widget-heading .elementor-heading-title {
            font-size: 24px !important;
        }

        .elementor-element-fa04447 .fluentform_wrapper_4 .ff_columns_total_2 .ff-t-column-1,
        .elementor-element-fa04447 .fluentform_wrapper_4 .ff_columns_total_2 .ff-t-column-2 {
            flex-basis: 100% !important;
            width: 100% !important;
        }

        .elementor-element-fa04447 .fluentform_wrapper_4 .ff-el-form-control,
        .elementor-element-fa04447 .fluentform_wrapper_4 select.ff-el-form-control,
        .elementor-element-fa04447 .fluentform_wrapper_4 textarea.ff-el-form-control {
            min-height: 56px !important;
            padding: 14px 16px !important;
        }
    }
</style>
@yield('page_styles')
@yield('schema')
