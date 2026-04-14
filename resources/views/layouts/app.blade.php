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
<style>
  .elementor-element.elementor-element-28a5c95:not(.elementor-motion-effects-element-type-background), .elementor-1179 .elementor-element.elementor-element-28a5c95 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #ffffff !important;
    border: 1px solid #808080;
}

.elementor-element:not(.elementor-element-fc58b73):not(.elementor-element-7604e8f):not(.elementor-element-d89969f) .elementor-heading-title {
    color: white !important;
}

.elementor-element:not(.elementor-element-fc58b73):not(.elementor-element-7604e8f):not(.elementor-element-d89969f) .elementor-widget-text-editor b {
    color: white !important;
}
</style>
<body class="{{ trim($bodyClass) }}">
    <div id="page" class="hfeed site">
        @include('partials.header')
        {!! $renderedContent !!}
        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
