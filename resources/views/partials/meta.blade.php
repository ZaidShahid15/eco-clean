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
    .elementor-element-fc58b73 > .e-con-inner {
        align-items: center !important;
        gap: 34px !important;
    }

    .elementor-element-fc58b73 .elementor-element-383b77b {
        max-width: 560px;
        padding: 6px 0 !important;
    }

    .elementor-element-fc58b73 .elementor-element-383b77b > .elementor-widget-heading:first-child {
        margin-bottom: 18px !important;
    }

    .elementor-element-fc58b73 .elementor-element-383b77b > .elementor-widget-heading:first-child .elementor-heading-title {
        margin: 0 !important;
        /* max-width: 11ch; */
        color: #ffffff !important;
        font-size: 45px !important;
        font-weight: 900 !important;
        line-height: 1 !important;
        letter-spacing: 0 !important;
        text-wrap: balance;
        text-shadow: 0 4px 0 rgba(249, 146, 92, 0.95);
    }

    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-heading-title{
        color: #ffffff !important;
    }

    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor, .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor p, .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor span, .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor li, .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor strong, .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor b{
        color: #ffffff !important;
    }

    .elementor-element-fc58b73 .elementor-element-383b77b > .elementor-widget-heading:nth-child(2) {
        margin-bottom: 28px !important;
    }

    .elementor-element-fc58b73 .elementor-element-383b77b > .elementor-widget-heading:nth-child(2) .elementor-heading-title {
        margin: 0 !important;
        /* max-width: 19ch; */
        color: #ffffff !important;
        font-size: clamp(16px, 1.2vw, 20px) !important;
        font-weight: 500 !important;
        line-height: 1.42 !important;
        text-shadow: 0 2px 14px rgba(4, 17, 39, 0.32);
    }

    .elementor-element-fc58b73 .elementor-element-48ff1c5,
    .elementor-element-fc58b73 .elementor-element-85c8c01 {
        width: auto !important;
    }

    .elementor-element-fc58b73 .elementor-element-48ff1c5 .elementor-widget-container,
    .elementor-element-fc58b73 .elementor-element-85c8c01 .elementor-widget-container,
    .elementor-element-fc58b73 .elementor-element-70fb267 .elementor-widget-container {
        width: fit-content;
    }

    .elementor-element-fc58b73 .service-details__btn,
    .elementor-element-fc58b73 .thm-btn.service-details__btn {
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        min-width: 134px !important;
        min-height: 75px !important;
        padding: 24px 26px !important;
        border: 1px solid rgba(140, 181, 235, 0.38) !important;
        border-radius: 6px !important;
        background: linear-gradient(180deg, #2869bd 0%, #1c529a 100%) !important;
        box-shadow: 0 18px 36px rgba(12, 40, 79, 0.24) !important;
        color: #9ebef0 !important;
        font-size: 16px !important;
        font-weight: 700 !important;
        letter-spacing: 0 !important;
        line-height: 1 !important;
        text-transform: uppercase !important;
    }

    .elementor-element-fc58b73 .service-details__btn:hover,
    .elementor-element-fc58b73 .service-details__btn:focus {
        color: #d9e7ff !important;
        background: linear-gradient(180deg, #2f73cb 0%, #205ba8 100%) !important;
        transform: translateY(-1px);
    }

    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447,
    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447:not(.elementor-motion-effects-element-type-background),
    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        padding: 28px 22px 24px !important;
        border-radius: 28px !important;
        background: #ffffff !important;
        background-color: #ffffff !important;
        box-shadow: 0 24px 60px rgba(15, 39, 77, 0.22) !important;
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
    }

    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 .elementor-widget-container,
    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 .elementor-shortcode,
    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 .fluentform_wrapper_4,
    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 form,
    body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 fieldset {
        background: transparent !important;
        background-color: transparent !important;
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
        /* width: calc(50% - 8px) !important; */
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

    .elementor-element-c41d620,
    .elementor-element-e3143dc,
    .elementor-element-d21ad8c,
    .elementor-element-b67ad0f,
    .elementor-element-d4896b0 {
        background: #004991 !important;
    }

    .elementor-element-c41d620 .elementor-heading-title,
    .elementor-element-c41d620 h1,
    .elementor-element-c41d620 h2,
    .elementor-element-c41d620 h3,
    .elementor-element-c41d620 h4,
    .elementor-element-c41d620 h5,
    .elementor-element-c41d620 h6,
    .elementor-element-c41d620 .elementor-widget-text-editor,
    .elementor-element-c41d620 .elementor-widget-text-editor p,
    .elementor-element-c41d620 .elementor-widget-text-editor li,
    .elementor-element-c41d620 .elementor-widget-text-editor span,
    .elementor-element-c41d620 .elementor-widget-text-editor strong,
    .elementor-element-c41d620 .elementor-widget-text-editor b,
    .elementor-element-c41d620 li,
    .elementor-element-c41d620 li span,
    .elementor-element-c41d620 li strong,
    .elementor-element-c41d620 .elementor-icon-list-text,
    .elementor-element-c41d620 .elementor-icon-list-item > a,
    .elementor-element-c41d620 .elementor-icon-list-icon i,
    .elementor-element-c41d620 .elementor-icon-list-icon svg,
    .elementor-element-e3143dc .elementor-heading-title,
    .elementor-element-e3143dc h1,
    .elementor-element-e3143dc h2,
    .elementor-element-e3143dc h3,
    .elementor-element-e3143dc h4,
    .elementor-element-e3143dc h5,
    .elementor-element-e3143dc h6,
    .elementor-element-e3143dc .elementor-widget-text-editor,
    .elementor-element-e3143dc .elementor-widget-text-editor p,
    .elementor-element-e3143dc .elementor-widget-text-editor li,
    .elementor-element-e3143dc .elementor-widget-text-editor span,
    .elementor-element-e3143dc .elementor-widget-text-editor strong,
    .elementor-element-e3143dc .elementor-widget-text-editor b,
    .elementor-element-e3143dc li,
    .elementor-element-e3143dc li span,
    .elementor-element-e3143dc li strong,
    .elementor-element-e3143dc .elementor-icon-list-text,
    .elementor-element-e3143dc .elementor-icon-list-item > a,
    .elementor-element-e3143dc .elementor-icon-list-icon i,
    .elementor-element-e3143dc .elementor-icon-list-icon svg,
    .elementor-element-d21ad8c .elementor-heading-title,
    .elementor-element-d21ad8c h1,
    .elementor-element-d21ad8c h2,
    .elementor-element-d21ad8c h3,
    .elementor-element-d21ad8c h4,
    .elementor-element-d21ad8c h5,
    .elementor-element-d21ad8c h6,
    .elementor-element-d21ad8c .elementor-widget-text-editor,
    .elementor-element-d21ad8c .elementor-widget-text-editor p,
    .elementor-element-d21ad8c .elementor-widget-text-editor li,
    .elementor-element-d21ad8c .elementor-widget-text-editor span,
    .elementor-element-d21ad8c .elementor-widget-text-editor strong,
    .elementor-element-d21ad8c .elementor-widget-text-editor b,
    .elementor-element-d21ad8c li,
    .elementor-element-d21ad8c li span,
    .elementor-element-d21ad8c li strong,
    .elementor-element-d21ad8c .elementor-icon-list-text,
    .elementor-element-d21ad8c .elementor-icon-list-item > a,
    .elementor-element-d21ad8c .elementor-icon-list-icon i,
    .elementor-element-d21ad8c .elementor-icon-list-icon svg,
    .elementor-element-b67ad0f .elementor-heading-title,
    .elementor-element-b67ad0f h1,
    .elementor-element-b67ad0f h2,
    .elementor-element-b67ad0f h3,
    .elementor-element-b67ad0f h4,
    .elementor-element-b67ad0f h5,
    .elementor-element-b67ad0f h6,
    .elementor-element-b67ad0f .elementor-widget-text-editor,
    .elementor-element-b67ad0f .elementor-widget-text-editor p,
    .elementor-element-b67ad0f .elementor-widget-text-editor li,
    .elementor-element-b67ad0f .elementor-widget-text-editor span,
    .elementor-element-b67ad0f .elementor-widget-text-editor strong,
    .elementor-element-b67ad0f .elementor-widget-text-editor b,
    .elementor-element-b67ad0f li,
    .elementor-element-b67ad0f li span,
    .elementor-element-b67ad0f li strong,
    .elementor-element-b67ad0f .elementor-icon-list-text,
    .elementor-element-b67ad0f .elementor-icon-list-item > a,
    .elementor-element-b67ad0f .elementor-icon-list-icon i,
    .elementor-element-b67ad0f .elementor-icon-list-icon svg,
    .elementor-element-d4896b0 .elementor-heading-title,
    .elementor-element-d4896b0 h1,
    .elementor-element-d4896b0 h2,
    .elementor-element-d4896b0 h3,
    .elementor-element-d4896b0 h4,
    .elementor-element-d4896b0 h5,
    .elementor-element-d4896b0 h6,
    .elementor-element-d4896b0 .elementor-widget-text-editor,
    .elementor-element-d4896b0 .elementor-widget-text-editor p,
    .elementor-element-d4896b0 .elementor-widget-text-editor li,
    .elementor-element-d4896b0 .elementor-widget-text-editor span,
    .elementor-element-d4896b0 .elementor-widget-text-editor strong,
    .elementor-element-d4896b0 .elementor-widget-text-editor b,
    .elementor-element-d4896b0 li,
    .elementor-element-d4896b0 li span,
    .elementor-element-d4896b0 li strong,
    .elementor-element-d4896b0 .elementor-icon-list-text,
    .elementor-element-d4896b0 .elementor-icon-list-item > a,
    .elementor-element-d4896b0 .elementor-icon-list-icon i,
    .elementor-element-d4896b0 .elementor-icon-list-icon svg {
        color: #ffffff !important;
        fill: #ffffff !important;
    }

    .elementor-element-b67ad0f,
    .elementor-element-b67ad0f > .e-con-inner,
    .elementor-element-d4896b0,
    .elementor-element-d4896b0 > .e-con-inner {
        background-color: #004991 !important;
    }

    .elementor-element-b67ad0f .service-details__btn,
    .elementor-element-b67ad0f .thm-btn.service-details__btn,
    .elementor-element-d4896b0 .service-details__btn,
    .elementor-element-d4896b0 .thm-btn.service-details__btn {
        color: #ffffff !important;
        border-color: #ffffff !important;
    }

    .elementor-element-b67ad0f .elementor-heading-title,
    .elementor-element-b67ad0f .elementor-widget-text-editor,
    .elementor-element-b67ad0f .elementor-widget-text-editor p,
    .elementor-element-b67ad0f .elementor-widget-text-editor span,
    .elementor-element-b67ad0f .elementor-widget-text-editor strong,
    .elementor-element-b67ad0f .elementor-widget-text-editor b,
    .elementor-element-b67ad0f .elementor-widget-text-editor a,
    .elementor-element-d4896b0 .elementor-heading-title,
    .elementor-element-d4896b0 .elementor-widget-text-editor,
    .elementor-element-d4896b0 .elementor-widget-text-editor p,
    .elementor-element-d4896b0 .elementor-widget-text-editor span,
    .elementor-element-d4896b0 .elementor-widget-text-editor strong,
    .elementor-element-d4896b0 .elementor-widget-text-editor b,
    .elementor-element-d4896b0 .elementor-widget-text-editor a {
        color: #ffffff !important;
    }

    .elementor-element-b67ad0f .elementor-widget-heading .elementor-heading-title,
    .elementor-element-b67ad0f .elementor-widget-heading .elementor-heading-title span,
    .elementor-element-b67ad0f .elementor-widget-text-editor,
    .elementor-element-b67ad0f .elementor-widget-text-editor p,
    .elementor-element-b67ad0f .elementor-widget-text-editor p span,
    .elementor-element-b67ad0f .elementor-widget-text-editor strong,
    .elementor-element-b67ad0f .elementor-widget-text-editor b,
    .elementor-element-d4896b0 .elementor-widget-heading .elementor-heading-title,
    .elementor-element-d4896b0 .elementor-widget-heading .elementor-heading-title span,
    .elementor-element-d4896b0 .elementor-widget-text-editor,
    .elementor-element-d4896b0 .elementor-widget-text-editor p,
    .elementor-element-d4896b0 .elementor-widget-text-editor p span,
    .elementor-element-d4896b0 .elementor-widget-text-editor strong,
    .elementor-element-d4896b0 .elementor-widget-text-editor b {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-element-b67ad0f .service-details__btn:hover,
    .elementor-element-b67ad0f .service-details__btn:focus,
    .elementor-element-d4896b0 .service-details__btn:hover,
    .elementor-element-d4896b0 .service-details__btn:focus {
        color: #ffffff !important;
    }

    .blog-details .postbox__item,
    .blog-details .blog-details__content,
    .blog-details .postbox__text,
    .blog-details .postbox__text p,
    .blog-details .postbox__text li,
    .blog-details .postbox__text span,
    .blog-details .postbox__text strong,
    .blog-details .postbox__text b,
    .blog-details .postbox__text a,
    .blog-details .blog-details__meta li,
    .blog-details .blog-details__meta li a,
    .blog-details .blog-details__bottom,
    .blog-details .blog-details__bottom p,
    .blog-details .blog-details__bottom a {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .blog-details .postbox__text h1,
    .blog-details .postbox__text h2,
    .blog-details .postbox__text h3,
    .blog-details .postbox__text h4,
    .blog-details .postbox__text h5,
    .blog-details .postbox__text h6,
    .blog-details .blog-details__content h1,
    .blog-details .blog-details__content h2,
    .blog-details .blog-details__content h3,
    .blog-details .blog-details__content h4,
    .blog-details .blog-details__content h5,
    .blog-details .blog-details__content h6 {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .blog-details .postbox__text ul,
    .blog-details .postbox__text ol {
        color: #ffffff !important;
    }

    .blog-details .blog-details__left #respond,
    .blog-details .blog-details__left #respond .comment-form,
    .blog-details .blog-details__left #respond label,
    .blog-details .blog-details__left #respond p,
    .blog-details .blog-details__left #respond span,
    .blog-details .blog-details__left #respond a,
    .blog-details .blog-details__left #respond input,
    .blog-details .blog-details__left #respond textarea,
    .blog-details .blog-details__left #respond input::placeholder,
    .blog-details .blog-details__left #respond textarea::placeholder,
    .blog-details .blog-details__left #respond .tp-form-control,
    .blog-details .blog-details__left #respond .comment-form-cookies-consent,
    .blog-details .blog-details__left #respond .comment-form-cookies-consent label,
    .blog-details .blog-details__left #respond .comment-notes,
    .blog-details .blog-details__left #respond .comment-notes span {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .blog-details .blog-details__left #respond input,
    .blog-details .blog-details__left #respond textarea,
    .blog-details .blog-details__left #respond .tp-form-control {
        border-color: rgba(255, 255, 255, 0.55) !important;
        background: rgba(255, 255, 255, 0.08) !important;
        color: #ffffff !important;
        caret-color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .blog-details .blog-details__left #respond input::placeholder,
    .blog-details .blog-details__left #respond textarea::placeholder,
    .blog-details .blog-details__left #respond .tp-form-control::placeholder,
    .blog-details .blog-details__left #respond input::-webkit-input-placeholder,
    .blog-details .blog-details__left #respond textarea::-webkit-input-placeholder,
    .blog-details .blog-details__left #respond .tp-form-control::-webkit-input-placeholder {
        color: #ffffff !important;
        opacity: 1 !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .blog-details .blog-details__left #respond input:hover,
    .blog-details .blog-details__left #respond input:focus,
    .blog-details .blog-details__left #respond textarea:hover,
    .blog-details .blog-details__left #respond textarea:focus,
    .blog-details .blog-details__left #respond .tp-form-control:hover,
    .blog-details .blog-details__left #respond .tp-form-control:focus {
        color: #ffffff !important;
        border-color: #ffffff !important;
    }

    .blog-details .blog-details__left #respond .tp-btn,
    .blog-details .blog-details__left #respond .tp-btn span,
    .blog-details .blog-details__left #respond .comment-reply-link {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .blog-details .blog-details__left #respond .tp-btn:hover,
    .blog-details .blog-details__left #respond .tp-btn:hover span,
    .blog-details .blog-details__left #respond .comment-reply-link:hover {
        color: #dbeafe !important;
        -webkit-text-fill-color: #dbeafe !important;
    }

    .blog-details .sidebar,
    .blog-details .sidebar__single,
    .blog-details .sidebar__title,
    .blog-details .sidebar__single p,
    .blog-details .sidebar__single li,
    .blog-details .sidebar__single span,
    .blog-details .sidebar__single a,
    .blog-details .sidebar__post-content-box h3,
    .blog-details .sidebar__post-content-box h3 a,
    .blog-details .tagcloud a,
    .blog-details .comment-one__title,
    .blog-details .comment-reply-title,
    .blog-details .comments-text,
    .blog-details .comments-text p,
    .blog-details .comments-text span,
    .blog-details .comments-text a,
    .blog-details .comment-notes,
    .blog-details .comment-notes span,
    .blog-details .comment-form-cookies-consent,
    .blog-details .comment-form-cookies-consent label,
    .blog-details #reply-title,
    .blog-details .blog-coment-title h3,
    .blog-details .sidebar__suppot-title {
        color: #1f2937 !important;
        -webkit-text-fill-color: #1f2937 !important;
    }

    .blog-details .sidebar input,
    .blog-details .sidebar textarea,
    .blog-details .sidebar input::placeholder,
    .blog-details .sidebar textarea::placeholder,
    .blog-details #respond:not(.postbox__item #respond) input,
    .blog-details #respond:not(.postbox__item #respond) textarea,
    .blog-details #respond:not(.postbox__item #respond) input::placeholder,
    .blog-details #respond:not(.postbox__item #respond) textarea::placeholder {
        color: #1f2937 !important;
        -webkit-text-fill-color: #1f2937 !important;
    }

    .blog-details .sidebar a:hover,
    .blog-details .sidebar__single a:hover,
    .blog-details .sidebar__post-content-box h3 a:hover,
    .blog-details .tagcloud a:hover,
    .blog-details .comments-text a:hover {
        color: #004991 !important;
        -webkit-text-fill-color: #004991 !important;
    }

    .elementor-page-56 .elementor-element.elementor-element-37650664 .elementor-container {
        justify-content: center;
    }

    .elementor-page-56 .elementor-element.elementor-element-51d19e43,
    .elementor-page-56 .elementor-element.elementor-element-51d19e43 > .elementor-widget-wrap {
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        text-align: center !important;
        align-items: center !important;
    }

    .elementor-page-56 .elementor-element.elementor-element-28ed8cc0 {
        display: none !important;
    }

    .elementor-56 .elementor-element.elementor-element-71ed6640 {
        margin-top: 52px !important;
        margin-bottom: 50px !important;
    }

    /* .elementor-926 .elementor-element.elementor-element-d6748a0 {
        padding: 12px 0 !important;
    }

    .elementor-926 .elementor-element.elementor-element-d6748a0:not(.elementor-motion-effects-element-type-background),
    .elementor-926 .elementor-element.elementor-element-d6748a0 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        padding: 12px 0 !important;
    } */

    .elementor-page-56 .elementor-element.elementor-element-3f4f4985,
    .elementor-page-56 .elementor-element.elementor-element-6d74d430,
    .elementor-page-56 .elementor-element.elementor-element-739e1dea,
    .elementor-page-56 .elementor-element.elementor-element-b2ccfde {
        width: 100%;
    }

    .elementor-page-56 .elementor-element.elementor-element-3f4f4985 .elementor-heading-title,
    .elementor-page-56 .elementor-element.elementor-element-6d74d430 .elementor-heading-title,
    .elementor-page-56 .elementor-element.elementor-element-739e1dea .elementor-heading-title {
        text-align: center !important;
    }

    .elementor-page-56 .elementor-element.elementor-element-b2ccfde .elementor-icon-list-items {
        display: inline-flex;
        flex-direction: column;
        align-items: flex-start;
        width: fit-content;
        margin: 0 auto;
    }

    .elementor-page-56 .elementor-element.elementor-element-b2ccfde .elementor-icon-list-item {
        justify-content: flex-start;
        width: 100%;
    }

    .elementor-page-56 .elementor-element.elementor-element-b2ccfde .elementor-icon-list-item > a,
    .elementor-page-56 .elementor-element.elementor-element-b2ccfde .elementor-icon-list-text {
        text-align: left !important;
    }

    @media (max-width: 767px) {
        .elementor-926 .elementor-element.elementor-element-d6748a0 {
            padding: 0 !important;
        }

        .elementor-element-fc58b73 > .e-con-inner {
            gap: 24px !important;
        }

        .elementor-element-fc58b73 .elementor-element-383b77b > .elementor-widget-heading:first-child .elementor-heading-title {
            max-width: none;
            font-size: clamp(34px, 10vw, 48px) !important;
        }

        .elementor-element-fc58b73 .elementor-element-383b77b > .elementor-widget-heading:nth-child(2) .elementor-heading-title {
            max-width: none;
            font-size: 16px !important;
        }

        .elementor-element-fc58b73 .service-details__btn,
        .elementor-element-fc58b73 .thm-btn.service-details__btn {
            min-width: 122px !important;
            min-height: 96px !important;
            padding: 20px 22px !important;
        }

        body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447,
        body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447:not(.elementor-motion-effects-element-type-background),
        body .elementor[class*="elementor-"] .elementor-element.elementor-element-fa04447 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
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

        .elementor-element.elementor-element-383b77b.e-con-full.e-flex.e-con.e-child{
            padding: 0 10px !important;
        }

        .e-con-inner{
            padding: 35px 15px !important;
        }
    }
</style>
@yield('page_styles')
@yield('schema')
