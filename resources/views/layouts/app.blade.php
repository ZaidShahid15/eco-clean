<!DOCTYPE html>
<html lang="de">
<head>
    @include('partials.meta')
</head>
<body class="@yield('body_class', 'custom-background wp-custom-logo wp-embed-responsive wp-theme-washup ehf-header ehf-footer ehf-template-washup ehf-stylesheet-washup no-sidebar elementor-default elementor-template-full-width')">
    <div id="page" class="hfeed site">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
