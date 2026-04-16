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
  .cmplz-hidden {
    display: none !important;
  }

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

  #cmplz-cookiebanner-container {
    position: fixed;
    right: 18px;
    bottom: 18px;
    z-index: 999999;
    width: min(528px, calc(100vw - 28px));
  }

  #cmplz-cookiebanner-container .cmplz-cookiebanner {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 18px 42px rgba(0, 0, 0, 0.18);
    color: #173327;
    overflow: hidden;
  }

  #cmplz-cookiebanner-container .cmplz-header,
  #cmplz-cookiebanner-container .cmplz-body,
  #cmplz-cookiebanner-container .cmplz-buttons,
  #cmplz-cookiebanner-container .cmplz-links {
    padding-left: 22px;
    padding-right: 22px;
  }

  #cmplz-cookiebanner-container .cmplz-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding-top: 18px;
    padding-bottom: 10px;
    position: relative;
  }

  #cmplz-cookiebanner-container .cmplz-title {
    font-size: 18px;
    font-weight: 500;
    line-height: 1.2;
    color: #2f2f2f;
    text-align: center;
  }

  #cmplz-cookiebanner-container .cmplz-close {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    color: #202020;
    cursor: pointer;
    position: absolute;
    top: 12px;
    right: 16px;
  }

  #cmplz-cookiebanner-container .cmplz-close svg {
    width: 16px;
    height: 16px;
  }

  #cmplz-cookiebanner-container .cmplz-divider {
    height: 1px;
    background: transparent;
  }

  #cmplz-cookiebanner-container .cmplz-body {
    padding-top: 8px;
    padding-bottom: 0;
  }

  #cmplz-cookiebanner-container .cmplz-message p {
    margin: 0;
    color: #424242;
    font-size: 13px;
    line-height: 1.45;
  }

  #cmplz-cookiebanner-container .cmplz-message strong {
    color: #2c2c2c;
  }

  #cmplz-cookiebanner-container .cmplz-categories {
    margin-top: 18px;
    display: none;
  }

  #cmplz-cookiebanner-container .cmplz-cookiebanner.cmplz-categories-visible .cmplz-categories {
    display: block;
  }

  #cmplz-cookiebanner-container .cmplz-category {
    border-top: 1px solid #edf2ea;
  }

  #cmplz-cookiebanner-container .cmplz-category:first-child {
    border-top: 0;
  }

  #cmplz-cookiebanner-container .cmplz-category summary {
    list-style: none;
    cursor: pointer;
  }

  #cmplz-cookiebanner-container .cmplz-category summary::-webkit-details-marker {
    display: none;
  }

  #cmplz-cookiebanner-container .cmplz-category-header {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto auto;
    align-items: center;
    gap: 10px;
    min-height: 54px;
  }

  #cmplz-cookiebanner-container .cmplz-category-title,
  #cmplz-cookiebanner-container .cmplz-always-active {
    font-size: 15px;
    color: #173327;
  }

  #cmplz-cookiebanner-container .cmplz-always-active {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #5f6f62;
    white-space: nowrap;
  }

  #cmplz-cookiebanner-container .cmplz-banner-checkbox {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  #cmplz-cookiebanner-container .cmplz-consent-checkbox {
    position: absolute;
    inset: 0;
    opacity: 0;
    cursor: pointer;
    margin: 0;
  }

  #cmplz-cookiebanner-container .cmplz-label {
    width: 42px;
    height: 24px;
    border-radius: 999px;
    background: #d6ddd3;
    position: relative;
    display: inline-block;
    margin: 0;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  #cmplz-cookiebanner-container .cmplz-label::after {
    content: '';
    position: absolute;
    top: 3px;
    left: 3px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.16);
    transition: transform 0.2s ease;
  }

  #cmplz-cookiebanner-container .cmplz-consent-checkbox:checked + .cmplz-label {
    background: #0f6a3f;
  }

  #cmplz-cookiebanner-container .cmplz-consent-checkbox:checked + .cmplz-label::after {
    transform: translateX(18px);
  }

  #cmplz-cookiebanner-container .cmplz-consent-checkbox:disabled + .cmplz-label {
    background: #0f6a3f;
    cursor: default;
  }

  #cmplz-cookiebanner-container .cmplz-description {
    padding: 0 0 16px;
  }

  #cmplz-cookiebanner-container .cmplz-description span {
    display: block;
    color: #5f6f62;
    font-size: 13px;
    line-height: 1.6;
  }

  #cmplz-cookiebanner-container .cmplz-icon {
    color: #173327;
    transition: transform 0.2s ease;
  }

  #cmplz-cookiebanner-container details[open] > summary .cmplz-icon {
    transform: rotate(180deg);
  }

  #cmplz-cookiebanner-container .cmplz-buttons {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
    padding-top: 16px;
    padding-bottom: 10px;
  }

  #cmplz-cookiebanner-container .cmplz-btn {
    appearance: none;
    border: 1px solid #2489e8;
    border-radius: 6px;
    padding: 12px 14px;
    background: linear-gradient(90deg, #0d7ef1 0%, #79e1e7 100%);
    color: #0d2240;
    font-size: 13px;
    font-weight: 500;
    line-height: 1.2;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    min-height: 44px;
  }

  #cmplz-cookiebanner-container .cmplz-btn:hover {
    background: linear-gradient(90deg, #0b74de 0%, #67d8e1 100%);
    color: #0d2240;
  }

  #cmplz-cookiebanner-container .cmplz-accept,
  #cmplz-cookiebanner-container .cmplz-save-preferences {
    background: linear-gradient(90deg, #0d7ef1 0%, #79e1e7 100%);
    color: #ffffff;
  }

  #cmplz-cookiebanner-container .cmplz-save-preferences {
    display: none;
  }

  #cmplz-cookiebanner-container .cmplz-cookiebanner.cmplz-categories-visible .cmplz-view-preferences {
    display: none;
  }

  #cmplz-cookiebanner-container .cmplz-cookiebanner.cmplz-categories-visible .cmplz-save-preferences {
    display: inline-block;
  }

  #cmplz-cookiebanner-container .cmplz-documents {
    display: flex;
    gap: 12px;
    justify-content: center;
    padding-top: 0;
    padding-bottom: 22px;
  }

  #cmplz-cookiebanner-container .cmplz-link {
    color: #3b83d6;
    font-size: 12px;
    text-decoration: underline;
  }

  #cmplz-manage-consent {
    position: fixed;
    right: 18px;
    bottom: 18px;
    z-index: 999998;
  }

  #cmplz-manage-consent .cmplz-manage-consent {
    border-radius: 14px 14px 0 0;
    border: 0;
    background: linear-gradient(90deg, #0d7ef1 0%, #79e1e7 100%);
    color: transparent;
    width: 108px;
    height: 26px;
    padding: 0;
    font-size: 0;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
  }

  #cmplz-cookiebanner-container .cmplz-cookiebanner.cmplz-show {
    display: block;
  }

  #cmplz-cookiebanner-container .cmplz-cookiebanner.cmplz-dismissed {
    display: none;
  }

  #cmplz-manage-consent .cmplz-manage-consent.cmplz-show {
    display: inline-block;
  }

  #cmplz-manage-consent .cmplz-manage-consent.cmplz-dismissed {
    display: none;
  }

  .screen-reader-text {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }

  @media (max-width: 767px) {
    #cmplz-cookiebanner-container {
      right: 14px;
      left: 14px;
      bottom: 14px;
      width: auto;
    }

    #cmplz-cookiebanner-container .cmplz-header,
    #cmplz-cookiebanner-container .cmplz-body,
    #cmplz-cookiebanner-container .cmplz-buttons,
    #cmplz-cookiebanner-container .cmplz-links {
      padding-left: 18px;
      padding-right: 18px;
    }

    #cmplz-cookiebanner-container .cmplz-title {
      font-size: 18px;
    }

    #cmplz-cookiebanner-container .cmplz-category-header {
      grid-template-columns: minmax(0, 1fr) auto;
    }

    #cmplz-cookiebanner-container .cmplz-always-active {
      grid-column: 1 / -1;
    }

    #cmplz-cookiebanner-container .cmplz-buttons {
      grid-template-columns: 1fr;
    }

    #cmplz-manage-consent {
      right: 14px;
      bottom: 14px;
    }
  }
</style>
<body class="{{ trim($bodyClass) }}">
    <div id="page" class="hfeed site">
        @include('partials.header')
        {!! $renderedContent !!}
        @include('partials.footer')
    </div>
    @include('partials.cookie-banner')
    @include('partials.scripts')
</body>
</html>
