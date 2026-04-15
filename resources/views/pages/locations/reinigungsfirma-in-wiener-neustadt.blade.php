@extends('layouts.app')

@section('title', 'Die beste Reinigungsfirma Wiener Neustadt für Ihre Bedürfnisse')
@section('meta_description', 'Finden Sie die beste Reinigungsfirma in Wiener Neustadt, die auf Ihre Bedürfnisse zugeschnitten ist. Lesen Sie unseren Artikel für hilfreiche Tipps!')
@section('canonical', '/reinigungsfirma-in-wiener-neustadt/')
@section('robots', 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large')
@section('og_title', 'Die beste Reinigungsfirma Wiener Neustadt für Ihre Bedürfnisse')
@section('og_description', 'Finden Sie die beste Reinigungsfirma in Wiener Neustadt, die auf Ihre Bedürfnisse zugeschnitten ist. Lesen Sie unseren Artikel für hilfreiche Tipps!')
@section('og_image', '/assets/mirror/eco-clean.at/wp-content/uploads/2023/10/service-details-img1.jpg')

@section('twitter_title', 'Die beste Reinigungsfirma Wiener Neustadt für Ihre Bedürfnisse')
@section('twitter_description', 'Finden Sie die beste Reinigungsfirma in Wiener Neustadt, die auf Ihre Bedürfnisse zugeschnitten ist. Lesen Sie unseren Artikel für hilfreiche Tipps!')

@section('body_class', 'wp-singular page-template page-template-elementor_header_footer page page-id-1671 custom-background wp-custom-logo wp-embed-responsive wp-theme-washup ehf-header ehf-footer ehf-template-washup ehf-stylesheet-washup no-sidebar elementor-default elementor-template-full-width elementor-kit-10 elementor-page elementor-page-1671')

@section('page_styles')
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1671.css') }}">
<link rel="stylesheet" href="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/elementor/css/post-1953.css') }}">
@endsection

@section('schema')
@endsection

@section('content')
<style>
    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-heading-title {
        color: #5f5f5f !important;
    }

    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor,
    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor p,
    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor span,
    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor li,
    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor strong,
    .elementor-1671 > .elementor-element:nth-of-type(n+4) .elementor-widget-text-editor b {
        color: #6b6b6b !important;
    }
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-heading-title {
        color: #5f5f5f !important;
        -webkit-text-fill-color: #5f5f5f !important;
    }
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-widget-text-editor,
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-widget-text-editor p,
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-widget-text-editor span,
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-widget-text-editor li,
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-widget-text-editor strong,
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-widget-text-editor b,
    .elementor-1671 > .elementor-element:nth-of-type(n+4):not(.elementor-element-d21ad8c) .elementor-icon-list-text {
        color: #6b6b6b !important;
        -webkit-text-fill-color: #6b6b6b !important;
    }
    .elementor-1671 .elementor-element-c41d620 .elementor-heading-title,
    .elementor-1671 .elementor-element-c41d620 .elementor-widget-text-editor,
    .elementor-1671 .elementor-element-c41d620 .elementor-widget-text-editor p,
    .elementor-1671 .elementor-element-c41d620 .elementor-widget-text-editor span,
    .elementor-1671 .elementor-element-c41d620 .elementor-widget-text-editor strong,
    .elementor-1671 .elementor-element-c41d620 .elementor-widget-text-editor b,
    .elementor-1671 .elementor-element-c41d620 .elementor-widget-text-editor li,
    .elementor-1671 .elementor-element-c41d620 .elementor-icon-list-text,
    .elementor-1671 .elementor-element-c41d620 .elementor-icon-list-icon i,
    .elementor-1671 .elementor-element-c41d620 .elementor-icon-list-icon svg,
    .elementor-1671 .elementor-element-40fb328 .elementor-heading-title,
    .elementor-1671 .elementor-element-40fb328 .elementor-widget-text-editor,
    .elementor-1671 .elementor-element-40fb328 .elementor-widget-text-editor p,
    .elementor-1671 .elementor-element-40fb328 .elementor-widget-text-editor span,
    .elementor-1671 .elementor-element-40fb328 .elementor-widget-text-editor strong,
    .elementor-1671 .elementor-element-40fb328 .elementor-widget-text-editor b,
    .elementor-1671 .elementor-element-40fb328 .elementor-widget-text-editor li,
    .elementor-1671 .elementor-element-40fb328 .elementor-icon-list-text,
    .elementor-1671 .elementor-element-40fb328 .elementor-icon-list-icon i,
    .elementor-1671 .elementor-element-40fb328 .elementor-icon-list-icon svg,
    .elementor-1671 .elementor-element-d21ad8c .elementor-heading-title,
    .elementor-1671 .elementor-element-d21ad8c .elementor-widget-text-editor,
    .elementor-1671 .elementor-element-d21ad8c .elementor-widget-text-editor p,
    .elementor-1671 .elementor-element-d21ad8c .elementor-widget-text-editor span,
    .elementor-1671 .elementor-element-d21ad8c .elementor-widget-text-editor strong,
    .elementor-1671 .elementor-element-d21ad8c .elementor-widget-text-editor b,
    .elementor-1671 .elementor-element-d21ad8c .elementor-widget-text-editor li,
    .elementor-1671 .elementor-element-d21ad8c .elementor-icon-list-text,
    .elementor-1671 .elementor-element-d21ad8c .elementor-icon-list-icon i,
    .elementor-1671 .elementor-element-d21ad8c .elementor-icon-list-icon svg,
    .elementor-1671 .elementor-element-b67ad0f .elementor-heading-title,
    .elementor-1671 .elementor-element-b67ad0f .elementor-widget-text-editor,
    .elementor-1671 .elementor-element-b67ad0f .elementor-widget-text-editor p,
    .elementor-1671 .elementor-element-b67ad0f .elementor-widget-text-editor span,
    .elementor-1671 .elementor-element-b67ad0f .elementor-widget-text-editor strong,
    .elementor-1671 .elementor-element-b67ad0f .elementor-widget-text-editor b,
    .elementor-1671 .elementor-element-b67ad0f .elementor-widget-text-editor li,
    .elementor-1671 .elementor-element-b67ad0f .elementor-icon-list-text,
    .elementor-1671 .elementor-element-b67ad0f .elementor-icon-list-icon i,
    .elementor-1671 .elementor-element-b67ad0f .elementor-icon-list-icon svg,
    .elementor-1671 .elementor-element-d4896b0 .elementor-heading-title,
    .elementor-1671 .elementor-element-d4896b0 .elementor-widget-text-editor,
    .elementor-1671 .elementor-element-d4896b0 .elementor-widget-text-editor p,
    .elementor-1671 .elementor-element-d4896b0 .elementor-widget-text-editor span,
    .elementor-1671 .elementor-element-d4896b0 .elementor-widget-text-editor strong,
    .elementor-1671 .elementor-element-d4896b0 .elementor-widget-text-editor b,
    .elementor-1671 .elementor-element-d4896b0 .elementor-widget-text-editor li,
    .elementor-1671 .elementor-element-d4896b0 .elementor-icon-list-text,
    .elementor-1671 .elementor-element-d4896b0 .elementor-icon-list-icon i,
    .elementor-1671 .elementor-element-d4896b0 .elementor-icon-list-icon svg {
        color: #ffffff !important;
        fill: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .elementor-1671 .fluentform_wrapper_4 .ff-el-input--label label,
    .elementor-1671 .fluentform_wrapper_4 .ff-el-input--label,
    .elementor-1671 .fluentform_wrapper_4 .ff-el-form-control,
    .elementor-1671 .fluentform_wrapper_4 .ff-el-form-control::placeholder,
    .elementor-1671 .fluentform_wrapper_4 .ff-errors-in-stack {
        color: #5f5f5f !important;
    }

    .elementor-1671 .fluentform_wrapper_4 .ff-el-form-control,
    .elementor-1671 .fluentform_wrapper_4 select.ff-el-form-control,
    .elementor-1671 .fluentform_wrapper_4 textarea.ff-el-form-control {
        background: #ffffff !important;
        border-color: #d7dce3 !important;
    }
</style>
<div data-rocket-location-hash="449cc9a1d69aa5c05d275d0753484005" data-elementor-type="wp-page" data-elementor-id="1671" class="elementor elementor-1671" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-fc58b73 e-flex e-con-boxed e-con e-parent" data-id="fc58b73" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">
					<div class="e-con-inner">
				<div class="elementor-shape elementor-shape-bottom" aria-hidden="true" data-negative="false">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
</svg>		</div>
		<div class="elementor-element elementor-element-383b77b e-con-full e-flex e-con e-child" data-id="383b77b" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-b144da1 elementor-widget elementor-widget-heading" data-id="b144da1" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h1 class="elementor-heading-title elementor-size-default">Ihre professionelle Reinigungsfirma in Wiener Neustadt – Alles für Sauberkeit und Hygiene
</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-77c1f08 elementor-widget elementor-widget-heading" data-id="77c1f08" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">Herzlich willkommen bei EcoClean Gebäudereinigung, Ihrer zuverlässigen Reinigungsfirma Wiener Neustadt. Mit jahrelanger Erfahrung und umfassendem Know-how bieten wir ein breites Leistungsspektrum an, das perfekt auf die Bedürfnisse unserer Kunden abgestimmt ist. Ob Gebäudereinigung, Hausbetreuung oder Winterdienst – unser engagiertes Team steht Ihnen in Wiener Neustadt und der Umgebung jederzeit zur Verfügung.</p>				</div>
				</div>
				<div class="elementor-element elementor-element-48ff1c5 elementor-widget elementor-widget-shortcode" data-id="48ff1c5" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
		<div class="elementor-element elementor-element-fa04447 e-con-full e-flex e-con e-child" data-id="fa04447" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-8f1d57e elementor-widget elementor-widget-heading" data-id="8f1d57e" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Jetzt unverbindlich anfragen</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-285a1cf elementor-widget elementor-widget-shortcode" data-id="285a1cf" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode"><div class='fluentform ff-default fluentform_wrapper_4 ffs_default_wrap'><form data-form_id="4" id="fluentform_4" class="frm-fluent-form fluent_form_4 ff-el-form-top ff_form_instance_4_1 ff-form-loading ffs_default" data-form_instance="ff_form_instance_4_1" method="POST" ><fieldset  style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Services Form</legend><input type='hidden' name='__fluent_form_embded_post_id' value='1671' /><input type="hidden" id="_fluentform_4_fluentformnonce" name="_fluentform_4_fluentformnonce" value="689ab3a505" /><input type="hidden" name="_wp_http_referer" value="{{ url('/reinigungsfirma-in-wiener-neustadt/') }}" /><div data-name="ff_cn_id_1"  class='ff-t-container ff-column-container ff_columns_total_1 '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 100%;'><div data-type="name-element" data-name="names" class=" ff-field_container ff-name-field-wrapper" ><div class='ff-t-container'><div class='ff-t-cell '><div class='ff-el-group  ff-el-form-hide_label'><div class="ff-el-input--label asterisk-right"><label for='ff_4_names_first_name_' id='label_ff_4_names_first_name_' >Name</label></div><div class='ff-el-input--content'><input type="text" name="names[first_name]" id="ff_4_names_first_name_" class="ff-el-form-control" placeholder="Name" aria-invalid="false" aria-required=false></div></div></div></div></div></div></div><div data-name="ff_cn_id_2"  class='ff-t-container ff-column-container ff_columns_total_2 '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 50%;'><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_4_email' id='label_ff_4_email' aria-label="Email">Email</label></div><div class='ff-el-input--content'><input type="email" name="email" id="ff_4_email" class="ff-el-form-control" placeholder="Email Address" data-name="email"  aria-invalid="false" aria-required=true></div></div></div><div class='ff-t-cell ff-t-column-2' style='flex-basis: 50%;'><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_4_phone' id='label_ff_4_phone' aria-label="Phone/Mobile">Phone/Mobile</label></div><div class='ff-el-input--content'><input name="phone" class="ff-el-form-control ff-el-phone" type="tel" placeholder="Mobile Number" data-name="phone" id="ff_4_phone" inputmode="tel"  aria-invalid='false' aria-required=true></div></div></div></div><div data-name="ff_cn_id_3"  class='ff-t-container ff-column-container ff_columns_total_1 '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 100%;'><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label asterisk-right"><label for='ff_4_dropdown' id='label_ff_4_dropdown' aria-label="Dropdown">Dropdown</label></div><div class='ff-el-input--content'><select name="dropdown" id="ff_4_dropdown" class="ff-el-form-control" data-name="dropdown" data-calc_value="0"  aria-invalid="false" aria-required="false" aria-labelledby="label_ff_4_dropdown"><option value="">- Regarding-</option><option value="Miscellaneous"  >Miscellaneous</option><option value="Home Care"  >Home Care</option><option value="Winter Service"  >Winter Service</option><option value="Garden Care"  >Garden Care</option><option value="Garage Cleaning"  >Garage Cleaning</option><option value="Office/Maintenance Cleaning"  >Office/Maintenance Cleaning</option><option value="Basic Cleaning"  >Basic Cleaning</option><option value="Window Cleaning"  >Window Cleaning</option><option value="Carpet Cleaning"  >Carpet Cleaning</option><option value="Special Cleaning"  >Special Cleaning</option><option value="Special Cleaning"  >Special Cleaning</option><option value="Facade Cleaning"  >Facade Cleaning</option><option value="Basic Cleaning"  >Basic Cleaning</option><option value="Final Cleaning"  >Final Cleaning</option></select></div></div></div></div><div data-name="ff_cn_id_4"  class='ff-t-container ff-column-container ff_columns_total_1 '><div class='ff-t-cell ff-t-column-1' style='flex-basis: 100%;'><div class='ff-el-group ff-el-form-hide_label'><div class="ff-el-input--label ff-el-is-required asterisk-right"><label for='ff_4_message' id='label_ff_4_message' aria-label="Your Message">Your Message</label></div><div class='ff-el-input--content'><textarea aria-required="true" aria-labelledby="label_ff_4_message" name="message" id="ff_4_message" class="ff-el-form-control" placeholder="Your Message" rows="4" cols="2" data-name="message" ></textarea></div></div></div></div><div class='ff-el-group ff-text-center ff_submit_btn_wrapper'><button type="submit" class="ff-btn ff-btn-submit ff-btn-md ff_btn_style wpf_has_custom_css"  aria-label="Submit Form">Submit Form</button></div></fieldset></form><div id='fluentform_4_errors' class='ff-errors-in-stack ff_form_instance_4_1 ff-form-loading_errors ff_form_instance_4_1_errors'></div></div>            <script type="text/javascript">
                window.fluent_form_ff_form_instance_4_1 = {"id":"4","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","cssClassName":"","asteriskPlacement":"asterisk-right"},"restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_4_1","form_id_selector":"fluentform_4","rules":{"names[first_name]":{"required":{"value":false,"message":"This field is required","global":true,"global_message":"This field is required"}},"names[middle_name]":{"required":{"value":false,"message":"This field is required","global":true,"global_message":"This field is required"}},"names[last_name]":{"required":{"value":false,"message":"This field is required","global":true,"global_message":"This field is required"}},"email":{"required":{"value":true,"message":"This field is required","global":true,"global_message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email","global":true,"global_message":"This field must contain a valid email"}},"phone":{"required":{"value":true,"global":true,"message":"This field is required","global_message":"This field is required"},"valid_phone_number":{"value":false,"global":true,"message":"Phone number is not valid","global_message":"Phone number is not valid"}},"dropdown":{"required":{"value":false,"message":"This field is required","global_message":"This field is required","global":true}},"message":{"required":{"value":true,"message":"This field is required","global":true,"global_message":"This field is required"}}},"debounce_time":300};
                            </script>
            </div>
						</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-c41d620 e-flex e-con-boxed e-con e-parent" data-id="c41d620" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-4aa1359 e-con-full e-flex e-con e-child" data-id="4aa1359" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-656a27d e-con-full e-flex e-con e-child" data-id="656a27d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-dd016be elementor-widget elementor-widget-image" data-id="dd016be" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="200" height="200" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb.png') }}" class="attachment-full size-full wp-image-1116" alt="" srcset="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb.png') }} 200w, {{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2025/11/6256c15ccd258e35c0314eff_meisterbetrieb-120x120.png') }} 120w" sizes="(max-width: 200px) 100vw, 200px" />															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-ac1aa82 e-con-full e-flex e-con e-child" data-id="ac1aa82" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-149b22c elementor-widget elementor-widget-heading" data-id="149b22c" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">eco-clean.at</p>				</div>
				</div>
		<div class="elementor-element elementor-element-de823ac e-con-full e-flex e-con e-child" data-id="de823ac" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-9e8880a e-con-full e-flex e-con e-child" data-id="9e8880a" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-6f908a5 elementor-widget elementor-widget-heading" data-id="6f908a5" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h5 class="elementor-heading-title elementor-size-default">Ausgezeichnet</h5>				</div>
				</div>
				<div class="elementor-element elementor-element-9bb516d elementor-widget elementor-widget-rating" data-id="9bb516d" data-element_type="widget" data-e-type="widget" data-widget_type="rating.default">
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
				<div class="elementor-element elementor-element-5e61df5 elementor-widget elementor-widget-heading" data-id="5e61df5" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<p class="elementor-heading-title elementor-size-default">4,9 von 5,0 aus 452 Bewertungen</p>				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-a24992c e-con-full e-flex e-con e-child" data-id="a24992c" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-c89f686 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c89f686" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
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
				<div class="elementor-element elementor-element-cfef7f4 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="cfef7f4" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
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
		<div data-rocket-location-hash="96b5b644ae23b0ecc48ff45e4ddf795d" class="elementor-element elementor-element-80c4f7b e-flex e-con-boxed e-con e-parent" data-id="80c4f7b" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-6f8f979 elementor-toc--content-ellipsis elementor-widget__width-auto elementor-widget elementor-widget-table-of-contents" data-id="6f8f979" data-element_type="widget" data-e-type="widget" data-settings="{&quot;exclude_headings_by_selector&quot;:[],&quot;marker_view&quot;:&quot;bullets&quot;,&quot;icon&quot;:{&quot;value&quot;:&quot;fas fa-arrow-right&quot;,&quot;library&quot;:&quot;fa-solid&quot;,&quot;rendered_tag&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-arrow-right\&quot; viewBox=\&quot;0 0 448 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;},&quot;headings_by_tags&quot;:[&quot;h2&quot;,&quot;h3&quot;,&quot;h4&quot;],&quot;no_headings_message&quot;:&quot;No headings were found on this page.&quot;,&quot;hierarchical_view&quot;:&quot;yes&quot;,&quot;min_height&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;min_height_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;min_height_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;min_height_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="table-of-contents.default">
				<div class="elementor-widget-container">
									<div class="elementor-toc__header">
						<h4 class="elementor-toc__header-title">
				Inhaltsverzeichnis			</h4>
								</div>
				<div id="elementor-toc__6f8f979" class="elementor-toc__body">
			<ul class="elementor-toc__list-wrapper">
				<li class="elementor-toc__list-item"><a href="#leistungen-wiener-neustadt" class="elementor-toc__list-item-text">Reinigungsleistungen</a></li>
				<li class="elementor-toc__list-item"><a href="#angebot-wiener-neustadt" class="elementor-toc__list-item-text">Unser Angebot</a></li>
				<li class="elementor-toc__list-item"><a href="#hausbetreuung-gartenpflege" class="elementor-toc__list-item-text">Hausbetreuung und Gartenpflege</a></li>
				<li class="elementor-toc__list-item"><a href="#warum-ecoclean-wiener-neustadt" class="elementor-toc__list-item-text">Warum EcoClean?</a></li>
				<li class="elementor-toc__list-item"><a href="#spezialisierungen-wiener-neustadt" class="elementor-toc__list-item-text">Unsere Spezialisierungen</a></li>
				<li class="elementor-toc__list-item"><a href="#kontakt-wiener-neustadt" class="elementor-toc__list-item-text">Kontakt</a></li>
			</ul>
		</div>
						</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-40fb328 e-flex e-con-boxed e-con e-parent" data-id="40fb328" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div id="leistungen-wiener-neustadt" class="elementor-element elementor-element-3c4c841 elementor-widget elementor-widget-heading" data-id="3c4c841" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Unsere Reinigungsleistungen für Wiener Neustadt und Umgebung</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-c3730eb elementor-widget elementor-widget-text-editor" data-id="c3730eb" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Als kompetente </span><b>Reinigungsfirma</b><span style="font-weight: 400;"> sind wir darauf spezialisiert, Ihre Räumlichkeiten in einem einwandfreien Zustand zu halten. Wir bieten </span><b>Unterhaltsreinigung</b><span style="font-weight: 400;">, </span><b>Grundreinigung</b><span style="font-weight: 400;"> und eine Vielzahl anderer </span><b>Reinigungsarbeiten</b><span style="font-weight: 400;"> für </span><b>Firmengebäude</b><span style="font-weight: 400;"> und private Haushalte an.</span></p>								</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="78d7cb1f56e952fb9f92b8a908f48f70" class="elementor-element elementor-element-aaad101 e-flex e-con-boxed e-con e-parent" data-id="aaad101" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div id="angebot-wiener-neustadt" class="elementor-element elementor-element-ad978eb elementor-widget elementor-widget-heading" data-id="ad978eb" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Unser Angebot umfasst unter anderem:</h2>				</div>
				</div>
		<div class="elementor-element elementor-element-cf36139 e-con-full e-flex e-con e-child" data-id="cf36139" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-891913d e-con-full e-flex e-con e-child" data-id="891913d" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-1c4a2cb elementor-widget elementor-widget-image" data-id="1c4a2cb" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" width="530" height="562" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/about-v1-img1-530x562.jpg') }}" class="attachment-full size-full wp-image-1588" alt="" />															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-3189f34 e-con-full e-flex e-con e-child" data-id="3189f34" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-0271123 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="0271123" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Gebäudereinigung:<br> Wir kümmern uns gründlich um jedes Detail, von Schmutz und Staub bis zur Pflege der Bodenbeläge. Unsere Gebäudereiniger sorgen dafür, dass Sie immer in einer sauberen Umgebung arbeiten und leben.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Fassadenreinigung: <br>Für makellose Außenflächen bieten wir eine professionelle Fassadenreinigung an, die Ihre Immobilie nicht nur pflegt, sondern auch langfristig schützt.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Winterdienst:<br>Gerade in den kalten Monaten ist es wichtig, für Sicherheit und Sauberkeit auf allen Flächen zu sorgen. Mit unserem Winterdienst übernehmen wir den Schneeräumdienst und stellen sicher, dass Ihre Wege, Parkplätze und Eingangsbereiche frei von Schnee und Eis sind.</span>
									</li>
						</ul>
						</div>
				</div>
				<div class="elementor-element elementor-element-8ef592d elementor-widget elementor-widget-shortcode" data-id="8ef592d" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
				</div>
		<div class="elementor-element elementor-element-d21ad8c e-flex e-con-boxed e-con e-parent" data-id="d21ad8c" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div id="hausbetreuung-gartenpflege" class="elementor-element elementor-element-3481005 elementor-widget elementor-widget-heading" data-id="3481005" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Hausbetreuung und Gartenpflege – Ein umfassendes Serviceangebot</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-bfccb0b elementor-widget elementor-widget-text-editor" data-id="bfccb0b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Unser </span><b>Reinigungsunternehmen</b><span style="font-weight: 400;"> bietet Ihnen mehr als nur klassische Reinigungsdienste. Wir sind auch Ihr zuverlässiger </span><b>Ansprechpartner</b><span style="font-weight: 400;"> für umfassende </span><b>Hausbetreuung</b><span style="font-weight: 400;"> und </span><b>Gartenpflege</b><span style="font-weight: 400;">. Unser erfahrenes </span><b>Team</b><span style="font-weight: 400;"> übernimmt die ganzjährige Betreuung von Objekten jeder </span><b>Art</b><span style="font-weight: 400;"> und unterstützt Sie in allen </span><b>Bereichen</b><span style="font-weight: 400;"> rund um </span><b>Garten</b><span style="font-weight: 400;"> und Haus. </span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-a290be4 elementor-widget elementor-widget-heading" data-id="a290be4" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Unser Angebot für die Hausbetreuung in Wiener Neustadt beinhaltet unter anderem:</h3>				</div>
				</div>
				<div class="elementor-element elementor-element-a3e3b4e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="a3e3b4e" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Pflege und Instandhaltung des Gartens</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Regelmäßige Kontrolle und Wartung der Gebäudetechnik</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Unterstützung bei speziellen Reinigungsarbeiten und Unterhaltsreinigung</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="5af8d3f53c9a6bb9e2555659f35c57dd" class="elementor-element elementor-element-25d5a6d e-flex e-con-boxed e-con e-parent" data-id="25d5a6d" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div id="warum-ecoclean-wiener-neustadt" class="elementor-element elementor-element-81895c3 elementor-widget elementor-widget-heading" data-id="81895c3" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Warum EcoClean Gebäudereinigung? – Ihr Partner für alle Reinigungsarbeiten
</h2>				</div>
				</div>
		<div class="elementor-element elementor-element-003be01 e-con-full e-flex e-con e-child" data-id="003be01" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-d789748 e-con-full e-flex e-con e-child" data-id="d789748" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-88d968b elementor-widget elementor-widget-image" data-id="88d968b" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="530" height="562" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/contact-v1-img1-600x562.png') }}" class="attachment-large size-large wp-image-1382" alt="" />															</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-67077bb e-con-full e-flex e-con e-child" data-id="67077bb" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-f42a2c9 e-con-full e-flex e-con e-child" data-id="f42a2c9" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-92b702b elementor-widget elementor-widget-text-editor" data-id="92b702b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Unsere </span><b>Reinigungsfirma Wiener Neustadt</b><span style="font-weight: 400;"> steht für Qualität und Verlässlichkeit. Mit </span><b>EcoClean Gebäudereinigung</b><span style="font-weight: 400;"> haben Sie einen </span><b>Partner</b><span style="font-weight: 400;"> an Ihrer Seite, der sich durch gründliche Arbeit, Flexibilität und ein hohes Maß an Professionalität auszeichnet. Unser </span><b>Team</b><span style="font-weight: 400;"> von erfahrenen </span><b>Reinigungskräften</b><span style="font-weight: 400;"> ist immer bestrebt, Ihren Anforderungen gerecht zu werden und maßgeschneiderte Lösungen für Ihre </span><b>Reinigungsarbeiten</b><span style="font-weight: 400;"> zu entwickeln. Wir setzen modernste Techniken ein und garantieren höchste Sauberkeit in jedem </span><b>Bereich</b><span style="font-weight: 400;">.</span></p><p> </p><p><span style="font-weight: 400;">Bleiben Sie dran für den nächsten Abschnitt, der Ihnen noch weitere Informationen zu unseren Dienstleistungen bietet.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-e1e2f29 elementor-widget elementor-widget-shortcode" data-id="e1e2f29" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
				<div class="elementor-element elementor-element-46b315f elementor-widget elementor-widget-heading" data-id="46b315f" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Warum EcoClean Gebäudereinigung? – Ihr Partner für alle Reinigungsarbeiten
</h2>				</div>
				</div>
		<div class="elementor-element elementor-element-b317b9a e-con-full e-flex e-con e-child" data-id="b317b9a" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-38a239b e-con-full e-flex e-con e-child" data-id="38a239b" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-98e3f0e elementor-widget elementor-widget-text-editor" data-id="98e3f0e" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Bei </span><b>EcoClean </b><span style="font-weight: 400;">sind wir stolz darauf, unseren </span><b>Kunden</b><span style="font-weight: 400;"> in </span><b>Wiener Neustadt</b><span style="font-weight: 400;"> und der umliegenden </span><b>Region</b><span style="font-weight: 400;"> hochwertige Reinigungsdienstleistungen anzubieten. </span></p><p> </p><p><span style="font-weight: 400;">Ob </span><b>Gebäudereinigung</b><span style="font-weight: 400;">, </span><b>Grundreinigung</b><span style="font-weight: 400;"> oder spezialisierte Dienstleistungen wie </span><b>Winterdienst</b><span style="font-weight: 400;"> und </span><b>Gartenpflege</b><span style="font-weight: 400;"> – unsere Reinigungsfirma bietet Lösungen, die auf die Bedürfnisse und Ansprüche jedes einzelnen Kunden abgestimmt sind.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-1aa0254 elementor-widget elementor-widget-shortcode" data-id="1aa0254" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
		<div class="elementor-element elementor-element-88e156a e-con-full e-flex e-con e-child" data-id="88e156a" data-element_type="container" data-e-type="container">
		<div class="elementor-element elementor-element-5170804 e-con-full e-flex e-con e-child" data-id="5170804" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-9dcf286 elementor-widget elementor-widget-image" data-id="9dcf286" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="530" height="562" src="{{ asset('assets/mirror/eco-clean.at/wp-content/uploads/2023/10/about-v1-img1-530x562.jpg') }}" class="attachment-large size-large wp-image-1505" alt="" />															</div>
				</div>
				</div>
				</div>
				</div>
				<div id="spezialisierungen-wiener-neustadt" class="elementor-element elementor-element-508edca elementor-widget elementor-widget-heading" data-id="508edca" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Unsere Spezialisierungen in Wiener Neustadt</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-6b079f7 elementor-widget elementor-widget-text-editor" data-id="6b079f7" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Als führende </span><b>Reinigungsfirma in Wiener Neustadt</b><span style="font-weight: 400;"> decken wir ein breites </span><b>Leistungsspektrum</b><span style="font-weight: 400;"> ab, das Ihnen alle Arten von </span><b>Reinigungen</b><span style="font-weight: 400;"> für den privaten und geschäftlichen Bereich bietet. Unsere qualifizierten </span><b>Gebäudereiniger</b><span style="font-weight: 400;"> und erfahrenen Reinigungskräfte stellen sicher, dass jede Aufgabe effizient und professionell erledigt wird:</span></p>								</div>
				</div>
		<div class="elementor-element elementor-element-58ab5d4 e-con-full e-flex e-con e-child" data-id="58ab5d4" data-element_type="container" data-e-type="container">
				<div class="elementor-element elementor-element-ff4290f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ff4290f" data-element_type="widget" data-e-type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
							<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Gebäudereinigung:<br>Mit unserer umfassenden Grundreinigung stellen wir sicher, dass selbst der hartnäckigste Dreck entfernt wird, und schaffen so eine blitzsaubere Umgebung in jedem Raum.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Winterdienst: <br>Gerade in den kalten Monaten ist es wichtig, Sicherheit und Sauberkeit auf Gehwegen und Eingangsbereichen zu gewährleisten. Unser professioneller Winterdienst sorgt dafür, dass alle Flächen in Wiener Neustadt und Neunkirchen gut gepflegt und sicher nutzbar sind.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-dot-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Gartenpflege::<br>Neben klassischen Reinigungsservices bieten wir auch die professionelle Garten- und Außenflächenpflege an, die nicht nur optisch ansprechend ist, sondern auch langfristig zur Erhaltung Ihrer Immobilie beiträgt.</span>
									</li>
						</ul>
						</div>
				</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="9726374e68fad85ba30aee319de5ab36" class="elementor-element elementor-element-f601893 e-flex e-con-boxed e-con e-parent" data-id="f601893" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-7ecab8d elementor-widget elementor-widget-heading" data-id="7ecab8d" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Ihr verlässlicher Partner für Gebäudereinigung in Wiener Neustadt
</h2>				</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="e42bddd88dc0b605cab2a8ca6f87c8c1" class="elementor-element elementor-element-66e0635 e-flex e-con-boxed e-con e-parent" data-id="66e0635" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-834891a elementor-widget elementor-widget-text-editor" data-id="834891a" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Mit </span><b>EcoClean</b><span style="font-weight: 400;"> haben Sie einen erfahrenen </span><b>Partner</b><span style="font-weight: 400;"> an Ihrer Seite, der für hohe Standards und ein umfassendes Serviceangebot steht. Unsere </span><b>Kunden</b><span style="font-weight: 400;"> in </span><b>Wiener Neustadt</b><span style="font-weight: 400;"> schätzen unsere Flexibilität, unser umfangreiches Know-how und die zuverlässige Umsetzung jeder Art von </span><b>Reinigungsarbeiten</b><span style="font-weight: 400;">. Ob </span><b>Fassaden</b><span style="font-weight: 400;">&#8211; und </span><b>Denkmalpflege</b><span style="font-weight: 400;">, professionelle </span><b>Unterhaltsreinigung</b><span style="font-weight: 400;"> oder flexible </span><b>Hausbetreuung</b><span style="font-weight: 400;"> – wir sind für alle Anforderungen bestens gerüstet.</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-4392296 elementor-widget elementor-widget-heading" data-id="4392296" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Kundenorientierter Service und transparente Kosten</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-f999035 elementor-widget elementor-widget-text-editor" data-id="f999035" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Unser </span><b>Unternehmen</b><span style="font-weight: 400;"> legt großen Wert auf </span><b>Kunden</b><span style="font-weight: 400;">service und bietet maßgeschneiderte Lösungen zu fairen </span><b>Kosten</b><span style="font-weight: 400;">. Von der ersten </span><b>Kontaktaufnahme</b><span style="font-weight: 400;"> über die detaillierte Beratung bis hin zur Ausführung der </span><b>Reinigungsarbeiten</b><span style="font-weight: 400;"> – wir sind stets bemüht, Ihre Erwartungen zu übertreffen und höchste </span><b>Reinigungsqualität</b><span style="font-weight: 400;"> zu bieten. </span><b>EcoClean</b><span style="font-weight: 400;"> ist die </span><b>Reinigungsfirma</b><span style="font-weight: 400;">, auf die Sie sich verlassen können, wenn es um gründliche und zuverlässige Dienstleistungen in </span><b>Wiener Neustadt</b><span style="font-weight: 400;"> geht.</span></p>								</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-b67ad0f e-flex e-con-boxed e-con e-parent" data-id="b67ad0f" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-673428a elementor-widget elementor-widget-heading" data-id="673428a" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Rufen Sie uns noch heute an oder schreiben Sie uns eine E-Mail, um mehr über unsere Dienstleistungen zu erfahren und ein individuelles Angebot zu erhalten!
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-a717759 elementor-widget elementor-widget-shortcode" data-id="a717759" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
		<div data-rocket-location-hash="bcb8dc5e1804991cf06cdf165da7dfdc" class="elementor-element elementor-element-83355d4 e-flex e-con-boxed e-con e-parent" data-id="83355d4" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-8e19089 elementor-widget elementor-widget-heading" data-id="8e19089" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Umfassende Reinigungsdienste für den Außen- und Innenbereich
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-fb58213 elementor-widget elementor-widget-text-editor" data-id="fb58213" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Bei </span><b>EcoClean</b><span style="font-weight: 400;"> bieten wir ein breites Angebot an professionellen </span><b>Reinigungs</b><span style="font-weight: 400;">leistungen, das sowohl den Innen- als auch den Außenbereich abdeckt. Unser Team aus erfahrenen </span><b>Gebäudereinigern</b><span style="font-weight: 400;"> sorgt dafür, dass Ihre </span><b>Büro</b><span style="font-weight: 400;">räume, </span><b>Garten</b><span style="font-weight: 400;">flächen und </span><b>Fassaden</b><span style="font-weight: 400;"> stets makellos gepflegt und repräsentativ bleiben. Besonders im Bereich der </span><b>Unterhaltsreinigung</b><span style="font-weight: 400;"> legen wir großen Wert auf nachhaltige und effiziente Lösungen, die für langfristige </span><b>Sauberkeit</b><span style="font-weight: 400;"> sorgen.</span></p>								</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="790ee1edefefe9e93089bf7ac7adb462" class="elementor-element elementor-element-20867da e-flex e-con-boxed e-con e-parent" data-id="20867da" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-a4865bb elementor-widget elementor-widget-heading" data-id="a4865bb" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Spezialdienstleistungen für anspruchsvolle Objekte
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-5f52aad elementor-widget elementor-widget-text-editor" data-id="5f52aad" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Für besondere Projekte, wie die Pflege von historischen </span><b>Denkmälern</b><span style="font-weight: 400;"> oder empfindlichen </span><b>Fassaden</b><span style="font-weight: 400;">, verfügen wir über die nötige Expertise und das Know-how, um auch sensible Oberflächen professionell zu behandeln. Mit einem individuellen Plan für jede Art von </span><b>Reinigung</b><span style="font-weight: 400;"> ist unser </span><b>Unternehmen</b><span style="font-weight: 400;"> bestens auf alle Anforderungen vorbereitet und bietet maßgeschneiderte Lösungen, die Ihre Erwartungen übertreffen.</span></p>								</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="2bf3204e25c863ba7e971356e58fb9a8" class="elementor-element elementor-element-2fbc67c e-flex e-con-boxed e-con e-parent" data-id="2fbc67c" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-83b9107 elementor-widget elementor-widget-heading" data-id="83b9107" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Der richtige Partner für alle Reinigungsbedürfnisse
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-6ecf278 elementor-widget elementor-widget-text-editor" data-id="6ecf278" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Wir verstehen, dass jeder Kunde individuelle Ansprüche hat. Ob es sich um die regelmäßige Pflege Ihrer </span><b>Garten</b><span style="font-weight: 400;">anlagen, die gründliche Reinigung von </span><b>Büro</b><span style="font-weight: 400;">flächen oder spezifische Anforderungen im </span><b>Winter</b><span style="font-weight: 400;"> handelt – </span><b>EcoClean</b><span style="font-weight: 400;"> ist der verlässliche Partner für alle </span><b>Reinigungs</b><span style="font-weight: 400;">aufgaben. Unsere erfahrene </span><b>Reinigungskraft</b><span style="font-weight: 400;"> und unser engagiertes Team arbeiten mit Präzision und Sorgfalt, um höchste Qualität in jeder Situation zu gewährleisten.</span></p>								</div>
				</div>
					</div>
				</div>
		<div data-rocket-location-hash="3d1f2a9c7385f976af958541e2294994" class="elementor-element elementor-element-13c89c4 e-flex e-con-boxed e-con e-parent" data-id="13c89c4" data-element_type="container" data-e-type="container">
					<div class="e-con-inner">
				<div id="kontakt-wiener-neustadt" class="elementor-element elementor-element-75b0bc7 elementor-widget elementor-widget-heading" data-id="75b0bc7" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Kontaktieren Sie uns für maßgeschneiderte Lösungen
</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-6b0be41 elementor-widget elementor-widget-text-editor" data-id="6b0be41" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">Mit </span><b>EcoClean</b><span style="font-weight: 400;"> haben Sie ein </span><b>Unternehmen</b><span style="font-weight: 400;">, das sich durch Verlässlichkeit und erstklassigen Service auszeichnet. Wenn Sie in Wiener Neustadt nach einer </span><b>Reinigungsfirma</b><span style="font-weight: 400;"> suchen, die für gründliche Arbeit und eine transparente Zusammenarbeit steht, sind Sie bei uns richtig. Ob bei der </span><b>Suche</b><span style="font-weight: 400;"> nach einer dauerhaften Lösung für den regelmäßigen </span><b>Unterhalts</b><span style="font-weight: 400;">service oder einer einmaligen gründlichen Reinigung – wir sind für alle </span><b>Sachen</b><span style="font-weight: 400;"> rund um die Reinigung da.</span></p>								</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-d4896b0 e-flex e-con-boxed e-con e-parent" data-id="d4896b0" data-element_type="container" data-e-type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-b050515 elementor-widget elementor-widget-text-editor" data-id="b050515" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="text-align: left;"><span style="font-weight: 400;">Rufen Sie uns an oder schreiben Sie uns eine E-Mail, um Ihren individuellen Reinigungsplan zu besprechen und eine Lösung zu finden, die genau auf Ihre Bedürfnisse zugeschnitten ist!</span></p>								</div>
				</div>
				<div class="elementor-element elementor-element-2554a53 elementor-widget elementor-widget-shortcode" data-id="2554a53" data-element_type="widget" data-e-type="widget" data-widget_type="shortcode.default">
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
@endsection
