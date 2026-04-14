<!DOCTYPE html>
<html lang="de">
<head>
    @include('partials.meta')
</head>
@php
    $defaultBodyClass = 'custom-background wp-custom-logo wp-embed-responsive wp-theme-washup ehf-header ehf-footer ehf-template-washup ehf-stylesheet-washup no-sidebar elementor-default elementor-template-full-width';
    $renderedContent = $__env->yieldContent('content');
    $bodyClass = trim($__env->yieldContent('body_class')) ?: $defaultBodyClass;

    if (preg_match('/data-elementor-id="(\d+)"/', $renderedContent, $matches)) {
        $elementorBodyClasses = ' elementor-page elementor-page-' . $matches[1];

        if (! str_contains($bodyClass, 'elementor-page-' . $matches[1])) {
            $bodyClass .= $elementorBodyClasses;
        }
    }
@endphp
<body class="{{ trim($bodyClass) }}">
    <div id="page" class="hfeed site">
        @include('partials.header')
        {!! $renderedContent !!}
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
