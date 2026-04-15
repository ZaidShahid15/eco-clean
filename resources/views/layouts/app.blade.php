<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="eco-contact-submit-url" content="{{ route('contact.submit') }}">
    @if (session('status'))
        <meta name="eco-form-status" content="{{ session('status') }}">
    @endif
    @if ($errors->any())
        <meta name="eco-form-error" content="{{ $errors->first('contact_form') ?? $errors->first() }}">
    @endif
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
  .eco-flash__item {
    border-radius: 14px;
    padding: 14px 18px;
    font-size: 15px;
    line-height: 1.6;
    box-shadow: 0 10px 30px rgba(23, 49, 32, 0.08);
    margin-bottom: 18px;
  }

  .eco-flash__item--success {
    background: #e7f6ec;
    border: 1px solid #b8dfc2;
    color: #174b28;
  }

  .eco-flash__item--error {
    background: #fff1f1;
    border: 1px solid #efc3c3;
    color: #8f2020;
  }

  .elementor-element.elementor-element-28a5c95:not(.elementor-motion-effects-element-type-background), .elementor-1179 .elementor-element.elementor-element-28a5c95 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #ffffff !important;
    border: 1px solid #808080;
  }

  .elementor-element.elementor-element-6910057 .elementor-widget-heading .elementor-heading-title,
  .elementor-element.elementor-element-6910057 .elementor-widget-text-editor,
  .elementor-element.elementor-element-6910057 .elementor-widget-text-editor p,
  .elementor-element.elementor-element-6910057 .elementor-widget-text-editor span,
  .elementor-element.elementor-element-6910057 .elementor-widget-text-editor li,
  .elementor-element.elementor-element-6910057 .elementor-widget-text-editor b,
  .elementor-element.elementor-element-6910057 .elementor-widget-text-editor strong,
  .elementor-element.elementor-element-6910057 .elementor-icon-list-text,
  .elementor-element.elementor-element-6910057 .elementor-icon-list-icon i,
  .elementor-element.elementor-element-6910057 .elementor-icon-list-icon svg,
  .elementor-element.elementor-element-6910057 .e-rating,
  .elementor-element.elementor-element-6910057 .e-rating-wrapper,
  .elementor-element.elementor-element-6910057 .e-icon-wrapper,
  .elementor-element.elementor-element-8b56591 .elementor-widget-heading .elementor-heading-title,
  .elementor-element.elementor-element-8b56591 .elementor-widget-text-editor,
  .elementor-element.elementor-element-8b56591 .elementor-widget-text-editor p,
  .elementor-element.elementor-element-8b56591 .elementor-widget-text-editor span,
  .elementor-element.elementor-element-8b56591 .elementor-widget-text-editor li,
  .elementor-element.elementor-element-8b56591 .elementor-widget-text-editor b,
  .elementor-element.elementor-element-8b56591 .elementor-widget-text-editor strong,
  .elementor-element.elementor-element-8b56591 .elementor-icon-list-text,
  .elementor-element.elementor-element-8b56591 .elementor-icon-list-icon i,
  .elementor-element.elementor-element-8b56591 .elementor-icon-list-icon svg,
  .elementor-element.elementor-element-8b56591 .e-rating,
  .elementor-element.elementor-element-8b56591 .e-rating-wrapper,
  .elementor-element.elementor-element-8b56591 .e-icon-wrapper,
  .elementor-element.elementor-element-de56b37 .elementor-widget-heading .elementor-heading-title,
  .elementor-element.elementor-element-de56b37 .elementor-widget-text-editor,
  .elementor-element.elementor-element-de56b37 .elementor-widget-text-editor p,
  .elementor-element.elementor-element-de56b37 .elementor-widget-text-editor span,
  .elementor-element.elementor-element-de56b37 .elementor-widget-text-editor li,
  .elementor-element.elementor-element-de56b37 .elementor-widget-text-editor b,
  .elementor-element.elementor-element-de56b37 .elementor-widget-text-editor strong,
  .elementor-element.elementor-element-de56b37 .elementor-icon-list-text,
  .elementor-element.elementor-element-de56b37 .elementor-icon-list-icon i,
  .elementor-element.elementor-element-de56b37 .elementor-icon-list-icon svg,
  .elementor-element.elementor-element-de56b37 .e-rating,
  .elementor-element.elementor-element-de56b37 .e-rating-wrapper,
  .elementor-element.elementor-element-de56b37 .e-icon-wrapper {
    color: #ffffff !important;
    fill: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
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
