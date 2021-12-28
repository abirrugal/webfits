<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Webfits || @yield('title','We serve you the best')</title>

	{{-- Favicon  --}}
	@isset($favicon[0])
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset($favicon[0]->image)}}">
	@endisset
	{{--  Email-subscribers  --}}

	<link rel='stylesheet' id='email-subscribers-css'  href='{{asset('wp-content/plugins/email-subscribers/lite/public/css/email-subscribers-publicce52.css?ver=5.0.2')}}' type='text/css' media='all' />

	{{--  Style of Home   --}}
	<link rel='stylesheet' id='woodmart-style-css'  href='{{asset('wp-content/themes/woodmart/style.min03ec.css?ver=5.3.4')}}' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='{{asset('wp-content/plugins/revslider/public/assets/css/rs63f21.css?ver=6.2.23')}}' type='text/css' media='all' />
	{{--  Blog and more   --}}

	<link rel='stylesheet' id='js_composer_front-css'  href='{{asset('wp-content/plugins/js_composer/assets/css/js_composer.min91f3.css?ver=6.4.0')}}' type='text/css' media='all' />


{{--  <link rel='stylesheet' id='wp-block-library-css'  href='{{asset('wp-includes/css/dist/block-library/style.min080f.css?ver=5.8.2')}}' type='text/css' media='all' />  --}}
{{--  <link rel='stylesheet' id='wc-blocks-vendors-style-css'  href='{{asset('wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style42c6.css?ver=6.1.0')}}' type='text/css' media='all' />  --}}
{{--  <link rel='stylesheet' id='wc-blocks-style-css'  href='{{asset('wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style42c6.css?ver=6.1.0')}}' type='text/css' media='all' />  --}}


{{--  <link rel='stylesheet' id='digits-login-style-css'  href='{{asset('wp-content/plugins/digits/assets/css/login.mina79d.css?ver=7.8.1.8')}}' type='text/css' media='all' />  --}}
{{--  <link rel='stylesheet' id='digits-style-css'  href='{{asset('wp-content/plugins/digits/assets/css/main.mina79d.css?ver=7.8.1.8')}}' type='text/css' media='all' />  --}}
{{--  <link rel='stylesheet' id='khaasfood-css'  href='{{asset('wp-content/plugins/kf-plugin/public/css/khaasfood-publiccb18.css?ver=1.0.9')}}' type='text/css' media='all' />  --}}


<style id='rs-plugin-settings-inline-css' type='text/css'>
</style>

{{--  <link rel='stylesheet' id='woo-shipping-display-mode-css'  href='{{asset('wp-content/plugins/woo-shipping-display-mode/public/css/woo-shipping-display-mode-public8a54.css?ver=1.0.0')}}' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
</style>
<link rel='stylesheet' id='woodiscuz-modal-box-css-css'  href='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/third-party/modal-box/modal-boxde92.css?ver=2.2.9')}}' type='text/css' media='all' />
<link rel='stylesheet' id='woodiscuz-validator-style-css'  href='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/css/fvde92.css?ver=2.2.9')}}' type='text/css' media='all' />
<link rel='stylesheet' id='woodiscuz-tooltipster-style-css'  href='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/third-party/tooltipster/css/tooltipsterde92.css?ver=2.2.9')}}' type='text/css' media='all' />
<link rel='stylesheet' id='woodiscuz-frontend-css-css'  href='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/css/woodiscuz-frontendde92.css?ver=2.2.9')}}' type='text/css' media='all' />
<link rel='stylesheet' id='wpsl-styles-css'  href='{{asset('wp-content/plugins/wp-store-locator/css/styles.min1319.css?ver=2.2.234')}}' type='text/css' media='all' />  --}}


{{--  <link rel='stylesheet' id='wp-total-solr-css'  href='{{asset('wp-content/plugins/wp-total-solr/public/css/wp-total-solr-public9dbf.css?ver=1.0.5.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='yit-style-css'  href='{{asset('wp-content/plugins/yith-woocommerce-advanced-reviews/assets/css/yit-advanced-reviews68b3.css?ver=1')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='{{asset('wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min05c8.css?ver=5.13.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='{{asset('wp-content/plugins/elementor/assets/css/frontend-legacy.minb045.css?ver=3.4.8')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='{{asset('wp-content/plugins/elementor/assets/css/frontend.minb045.css?ver=3.4.8')}}' type='text/css' media='all' />  --}}

{{--  <link rel='stylesheet' id='elementor-post-4244-css'  href='{{asset('wp-content/uploads/elementor/css/post-42448daf.css?ver=1637257505')}}' type='text/css' media='all' />  --}}
{{--  <link rel='stylesheet' id='elementor-global-css'  href='{{asset('wp-content/uploads/elementor/css/global8daf.css?ver=1637257505')}}' type='text/css' media='all' />  --}}
<link rel='stylesheet' id='google-roboto-regular-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A700%2C500%2C500i%2C400%2C200%2C300&amp;ver=5.8.2' type='text/css' media='all' />
{{--  <link rel='stylesheet' id='bootstrap-css'  href='{{asset('wp-content/themes/woodmart/css/bootstrap.min03ec.css?ver=5.3.4')}}' type='text/css' media='all' />  --}}
{{--  <link rel='stylesheet' id='child-style-css'  href='{{asset('wp-content/themes/woodmart-child/style97de.css?ver=1.0.5')}}' type='text/css' media='all' />  --}}


<link rel='stylesheet' id='xts-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C700%2C700italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.3.4' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.8.2' type='text/css' media='all' />

{{--  Slider   --}}
<script type='text/javascript' defer src='{{asset('wp-content/plugins/revslider/public/assets/js/rbtools.min3f21.js?ver=6.2.23')}}' id='tp-tools-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/revslider/public/assets/js/rs6.min3f21.js?ver=6.2.23')}}' id='revmin-js'></script>

{{--  Side menu for sm to lg screen   --}}

<script type='text/javascript' defer src='{{asset('wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}' id='jquery-migrate-js'></script>



{{--  <script type='text/javascript' src='{{asset('wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0')}}' id='jquery-core-js'></script>  --}}

{{--  <script type='text/javascript' defer src='{{asset('wp-content/plugins/email-subscribers/lite/public/js/email-subscribers-publicce52.js?ver=5.0.2')}}' id='email-subscribers-js'></script>  --}}

{{--  <script type='text/javascript' defer src='{{asset('wp-content/plugins/kf-plugin/public/js/khaasfood-publiccb18.js?ver=1.0.9')}}' id='khaasfood-js'></script>  --}}


{{--  <script type='text/javascript' defer src='{{asset('wp-content/plugins/woo-shipping-display-mode/public/js/woo-shipping-display-mode-public8a54.js?ver=1.0.0')}}' id='woo-shipping-display-mode-js'></script>  --}}
{{--  <script type='text/javascript' defer src='{{asset('wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min272a.js?ver=2.7.0-wc.5.9.0')}}' id='jquery-blockui-js'></script>  --}}



{{--  <script type='text/javascript' defer src='{{asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minad76.js?ver=5.9.0')}}' id='wc-add-to-cart-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/js/validator8a54.js?ver=1.0.0')}}' id='woodiscuz-validator-js-js'></script>

<script type='text/javascript' defer src='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/js/wpc-ajaxde92.js?ver=2.2.9')}}' id='woodiscuz-ajax-js-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/js/jquery.cookie330a.js?ver=1.4.1')}}' id='woodiscuz-cookie-js-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/third-party/tooltipster/js/jquery.tooltipster.min62ea.js?ver=1.2')}}' id='woodiscuz-tooltipster-js-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/js/jquery.autogrowtextarea.min6aec.js?ver=3.0')}}' id='woodiscuz-autogrowtextarea-js-js'></script>

<script type='text/javascript' defer src='{{asset('wp-content/plugins/wp-total-solr/public/js/wp-total-solr-public9dbf.js?ver=1.0.5.0')}}' id='wp-total-solr-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart91f3.js?ver=6.4.0')}}' id='vc_woocommerce-add-to-cart-js-js'></script>  --}}



{{--  <script type='text/javascript' defer src='{{asset('wp-includes/js/zxcvbn-async.min5152.js?ver=1.0')}}' id='zxcvbn-async-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/device.min03ec.js?ver=5.3.4')}}' id='woodmart-device-js'></script>  --}}




        {{-- Sweet Alert  --}}

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">

		<script src="{{asset('js/print.js')}}"></script>



<!-- JavaScript For Main Slider  -->

<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>

		  
		<style type="text/css" id="wp-custom-css">
			.single .star-rating{ display:inline-block}		</style>
		<style>		
		
		</style><style data-type="woodmart_shortcodes-custom-css">#wd-5f0ea9228ba5c .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea95e0ec8e .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea964863fb .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea9e140be5 .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea973db377 .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea98495f76 .woodmart-title-container{line-height:35px;font-size:25px;}@media (max-width: 1024px) {#wd-5f0ea9228ba5c .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea95e0ec8e .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea964863fb .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea9e140be5 .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea973db377 .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea98495f76 .woodmart-title-container{line-height:35px;font-size:25px;}}@media (max-width: 767px) {#wd-5f0ea9228ba5c .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea95e0ec8e .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea964863fb .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea9e140be5 .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea973db377 .woodmart-title-container{line-height:35px;font-size:25px;}#wd-5f0ea98495f76 .woodmart-title-container{line-height:35px;font-size:25px;}}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1596896889107{margin-top: -45px !important;padding-top: 0px !important;}.vc_custom_1574145287415{background-color: #59793d !important;}.vc_custom_1608711638090{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>			<style data-type="wd-style-header_247386">
				@media (min-width: 1025px) {
	.whb-top-bar-inner {
		height: 28px;
	}


	
	.whb-general-header-inner {
		height: 66px;
	}
	
	.whb-header-bottom-inner {
		height: 52px;
	}
	
	.whb-sticked .whb-top-bar-inner {
		height: 40px;
	}
	
	.whb-sticked .whb-general-header-inner {
		height: 60px;
	}
	
	.whb-sticked .whb-header-bottom-inner {
		height: 52px;
	}
	
	/* HEIGHT OF HEADER CLONE */
	.whb-clone .whb-general-header-inner {
		height: 60px;
	}
	
	/* HEADER OVERCONTENT */
	.woodmart-header-overcontent .title-size-small {
		padding-top: 166px;
	}
	
	.woodmart-header-overcontent .title-size-default {
		padding-top: 206px;
	}
	
	.woodmart-header-overcontent .title-size-large {
		padding-top: 246px;
	}
	
	/* HEADER OVERCONTENT WHEN SHOP PAGE TITLE TURN OFF  */
	.woodmart-header-overcontent .without-title.title-size-small {
		padding-top: 146px;
	}
	
	.woodmart-header-overcontent .without-title.title-size-default {
		padding-top: 181px;
	}
	
	.woodmart-header-overcontent .without-title.title-size-large {
		padding-top: 206px;
	}
	
	/* HEADER OVERCONTENT ON SINGLE PRODUCT */
	.single-product .whb-overcontent:not(.whb-custom-header) {
		padding-top: 146px;
	}
	
	/* HEIGHT OF LOGO IN TOP BAR */
	.whb-top-bar .woodmart-logo img {
		max-height: 28px;
	}
	
	.whb-sticked .whb-top-bar .woodmart-logo img {
		max-height: 40px;
	}
	
	/* HEIGHT OF LOGO IN GENERAL HEADER */
	.whb-general-header .woodmart-logo img {
		max-height: 66px;
	}
	
	.whb-sticked .whb-general-header .woodmart-logo img {
		max-height: 60px;
	}
	
	/* HEIGHT OF LOGO IN BOTTOM HEADER */
	.whb-header-bottom .woodmart-logo img {
		max-height: 52px;
	}
	
	.whb-sticked .whb-header-bottom .woodmart-logo img {
		max-height: 52px;
	}
	
	/* HEIGHT OF LOGO IN HEADER CLONE */
	.whb-clone .whb-general-header .woodmart-logo img {
		max-height: 60px;
	}
	
	/* HEIGHT OF HEADER BUILDER ELEMENTS */
	/* HEIGHT ELEMENTS IN TOP BAR */
	.whb-top-bar .wd-tools-element > a,
	.whb-top-bar .main-nav .item-level-0 > a,
	.whb-top-bar .whb-secondary-menu .item-level-0 > a,
	.whb-top-bar .categories-menu-opener,
	.whb-top-bar .menu-opener,
	.whb-top-bar .whb-divider-stretch:before,
	.whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
	.whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 28px;
	}
	
	.whb-sticked .whb-top-bar .wd-tools-element > a,
	.whb-sticked .whb-top-bar .main-nav .item-level-0 > a,
	.whb-sticked .whb-top-bar .whb-secondary-menu .item-level-0 > a,
	.whb-sticked .whb-top-bar .categories-menu-opener,
	.whb-sticked .whb-top-bar .menu-opener,
	.whb-sticked .whb-top-bar .whb-divider-stretch:before,
	.whb-sticked .whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
	.whb-sticked .whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 40px;
	}
	
	/* HEIGHT ELEMENTS IN GENERAL HEADER */
	.whb-general-header .whb-divider-stretch:before,
	.whb-general-header .navigation-style-bordered .item-level-0 > a {
		height: 66px;
	}
	
	.whb-sticked:not(.whb-clone) .whb-general-header .whb-divider-stretch:before,
	.whb-sticked:not(.whb-clone) .whb-general-header .navigation-style-bordered .item-level-0 > a {
		height: 60px;
	}
	
	.whb-sticked:not(.whb-clone) .whb-general-header .woodmart-search-dropdown,
	.whb-sticked:not(.whb-clone) .whb-general-header .dropdown-cart,
	.whb-sticked:not(.whb-clone) .whb-general-header .woodmart-navigation:not(.vertical-navigation):not(.navigation-style-bordered) .sub-menu-dropdown {
		margin-top: 10px;
	}
	
	.whb-sticked:not(.whb-clone) .whb-general-header .woodmart-search-dropdown:after,
	.whb-sticked:not(.whb-clone) .whb-general-header .dropdown-cart:after,
	.whb-sticked:not(.whb-clone) .whb-general-header .woodmart-navigation:not(.vertical-navigation):not(.navigation-style-bordered) .sub-menu-dropdown:after {
		height: 10px;
	}
	
	/* HEIGHT ELEMENTS IN BOTTOM HEADER */
	.whb-header-bottom .wd-tools-element > a,
	.whb-header-bottom .main-nav .item-level-0 > a,
	.whb-header-bottom .whb-secondary-menu .item-level-0 > a,
	.whb-header-bottom .categories-menu-opener,
	.whb-header-bottom .menu-opener,
	.whb-header-bottom .whb-divider-stretch:before,
	.whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
	.whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 52px;
	}
	
	.whb-header-bottom.whb-border-fullwidth .menu-opener {
		height: 52px;
		margin-top: -0px;
		margin-bottom: -0px;
	}
	
	.whb-header-bottom.whb-border-boxed .menu-opener {
		height: 52px;
		margin-top: -0px;
		margin-bottom: -0px;
	}
	
	.whb-sticked .whb-header-bottom .wd-tools-element > a,
	.whb-sticked .whb-header-bottom .main-nav .item-level-0 > a,
	.whb-sticked .whb-header-bottom .whb-secondary-menu .item-level-0 > a,
	.whb-sticked .whb-header-bottom .categories-menu-opener,
	.whb-sticked .whb-header-bottom .whb-divider-stretch:before,
	.whb-sticked .whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
	.whb-sticked .whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 52px;
	}
	
	.whb-sticked .whb-header-bottom.whb-border-fullwidth .menu-opener {
		height: 52px;
	}
	
	.whb-sticked .whb-header-bottom.whb-border-boxed .menu-opener {
		height: 52px;
	}
	
	.whb-sticky-shadow.whb-sticked .whb-header-bottom .menu-opener {
		height: 52px;
		margin-bottom:0;
	}
	
	/* HEIGHT ELEMENTS IN HEADER CLONE */
	.whb-clone .wd-tools-element > a,
	.whb-clone .main-nav .item-level-0 > a,
	.whb-clone .whb-secondary-menu .item-level-0 > a,
	.whb-clone .categories-menu-opener,
	.whb-clone .menu-opener,
	.whb-clone .whb-divider-stretch:before,
	.whb-clone .navigation-style-bordered .item-level-0 > a,
	.whb-clone form.woocommerce-currency-switcher-form .dd-selected,
	.whb-clone .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 60px;
	}
}

@media (max-width: 1024px) {
	.whb-top-bar-inner {
		height: 0px;
	}
	
	.whb-general-header-inner {
		height: 0px;
	}
	
	.whb-header-bottom-inner {
		height: 52px;
	}
	
	/* HEIGHT OF HEADER CLONE */
	.whb-clone .whb-general-header-inner {
		height: 0px;
	}
	
	/* HEADER OVERCONTENT */
	.woodmart-header-overcontent .page-title {
		padding-top: 67px;
	}
	
	/* HEADER OVERCONTENT WHEN SHOP PAGE TITLE TURN OFF  */
	.woodmart-header-overcontent .without-title.title-shop {
		padding-top: 52px;
	}
	
	/* HEADER OVERCONTENT ON SINGLE PRODUCT */
	.single-product .whb-overcontent:not(.whb-custom-header) {
		padding-top: 52px;
	}
	
	/* HEIGHT OF LOGO IN TOP BAR */
	.whb-top-bar .woodmart-logo img {
		max-height: 0px;
	}
	
	/* HEIGHT OF LOGO IN GENERAL HEADER */
	.whb-general-header .woodmart-logo img {
		max-height: 0px;
	}
	
	/* HEIGHT OF LOGO IN BOTTOM HEADER */
	.whb-header-bottom .woodmart-logo img {
		max-height: 52px;
	}
	
	/* HEIGHT OF LOGO IN HEADER CLONE */
	.whb-clone .whb-general-header .woodmart-logo img {
		max-height: 0px;
	}
	
	/* HEIGHT OF HEADER BULDER ELEMENTS */
	/* HEIGHT ELEMENTS IN TOP BAR */
	.whb-top-bar .wd-tools-element > a,
	.whb-top-bar .main-nav .item-level-0 > a,
	.whb-top-bar .whb-secondary-menu .item-level-0 > a,
	.whb-top-bar .categories-menu-opener,
	.whb-top-bar .whb-divider-stretch:before,
	.whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
	.whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 0px;
	}
	
	/* HEIGHT ELEMENTS IN GENERAL HEADER */
	.whb-general-header .wd-tools-element > a,
	.whb-general-header .main-nav .item-level-0 > a,
	.whb-general-header .whb-secondary-menu .item-level-0 > a,
	.whb-general-header .categories-menu-opener,
	.whb-general-header .whb-divider-stretch:before,
	.whb-general-header form.woocommerce-currency-switcher-form .dd-selected,
	.whb-general-header .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 0px;
	}
	
	/* HEIGHT ELEMENTS IN BOTTOM HEADER */
	.whb-header-bottom .wd-tools-element > a,
	.whb-header-bottom .main-nav .item-level-0 > a,
	.whb-header-bottom .whb-secondary-menu .item-level-0 > a,
	.whb-header-bottom .categories-menu-opener,
	.whb-header-bottom .whb-divider-stretch:before,
	.whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
	.whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 52px;
	}
	
	/* HEIGHT ELEMENTS IN HEADER CLONE */
	.whb-clone .wd-tools-element > a,
	.whb-clone .main-nav .item-level-0 > a,
	.whb-clone .whb-secondary-menu .item-level-0 > a,
	.whb-clone .categories-menu-opener,
	.whb-clone .menu-opener,
	.whb-clone .whb-divider-stretch:before,
	.whb-clone form.woocommerce-currency-switcher-form .dd-selected,
	.whb-clone .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
		height: 0px;
	}
}

.whb-top-bar {
	background-color: #003a1a;border-bottom-style: solid;
}

.whb-general-header {
	background-color: rgba(255, 255, 255, 1);border-bottom-width: 0px;border-bottom-style: solid;
}
.whb-k946yg3cmvlfeml5bkd0 .menu-opener {  }.whb-k946yg3cmvlfeml5bkd0 .menu-opener { border-bottom-style: solid; }.whb-k946yg3cmvlfeml5bkd0.wd-more-cat:not(.wd-show-cat) .item-level-0:nth-child(n+6):not(:last-child) {
				    display: none;
				}.wd-more-cat .item-level-0:nth-child(n+6) {
				    animation: wd-fadeIn .3s ease both;
				}
				.wd-show-cat .wd-more-cat-btn {
				    display: none;
				}
.whb-header-bottom {
	background-color: rgba(255, 255, 255, 1);border-bottom-width: 0px;border-bottom-style: solid;
}
			</style>
						<style data-type="wd-style-theme_settings_default">
				.page-title-default{
	background-color:#0a0a0a;
	background-image: url({{asset('wp-content/uploads/2020/06/dummy-wood-title.jpg')}});
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center center;
}

.footer-container{
	background-color:#003a1a;
}

body, .font-text, .menu-item-register .create-account-link, .menu-label, .widgetarea-mobile .widget_currency_sel_widget .widget-title, .widgetarea-mobile .widget_icl_lang_sel_widget .widget-title, .wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic.vc_tta-accordion .vc_tta-panel-title, .woodmart-more-desc table th, .woocommerce-product-details__short-description table th, .product-image-summary .shop_attributes th{
	font-family: "Lato", Arial, Helvetica, sans-serif;
}

.font-primary, table th, .page-title .entry-title, .masonry-filter li, .widget_rss ul li > a, .woodmart-price-table .woodmart-plan-title, .wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic.vc_tta-tabs .vc_tta-tab > a, .woodmart-sizeguide-table tr:first-child td, .tabs-layout-tabs .tabs li, .woodmart-accordion-title, .woodmart-checkout-steps ul, .woocommerce-billing-fields > h3, .woocommerce-shipping-fields > h3, .woocommerce-additional-fields > h3, #ship-to-different-address label, #order_review_heading, .cart-totals-inner h2, .wood-login-divider, .woocommerce-MyAccount-title, header.title > h3, .woocommerce-column__title, .compare-field, .compare-value:before, .compare-basic .compare-value:before, .woodmart-wishlist-title, .woodmart-empty-page, .woodmart-products-tabs .tabs-name, .woodmart-products-tabs .products-tabs-title, #order_payment_heading, h1, h2, h3, h4, h5, h6, .title, legend, .woocommerce-Reviews .comment-reply-title, .menu-mega-dropdown .sub-menu > li > a, .mega-menu-list > li > a{
	font-family: "Poppins", Arial, Helvetica, sans-serif;
}

.blog-post-loop .entry-title, .post-single-page .entry-title, .single-post-navigation .post-title, .portfolio-entry .entry-title, td.product-name a, .category-grid-item .category-title, .product_title, .autocomplete-suggestion .suggestion-title, .widget_recent_entries ul li a, .widget_recent_comments ul li > a, .woodmart-recent-posts .entry-title a, .woodmart-menu-price .menu-price-title, .product-title, .product-grid-item .product-title, .group_table td.label a{
	font-family: "Poppins", Arial, Helvetica, sans-serif;
}

.font-alt{
	font-family: "Lato", Arial, Helvetica, sans-serif;font-weight: 400;
}

.widgettitle, .widgettitle a, .widget-title, .widget-title a{
	font-family: "Poppins", Arial, Helvetica, sans-serif;font-weight: 600;
}

.main-nav-style, .menu-opener, .categories-menu-dropdown .item-level-0 > a, .wd-tools-element .wd-tools-text, .main-nav .item-level-0 > a, .whb-secondary-menu .item-level-0 > a, .full-screen-nav .item-level-0 > a, .wd-tools-element .wd-tools-count, .woodmart-cart-design-2 .woodmart-cart-number, .woodmart-cart-design-5 .woodmart-cart-number{
	font-family: "Lato", Arial, Helvetica, sans-serif;font-weight: 700;font-size: 13px;
}

.page-title > .container .entry-title{
	font-size: 25px;
}

a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, blockquote footer:before, blockquote cite, blockquote cite a, .color-scheme-dark a:hover, .color-primary, .woodmart-dark .color-primary, .woodmart-cart-design-3 .woodmart-cart-subtotal .amount, .menu-item-register .create-account-link, .menu-item-register .create-account-link:hover, .btn-style-bordered.btn-color-primary, .mega-menu-list > li > a:hover, .mega-menu-list .sub-sub-menu li a:hover, .site-mobile-menu li.current-menu-item > a, .site-mobile-menu .sub-menu li.current-menu-item > a, .dropdowns-color-light .site-mobile-menu li.current-menu-item > a, .dropdowns-color-light .site-mobile-menu .sub-menu li.current-menu-item > a, .comments-area .reply a, .comments-area .reply a:hover, .comments-area .logged-in-as > a:hover, .blog-post-loop .entry-title a:hover, .read-more-section a, .read-more-section a:hover, .single-post-navigation .blog-posts-nav-btn a:hover, .error404 .page-title, .not-found .entry-header:before, .subtitle-color-primary.subtitle-style-default, .wpb_wrapper .title-wrapper u, .woodmart-title-color-primary .subtitle-style-default, .wpb_wrapper .promo-banner u, .instagram-widget .clear a:hover, .box-icon-wrapper.box-with-text, .woodmart-price-table.price-style-alt .woodmart-price-currency, .woodmart-price-table.price-style-alt .woodmart-price-value, .woodmart-menu-price.cursor-pointer:hover .menu-price-title, .hotspot-icon-alt .hotspot-btn:after, p.stock.in-stock:before, td.woocommerce-orders-table__cell-order-number a:hover, .wd-action-btn > a:hover, .amount, .price, .price ins, a.login-to-prices-msg, a.login-to-prices-msg:hover, .woodmart-accordion-title:hover, .woodmart-accordion-title.active, .woodmart-dark .woodmart-accordion-title:hover, .woodmart-dark .woodmart-accordion-title.active, .woocommerce-form-coupon-toggle > .woocommerce-info .showcoupon, .woocommerce-form-coupon-toggle > .woocommerce-info .showlogin, .woocommerce-form-login-toggle > .woocommerce-info .showcoupon, .woocommerce-form-login-toggle > .woocommerce-info .showlogin, .cart-totals-inner .shipping-calculator-button, .woodmart-dark .cart-totals-inner .shipping-calculator-button, .login-form-footer .lost_password, .login-form-footer .lost_password:hover, .woocommerce-order-pay td.product-total .amount, .woodmart-my-account-links a:hover:before, .woodmart-my-account-links a:focus:before, .woocommerce-Address-title .edit:hover, .woodmart-products-tabs.tabs-design-simple .products-tabs-title li.active-tab-title, .brands-list .brand-item a:hover, #dokan-store-listing-filter-wrap .right .toggle-view .active, .whb-color-dark .navigation-style-default .item-level-0:hover > a, .whb-color-dark .navigation-style-default .item-level-0.current-menu-item > a, .navigation-style-default .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .navigation-style-separated .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .navigation-style-bordered .menu-mega-dropdown .color-scheme-dark .sub-menu > li > a:hover, .vertical-navigation .menu-mega-dropdown .sub-menu > li > a:hover, .navigation-style-default .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .navigation-style-separated .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .navigation-style-bordered .menu-mega-dropdown .color-scheme-dark .sub-sub-menu li a:hover, .vertical-navigation .menu-mega-dropdown .sub-sub-menu li a:hover{
	color:#003a1a;
}

.menu-opener:not(.has-bg), .search-style-with-bg.searchform .searchsubmit, .woodmart-cart-design-4 .woodmart-cart-number, .btn.btn-color-primary, .btn-style-bordered.btn-color-primary:hover, .menu-label-primary, .main-nav .item-level-0.callto-btn > a, .mobile-nav-tabs li:after, .icon-sub-menu.up-icon, .comment-form .submit, .color-scheme-light .woodmart-entry-meta .meta-reply .replies-count, .blog-design-mask .woodmart-entry-meta .meta-reply .replies-count, .woodmart-dark .woodmart-entry-meta .meta-reply .replies-count, .meta-post-categories, .woodmart-single-footer .tags-list a:hover:after, .woodmart-single-footer .tags-list a:focus:after, .woodmart-pagination > span:not(.page-links-title), .page-links > span:not(.page-links-title), .widget_tag_cloud .tagcloud a:hover, .widget_tag_cloud .tagcloud a:focus, .widget_product_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:focus, .widget_calendar #wp-calendar #today, .slider-title:before, .mc4wp-form input[type=submit], .subtitle-color-primary.subtitle-style-background, .woodmart-title-color-primary .subtitle-style-background, .woodmart-title-style-simple.woodmart-title-color-primary .liner-continer:after, .icons-design-simple .woodmart-social-icon:hover, .timer-style-active .woodmart-timer > span, .woodmart-price-table .woodmart-plan-footer > a, .woodmart-price-table.price-style-default .woodmart-plan-price, .hotspot-icon-default .hotspot-btn, .hotspot-icon-alt .woodmart-image-hotspot.hotspot-opened .hotspot-btn, .hotspot-icon-alt .woodmart-image-hotspot:hover .hotspot-btn, .hotspot-content .add_to_cart_button, .hotspot-content .product_type_variable, .widget_product_categories .product-categories li a:hover + .count, .widget_product_categories .product-categories li a:focus + .count, .widget_product_categories .product-categories li.current-cat > .count, .woodmart-woocommerce-layered-nav .layered-nav-link:hover + .count, .woodmart-woocommerce-layered-nav .layered-nav-link:focus + .count, .woodmart-woocommerce-layered-nav .chosen .count, td.woocommerce-orders-table__cell-order-actions a, .popup-quick-view .woodmart-scroll-content > a, .popup-quick-view .view-details-btn, .product-label.onsale, .widget_shopping_cart .buttons .checkout, .widget_price_filter .ui-slider .ui-slider-range, .widget_price_filter .ui-slider .ui-slider-handle:after, .wd-widget-stock-status a.wd-active:before, .widget_layered_nav ul .chosen a:before, .woocommerce-store-notice, div.quantity input[type=button]:hover, .woodmart-stock-progress-bar .progress-bar, .woocommerce-pagination li .current, .cat-design-replace-title .category-title, .woodmart-hover-base:not([class*=add-small]) .wd-bottom-actions .woodmart-add-btn > a, .woodmart-hover-alt .woodmart-add-btn > a span:before, .woodmart-hover-quick .woodmart-add-btn > a, .product-list-item .woodmart-add-btn > a, .woodmart-hover-standard .woodmart-add-btn > a, .single_add_to_cart_button, .tabs-layout-tabs .tabs li a:after, .wd-add-img-msg:before, .checkout_coupon .button, #place_order, .cart-totals-inner .checkout-button, .cart-actions .button[name=apply_coupon], .register .button, .login .button, .lost_reset_password .button, .woocommerce-MyAccount-content > p:not(.woocommerce-Message):first-child mark, .woocommerce-MyAccount-content > .button, .order-info mark, .order-again .button, .woocommerce-Button--next, .woocommerce-Button--previous, .woocommerce-MyAccount-downloads-file, .account-payment-methods-table .button, button[name=save_account_details], button[name=save_address], button[name=track], .woodmart-compare-col .button, .woodmart-compare-col .added_to_cart, .return-to-shop .button, .woodmart-pf-btn button, table.wishlist_table .product-add-to-cart a.button.add_to_cart, div.wcmp_regi_main .button, .dokan-dashboard a.dokan-btn, .dokan-dashboard button.dokan-btn, .dokan-dashboard input[type=submit].dokan-btn, .dokan-dashboard a.dokan-btn:hover, .dokan-dashboard a.dokan-btn:focus, .dokan-dashboard button.dokan-btn:hover, .dokan-dashboard button.dokan-btn:focus, .dokan-dashboard input[type=submit].dokan-btn:hover, .dokan-dashboard input[type=submit].dokan-btn:focus, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.active, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover, .dokan-single-seller .store-footer .dokan-btn-round, .dokan-single-seller .store-footer .dokan-btn-round:hover, #dokan-store-listing-filter-wrap .right .item .dokan-btn-theme, .woocommerce-MyAccount-content .dokan-btn-theme, .woocommerce-MyAccount-content .dokan-btn-theme:focus, #dokan-store-listing-filter-form-wrap .apply-filter #apply-filter-btn, #dokan-store-listing-filter-form-wrap .apply-filter #apply-filter-btn:focus, #yith-wpv-abuse, .yith-ywraq-add-to-quote .yith-ywraq-add-button .button.add-request-quote-button, body .select2-container--default .select2-results__option[aria-selected=true], .wd-tools-element .wd-tools-count, .woodmart-cart-design-2 .woodmart-cart-number, .woodmart-cart-design-5 .woodmart-cart-number, .navigation-style-underline .nav-link-text:after, .masonry-filter li a:after, .wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic.vc_tta-tabs .vc_tta-tab .vc_tta-title-text:after, .category-nav-link .category-name:after, .woodmart-checkout-steps ul li span:after, .woodmart-products-tabs.tabs-design-default .products-tabs-title .tab-label:after, .woodmart-products-tabs.tabs-design-alt .products-tabs-title .tab-label:after{
	background-color:#003a1a;
}

 /* Search Border  */
.s {
    border: 2px solid #003a1a !Important;
}

blockquote, .border-color-primary, .btn-style-bordered.btn-color-primary, .btn-style-link.btn-color-primary, .btn-style-link.btn-color-primary:hover, .menu-label-primary:before, .woodmart-single-footer .tags-list a:hover, .woodmart-single-footer .tags-list a:focus, .widget_tag_cloud .tagcloud a:hover, .widget_tag_cloud .tagcloud a:focus, .widget_product_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:focus, .woodmart-title-style-underlined.woodmart-title-color-primary .title, .woodmart-title-style-underlined-2.woodmart-title-color-primary .title, .woodmart-price-table.price-highlighted .woodmart-plan-inner, .widget_product_categories .product-categories li a:hover + .count, .widget_product_categories .product-categories li a:focus + .count, .widget_product_categories .product-categories li.current-cat > .count, .woodmart-woocommerce-layered-nav .layered-nav-link:hover + .count, .woodmart-woocommerce-layered-nav .layered-nav-link:focus + .count, .woodmart-woocommerce-layered-nav .chosen .count, .wd-widget-stock-status a.wd-active:before, .widget_layered_nav ul li a:hover:before, .wd-widget-stock-status a:hover:before, .widget_layered_nav ul .chosen a:before, div.quantity input[type=button]:hover, .woocommerce-ordering select:focus, .woodmart-products-tabs.tabs-design-simple .tabs-name, .woodmart-highlighted-products .elements-grid, .woodmart-highlighted-products.woodmart-carousel-container, .dokan-dashboard a.dokan-btn, .dokan-dashboard button.dokan-btn, .dokan-dashboard input[type=submit].dokan-btn, .dokan-dashboard a.dokan-btn:hover, .dokan-dashboard a.dokan-btn:focus, .dokan-dashboard button.dokan-btn:hover, .dokan-dashboard button.dokan-btn:focus, .dokan-dashboard input[type=submit].dokan-btn:hover, .dokan-dashboard input[type=submit].dokan-btn:focus, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.active, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, .dokan-dashboard-wrap .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover{
	border-color:#83b735;
}

.with-animation .info-svg-wrapper path{
	stroke:#83b735;
}

.color-alt, .woodmart-dark .color-alt, .btn-style-bordered.btn-color-alt, .subtitle-color-alt.subtitle-style-default, .woodmart-title-color-alt .subtitle-style-default{
	color:#fbbc34;
}

.btn.btn-color-alt, .btn-style-bordered.btn-color-alt:hover, .menu-label-secondary, .subtitle-color-alt.subtitle-style-background, .woodmart-title-color-alt .subtitle-style-background, .woodmart-title-style-simple.woodmart-title-color-alt .liner-continer:after{
	background-color:#fbbc34;
}

.border-color-alternative, .btn-style-bordered.btn-color-alt, .btn-style-link.btn-color-alt, .btn-style-link.btn-color-alt:hover, .menu-label-secondary:before, .woodmart-title-style-underlined.woodmart-title-color-alt .title, .woodmart-title-style-underlined-2.woodmart-title-color-alt .title{
	border-color:#fbbc34;
}

.wd-age-verify-forbidden:hover, .widget_shopping_cart .buttons .btn-cart:hover, .widget_price_filter .price_slider_amount .button:hover, .cart-totals-inner .shipping-calculator-form .button:hover, .cart-actions .button[name="update_cart"]:hover, .woodmart-switch-to-register:hover, .wcmp-quick-info-wrapper input[type="submit"]:hover, .simplePopup .submit-report-abuse:hover, .vendor_sort input[type="submit"]:hover, #dokan-form-contact-seller.seller-form input.dokan-btn-theme:hover{
	background-color:#efefef;
}

.hotspot-content .add_to_cart_button, .hotspot-content .product_type_variable, td.woocommerce-orders-table__cell-order-actions a, .popup-quick-view .woodmart-scroll-content > a, .woodmart-sticky-add-to-cart, .popup-added_to_cart .view-cart, .widget_shopping_cart .buttons .checkout, .woodmart-hover-base:not([class*="add-small"]) .wd-bottom-actions .woodmart-add-btn > a, .product-list-item .woodmart-add-btn > a, .woodmart-hover-standard .woodmart-add-btn > a, .single_add_to_cart_button, .checkout_coupon .button, #place_order, .cart-totals-inner .checkout-button, .cart-actions .button[name="apply_coupon"], .register .button, .login .button, .lost_reset_password .button, .social-login-btn > a, .woocommerce-MyAccount-content > .button, .order-again .button, .woocommerce-Button--next, .woocommerce-Button--previous, .woocommerce-MyAccount-downloads-file, .account-payment-methods-table .button, button[name="save_account_details"], button[name="save_address"], button[name="track"], .woodmart-compare-col .button, .woodmart-compare-col .added_to_cart, .return-to-shop .button, .woodmart-pf-btn button, table.wishlist_table .product-add-to-cart a.button.add_to_cart, #dokan-store-listing-filter-wrap .right .item .dokan-btn-theme, .woocommerce-MyAccount-content .dokan-btn-theme, #dokan-store-listing-filter-form-wrap .apply-filter #apply-filter-btn, .yith-ywraq-add-to-quote .yith-ywraq-add-button .button.add-request-quote-button{
	background-color:#003a1a;
}

.hotspot-content .add_to_cart_button:hover, .hotspot-content .product_type_variable:hover, td.woocommerce-orders-table__cell-order-actions a:hover, .popup-quick-view .woodmart-scroll-content > a:hover, .woodmart-sticky-add-to-cart:hover, .popup-added_to_cart .view-cart:hover, .widget_shopping_cart .buttons .checkout:hover, .woodmart-hover-base:not([class*="add-small"]) .wd-bottom-actions .woodmart-add-btn > a:hover, .product-list-item .woodmart-add-btn > a:hover, .woodmart-hover-standard .woodmart-add-btn > a:hover, .single_add_to_cart_button:hover, .checkout_coupon .button:hover, #place_order:hover, .cart-totals-inner .checkout-button:hover, .cart-actions .button[name="apply_coupon"]:hover, .register .button:hover, .login .button:hover, .lost_reset_password .button:hover, .social-login-btn > a:hover, .woocommerce-MyAccount-content > .button:hover, .order-again .button:hover, .woocommerce-Button--next:hover, .woocommerce-Button--previous:hover, .woocommerce-MyAccount-downloads-file:hover, .account-payment-methods-table .button:hover, button[name="save_account_details"]:hover, button[name="save_address"]:hover, button[name="track"]:hover, .woodmart-compare-col .button:hover, .woodmart-compare-col .added_to_cart:hover, .return-to-shop .button:hover, .woodmart-pf-btn button:hover, table.wishlist_table .product-add-to-cart a.button.add_to_cart:hover, #dokan-store-listing-filter-wrap .right .item .dokan-btn-theme:hover, .woocommerce-MyAccount-content .dokan-btn-theme:hover, #dokan-store-listing-filter-form-wrap .apply-filter #apply-filter-btn:hover, .yith-ywraq-add-to-quote .yith-ywraq-add-button .button.add-request-quote-button:hover{
	background-color:#6ca300;
}

.main-nav .item-level-0.callto-btn > a, .comment-form .submit, .post-password-form input[type="submit"], .cookies-buttons .cookies-accept-btn, .mc4wp-form input[type="submit"], .wd-age-verify-allowed, .woodmart-price-table .woodmart-plan-footer > a, div.wcmp_regi_main .button, #yith-wpv-abuse{
	background-color:#83b735;
}

.main-nav .item-level-0.callto-btn > a:hover, .comment-form .submit:hover, .post-password-form input[type="submit"]:hover, .cookies-buttons .cookies-accept-btn:hover, .mc4wp-form input[type="submit"]:hover, .wd-age-verify-allowed:hover, .woodmart-price-table .woodmart-plan-footer > a:hover, div.wcmp_regi_main .button:hover, #yith-wpv-abuse:hover{
	background-color:#6ca300;
}

.woodmart-promo-popup{
	background-color:#111111;
	background-repeat:no-repeat;
	background-size:contain;
	background-position:left center;
}

@font-face {
	font-weight: normal;
	font-style: normal;
	font-family: "woodmart-font";
	src: url("{{asset('wp-content/themes/woodmart/fonts/woodmart-font0fbf.woff?v=5.3.4')}}") format("woff"),
	url("{{asset('wp-content/themes/woodmart/fonts/woodmart-font0fbf.woff2?v=5.3.4')}}") format("woff2");
}


	/* Site width */

	/* Header Boxed */
	@media (min-width: 1025px) {
		.whb-boxed:not(.whb-sticked):not(.whb-full-width) .whb-main-header {
			max-width: 1192px;
		}
	}

	.container {
		max-width: 1222px;
	}

	
	@media (min-width: 1222px) {

		[data-vc-full-width]:not([data-vc-stretch-content]) {
			padding-left: calc((100vw - 1222px) / 2);
			padding-right: calc((100vw - 1222px) / 2);
		}

		.platform-Windows [data-vc-full-width]:not([data-vc-stretch-content]) {
			padding-left: calc((100vw - 1239px) / 2);
			padding-right: calc((100vw - 1239px) / 2);
		}
	}

	
/* Quick view */
.popup-quick-view {
	max-width: 920px;
}

/* Shop popup */
.woodmart-promo-popup {
	max-width: 800px;
}

/* Age verify */
.wd-age-verify {
	max-width: 500px;
}

/* Header Banner */
.header-banner {
	height: 40px;
}

.header-banner-display .website-wrapper {
	margin-top:40px;
}

/* Tablet */
@media (max-width: 1024px) {
	/* header Banner */
	.header-banner {
		height: 40px;
	}
	
	.header-banner-display .website-wrapper {
		margin-top:40px;
	}
}

.woodmart-woocommerce-layered-nav .woodmart-scroll-content {
	max-height: 280px;
}
		
.notifications-sticky .mc4wp-alert, .notifications-sticky .woocommerce-error, .notifications-sticky .woocommerce-info, .notifications-sticky .woocommerce-message, .notifications-sticky .yith_ywraq_add_item_product_message, .notifications-sticky div.wpcf7-response-output{ top:0; bottom:auto}
.notifications-sticky .hidden-notice.mc4wp-alert, .notifications-sticky .hidden-notice.woocommerce-error, .notifications-sticky .hidden-notice.woocommerce-info, .notifications-sticky .hidden-notice.woocommerce-message, .notifications-sticky .hidden-notice.yith_ywraq_add_item_product_message, .notifications-sticky div.hidden-notice.wpcf7-response-output {
    -webkit-animation: wd-fadeOutUpBig .35s ease both;
    animation: wd-fadeOutUpBig .35s ease both; 
}

.category-grid-item img{ height:auto!important; width:80%!important; margin:-20px auto}
.loginViaContainer .digor{ display:none }			</style>
			<!-- WooCommerce Google Analytics Integration -->
		<script type='text/javascript'>
			var gaProperty = 'UA-87071692-1';
			var disableStr = 'ga-disable-' + gaProperty;
			if ( document.cookie.indexOf( disableStr + '=true' ) > -1 ) {
				window[disableStr] = true;
			}
			function gaOptout() {
				document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
				window[disableStr] = true;
			}
		</script><script type='text/javascript'>var _gaq = _gaq || [];
		_gaq.push(
			['_setAccount', 'UA-87071692-1'], ['_gat._anonymizeIp'],
			['_setCustomVar', 1, 'logged-in', 'no', 1],
			['_trackPageview']);</script>
		<!-- /WooCommerce Google Analytics Integration -->
    
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">  
		
		<style>
			.woodmart-info-box{
				display: none;
			}
			
			.vertical-navigation .menu-item-design-full-width .sub-menu-dropdown{
				width:300px;
			}
			
		

			.blog_title, .blog_text{
				padding: 1rem;

			}
			footer.footer-container.color-scheme-light{
				margin-top: 40px
			}

			@media (max-width: 767px){
#wd-5f0ea95e0ec8e .woodmart-title-container {
    line-height: 35px;
    font-size: 15px;
}
			}
			
			
				</style>


    </head>

<body class="home page-template-default page page-id-57 theme-woodmart woocommerce-no-js wrapper-full-width form-style-rounded form-border-width-2 categories-accordion-on woodmart-ajax-shop-on offcanvas-sidebar-mobile offcanvas-sidebar-tablet notifications-sticky sticky-toolbar-on btns-default-rounded btns-default-dark btns-default-hover-dark btns-shop-rounded btns-shop-light btns-shop-hover-light btns-accent-rounded btns-accent-light btns-accent-hover-light wpb-js-composer js-comp-ver-6.4.0 vc_responsive elementor-default elementor-kit-4244 elementor-page elementor-page-57">

	
		
	<div class="website-wrapper">

		
			<!-- HEADER -->
							
			
	<header class="whb-header whb-sticky-shadow whb-scroll-stick whb-sticky-real">
					<div class="whb-main-header">
	
<div class="whb-row whb-top-bar whb-not-sticky-row whb-with-bg whb-without-border whb-color-light whb-flex-flex-middle whb-hidden-mobile">
	<div class="container">
		<div class="whb-flex-row whb-top-bar-inner">
			<div class="whb-column whb-col-left whb-visible-lg whb-empty-column">
	</div>
<div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
	</div>

	<!-- First nav top green bar content start -->



<div class="whb-column whb-col-right whb-visible-lg pt-3">
	<div class="whb-navigation whb-secondary-menu site-navigation woodmart-navigation menu-right navigation-style-default" role="navigation">
	<div class="menu-top-bar-right-container"><ul id="menu-top-bar-right" class="menu"><li id="menu-item-3527" class="english_menu_cat menu-item menu-item-type-post_type menu-item-object-page menu-item-3527 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="{{route('product.premium')}}" class="woodmart-nav-link"><span class="nav-link-text">Gift items</span></a></li>
{{--  <li id="menu-item-3537" class="english_menu_cat menu-item menu-item-type-post_type menu-item-object-page menu-item-3537 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="how-to-order/index.html" class="woodmart-nav-link"><span class="nav-link-text">How to order</span></a></li>  --}}
{{--  <li id="menu-item-3539" class="english_menu_cat menu-item menu-item-type-post_type menu-item-object-page menu-item-3539 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="faqs/index.html" class="woodmart-nav-link"><span class="nav-link-text">FAQs</span></a></li>  --}}
</ul></div></div>

</div>

	<!-- First nav top green bar End -->


<div class="whb-column whb-col-mobile whb-hidden-lg whb-empty-column">
	</div>
		</div>


	</div>
</div>


<!-- -----------------Menu bar Start -->

<div class="whb-row whb-general-header whb-not-sticky-row whb-with-bg whb-without-border whb-color-dark whb-flex-flex-middle whb-hidden-mobile">
	<div class="container">
		<div class="whb-flex-row whb-general-header-inner">
			<div class="whb-column whb-col-left whb-visible-lg">
	<div class="site-logo">
	<div class="woodmart-logo-wrap switch-logo-enable">
		<a href="{{route('frontend.product.index')}}" class="woodmart-logo woodmart-main-logo" rel="home">
			@isset($logo[0])
			<img src="{{asset($logo[0]->image)}}" alt="" style="max-width: 250px;" />	

			@endisset
			</a>
								<a href="{{route('frontend.product.index')}}" class="woodmart-logo woodmart-sticky-logo" rel="home">
				<img src="{{asset('wp-content/uploads/2020/06/logoIcon.png')}}" alt="Khaasfood" style="max-width: 205px;" />			</a>
			</div>
</div>
<div class="whb-space-element " style="width:120px;"></div></div>
<div class="whb-column whb-col-center whb-visible-lg">
	<div class="whb-navigation whb-primary-menu main-nav site-navigation woodmart-navigation menu-left navigation-style-default" role="navigation">
	<div class="menu-main-navigation-container"><ul id="menu-main-navigation" class="menu"><li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-57 current_page_item menu-item-380 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="{{route('frontend.product.index')}}" class="woodmart-nav-link"><span class="nav-link-text">Home</span></a></li>
<li id="menu-item-405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-405 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover"><a href="{{route('products.all')}}" class="woodmart-nav-link"><span class="nav-link-text">Products</span></a></li>
<li id="menu-item-24259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24259 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="{{route('product.premium')}}" class="woodmart-nav-link"><span class="nav-link-text">Gift Items</span></a></li>
{{-- <li id="menu-item-3410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3410 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="business/index.html" class="woodmart-nav-link"><span class="nav-link-text">Stores</span></a></li> --}}
<li id="menu-item-3407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3407 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="{{route('frontend.contact_us')}}" class="woodmart-nav-link"><span class="nav-link-text">Contact Us</span></a></li>
{{-- <li id="menu-item-16920" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16920 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover"><a href="track-order/index.html" class="woodmart-nav-link"><span class="nav-link-text">Track Order</span></a></li> --}}

</ul></div></div>

<!--END MAIN-NAV-->


</div>
<div class="whb-column whb-col-right whb-visible-lg">
	@isset($socials[0])
		
	
			<div class="woodmart-social-icons text-center icons-design-colored icons-size-small color-scheme-dark social-follow social-form-square">
									<a rel="nofollow" href="{{$socials[0]->facebook}}" target="_blank" class=" woodmart-social-icon social-facebook">
						<i></i>
						<span class="woodmart-social-icon-name">Facebook</span>
					</a>
					
						<a rel="nofollow" href="{{$socials[0]->facebook2}}" target="_blank" class=" woodmart-social-icon social-facebook">
						<i></i>
						<span class="woodmart-social-icon-name">Facebook</span>
					</a>
				
				
				
									<a rel="nofollow" href="{{$socials[0]->instagram}}" target="_blank" class=" woodmart-social-icon social-instagram">
						<i></i>
						<span class="woodmart-social-icon-name">Instagram</span>
					</a>
				
									<a rel="nofollow" href="{{$socials[0]->youtube}}" target="_blank" class=" woodmart-social-icon social-youtube">
						<i></i>
						<span class="woodmart-social-icon-name">YouTube</span>
					</a>
				
				
				
									<a rel="nofollow" href="{{$socials[0]->linkedin}}" target="_blank" class=" woodmart-social-icon social-linkedin">
						<i></i>
						<span class="woodmart-social-icon-name">linkedin</span>
					</a>
				
				
									
				
			</div>
			@endisset
		</div>
<div class="whb-column whb-mobile-left whb-hidden-lg whb-empty-column">
	</div>
<div class="whb-column whb-mobile-center whb-hidden-lg whb-empty-column">
	</div>
<div class="whb-column whb-mobile-right whb-hidden-lg whb-empty-column">
	</div>
		</div>
	</div>
</div>


<!-- -----------------Menu bar End -->



<div class="whb-row whb-header-bottom whb-sticky-row whb-with-bg whb-without-border whb-color-dark whb-flex-flex-middle">
	<div class="container">
		<div class="whb-flex-row whb-header-bottom-inner">
			<div class="whb-column whb-col-left whb-visible-lg">


	<!-- Site Logo  start		 -->



	<div class="site-logo">
	<div class="woodmart-logo-wrap">
		<a href="{{route('frontend.product.index')}}" class="woodmart-logo woodmart-main-logo" rel="home">
			@isset($logo[0]->image)

			<img src="{{asset($logo[0]->image)}}" alt="Khaasfood" style="max-width: 204px;" />		
		@endisset
		</a>
			</div>
</div>

	<!-- Site Logo  End		 -->


	<!-- Navigation Menu (Hover to open) -->


<div class="header-categories-nav show-on-hover whb-k946yg3cmvlfeml5bkd0" role="navigation">
	<div class="header-categories-nav-wrap">
		<span class="menu-opener color-scheme-light">
							<span class="woodmart-burger"></span>
			
			<span class="menu-open-label">
				Browse Categories			</span>
			<span class="arrow-opener"></span>
		</span>
		<div class="categories-menu-dropdown vertical-navigation woodmart-navigation">
			<div class="menu-categories-container"><ul id="menu-categories" class="menu wd-cat-nav">
				

				



<!-- Category Menu items  -->

@foreach($categories as $category)

<li id="menu-item-3421" class="english_menu_cat menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3421 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children dropdown-load-ajax">
	<a href="{{route('frontend.product.sub_list', $category->slug )}}" class="woodmart-nav-link">
		<span class="nav-link-text">{{$category->name}}</span></a>
<div class=" sub-menu-dropdown  color-scheme-dark">


<div class="container">
	<div class="vc_row wpb_row vc_row-fluid">
		
		<div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
		<!-- <div class="wpb_text_column wpb_content_element">
			<div class="wpb_wrapper">
				<h3><a href="https://www.khaasfood.com/product-category/honey/natural_honey/"><strong>Natural</strong></a></h3>
	
			</div>
		</div> -->

		       <!-- Sub category Menu items -->
@if($category->child_category()->count() > 0)
@foreach($category->child_category as $subcategory)
<p>
    <a href="{{route('frontend.product.products_list',$subcategory->slug)}}">{{$subcategory->name}}
	</a>
</p>

@endforeach
@endif
		<div class="wpb_text_column wpb_content_element">
			<div class="wpb_wrapper">
				
	
			</div>
		</div>
	</div></div>
</div>
	
	



</div>

<style data-type="vc_shortcodes-custom-css"></style>
	</div>






</div>
</li>
@endforeach



</ul></div>		</div>
	</div>
</div>




</div>



<div class="whb-column whb-col-center whb-visible-lg">
				<div class="woodmart-search-form">
								<form role="search" method="get" class="searchform  has-categories-dropdown search-style-default wts-ajax-search" action="{{route('products.filter')}}"  data-thumbnail="1" data-price="1" data-post_type="product" data-count="20" data-sku="0" data-symbols_count="3">
					<input type="text" class="s" placeholder="Search for products" value="" name="search" />
					{{-- <input type="hidden" name="post_type" value="product"> --}}
								{{-- <div class="search-by-category input-dropdown">
				<div class="input-dropdown-inner woodmart-scroll-content">
					<input type="hidden" name="product_cat" value="0">
					<a href="#" data-val="0">Select category</a>
					<div class="list-wrapper woodmart-scroll">

					</div>
				</div>
			</div> --}}
								<button type="submit" class="searchsubmit">
						Search											</button>
				</form>
													<div class="search-results-wrapper"><div class="woodmart-scroll"><div class="woodmart-search-results woodmart-scroll-content"></div></div><div class="woodmart-search-loader wd-fill"></div></div>
							</div>
		</div>



<div class="whb-column whb-col-right whb-visible-lg">
	<div class="whb-navigation whb-secondary-menu site-navigation woodmart-navigation menu-left navigation-style-default" role="navigation">
	</div><!--END MAIN-NAV-->



	@guest
<div class="woodmart-header-links woodmart-navigation menu-simple-dropdown wd-tools-element item-event-hover  my-account-with-text login-side-opener">
			<a href="{{route('login')}}" title="My account">
			<span class="wd-tools-icon">
							</span>
			<span class="wd-tools-text">
				Login / Register			</span>
		</a>
		
			</div>

@endguest

@auth
<div class="woodmart-header-links woodmart-navigation menu-simple-dropdown wd-tools-element item-event-hover  my-account-with-text ">
			<a href="{{route('frontend.user.profile', auth()->user()->id)}}" title="My account">
			<span class="wd-tools-icon">
							</span>
			<span class="wd-tools-text">
				My Account			</span>
		</a>
		
			</div>

@endauth


<div class="woodmart-shopping-cart wd-tools-element woodmart-cart-design-2">
	<a href="{{route('cart.index')}}" title="Shopping cart">
		<span class="woodmart-cart-icon wd-tools-icon">
						                                                 
			@php    
			$data=[];
			   $data['cart'] = session('cart')? session('cart'):[];
			   $totalCartProducts = array_sum(array_column($data['cart'],'quantity'));
				 @endphp 
										<span class="woodmart-cart-number total-items total_cart_items">{{$totalCartProducts}}<span>items</span></span>
							</span>
		{{-- <span class="woodmart-cart-totals wd-tools-text">
			
			<span class="subtotal-divider">/</span>
						<span class="woodmart-cart-subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>0</bdi></span></span>
				</span> --}}
	</a>
			{{-- <div class="dropdown-cart">
			<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>		
		</div> --}}
	</div>
</div>
<div class="whb-column whb-col-mobile whb-hidden-lg">
	<div class="woodmart-burger-icon wd-tools-element mobile-nav-icon whb-mobile-nav-icon wd-style-icon">
	<a href="#">
					<span class="woodmart-burger wd-tools-icon"></span>
				<span class="woodmart-burger-label wd-tools-text">Menu</span>
	</a>
</div><!--END MOBILE-NAV-ICON--><div class="site-logo">
	<div class="woodmart-logo-wrap switch-logo-enable">
		<a href="{{route('frontend.product.index')}}" class="woodmart-logo woodmart-main-logo" rel="home">
			@isset($logo[0]->image)

			<img src="{{asset($logo[0]->image)}}"  style="max-width: 179px;" />		
		@endisset
		</a>
								{{-- <a href="{{route('frontend.product.index')}}" class="woodmart-logo woodmart-sticky-logo')}}" rel="home">
				<img src="{{asset($logo[0]->image)}}"  alt="Khaasfood" style="max-width: 179px;" />		
				</a> --}}
			</div>
</div>
<div class="whb-space-element " style="width:10px;"></div><div class="whb-navigation whb-secondary-menu site-navigation woodmart-navigation menu-right navigation-style-default" role="navigation">
	</div><!--END MAIN-NAV-->

<div class="whb-search search-button wd-tools-element mobile-search-icon">
	<a href="#">
		<span class="search-button-icon wd-tools-icon">
					</span>
	</a>
</div>

<div class="woodmart-shopping-cart wd-tools-element woodmart-cart-design-5 ">
	<a href="{{route('cart.index')}}" title="Shopping cart">
		<span class="woodmart-cart-icon wd-tools-icon">

			@php    
			$data=[];
			   $data['cart'] = session('cart')? session('cart'):[];
			   $totalCartProducts = array_sum(array_column($data['cart'],'quantity'));
				 @endphp 
						
										<span class="woodmart-cart-number">{{$totalCartProducts}}<span>items</span></span>
							</span>
		<span class="woodmart-cart-totals wd-tools-text">
			
			<span class="subtotal-divider">/</span>
						<span class="woodmart-cart-subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span>0</bdi></span></span>
				</span>
	</a>
	</div>


</div>
		</div>
	</div>
</div>
</div>
				</header>
				
				
				<!--END MAIN HEADER-->


            



<div class="main-page-wrapper">

		
		<!-- MAIN CONTENT AREA -->





		@yield('main_content')





      </div>

					


	</div> <!-- main-page-wrapper -->





@include('frontend.partials.footer')


</div> <!-- end wrapper -->


<div class="woodmart-close-side"></div>

			{{--  <div class="cart-widget-side">
				<div class="widget-heading">
					<h3 class="widget-title">Shopping cart</h3>
					<a href="#" class="close-side-widget wd-cross-button wd-with-text-left">close</a>
				</div>
				<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>			
			</div>  --}}

		    <style>
                .digits_login_form .dig-container {
            background-color: #ffffff;
            border-radius: 0px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.3)        }

                .digits_login_form .dig-modal-con {
            border-radius: 0px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.3);
            background: linear-gradient(#ffffff,#ffffff);
            background-size: cover;
        }

        
        .digits_login_form .dig_ma-box .bglight {
            background-color: #141414;
        }


        
        .digits_login_form .dig_login_rembe .dig_input_wrapper:before,
        .digits_login_form .dig-custom-field-type-radio .dig_opt_mult_con .selected:before,
        .digits_login_form .dig-custom-field-type-radio .dig_opt_mult_con .dig_input_wrapper:before,
        .digits_login_form .dig-custom-field-type-tac .dig_opt_mult_con .selected:before,
        .digits_login_form .dig-custom-field-type-checkbox .dig_opt_mult_con .selected:before,
        .digits_login_form .dig-custom-field-type-tac .dig_opt_mult_con .dig_input_wrapper:before,
        .digits_login_form .dig-custom-field-type-checkbox .dig_opt_mult_con .dig_input_wrapper:before {
            background-color: #141414;
        }


                .digits_login_form .dig_sbtncolor {
            color: #ffffff;
            background-color: #141414;
        }

        .digits_login_form .dig_ma-box .dark input[type="submit"], .digits_login_form .dig_ma-box .lighte {
            color: #ffffff;
        }

        .digits_login_form .dig_ma-box .bgdark {
            background-color: #141414;
        }

        .digits_login_form .dig_sml_box_msg_head,
        .digits_login_form .dig_ma-box .digits-form-select .select2-selection__rendered,
        .digits_login_form .dig_ma-box .dark a, .digits_login_form .dig_ma-box .dark .dig-cont-close, .digits_login_form .dig_ma-box .dark,
        .digits_login_form .dig_ma-box .dark .minput label, .digits_login_form .dig_ma-box .dark .minput input, .digits_login_form .dig_ma-box .darke {
            color: #141414;

        }

        .digits_login_form .dig_ma-box .countrycodecontainer .dark {
            border-right: 1px solid #141414 !important;
        }

        .digits_login_form .dig_ma-box .bgtransborderdark {
            border: 1px solid;
            border-color: #141414;
            background: transparent;
        }

        .digits_login_form .dig_ma-box .digits-form-select .select2-selection--single {
            border-bottom: 1px solid;
            border-color: #141414;
        }

        .digits_login_form .digits-select .select2-selection .select2-selection__arrow b::after {
            border-bottom: 1.5px solid#141414;
            border-right: 1.5px solid#141414;
        }

            </style>
    
    <div class="dig_load_overlay">
        <div class="dig_load_content">
            <div class="dig_spinner">
                <div class="dig_double-bounce1"></div>
                <div class="dig_double-bounce2"></div>
            </div>
                    </div>
    </div>
    <div class="digits_login_form">
    

        <div id="dig-ucr-container" class=" dig_lrf_box dig_ma-box dig-box  dig-modal-con-reno dig_pgmdl_1"  data-asterisk="1"  style="display:none;">


            <div class="dig-content dig-modal-con  dark">
                

                <div class="digits_bx_cred_frm_container">
                    <div class="digits_bx_head">
                        <span class="dig-box-login-title">Log In</span>
                        <span class="dig-cont-close"><span>&times;</span></span>
                    </div>
                    <div class="digits_bx_cred_frm">
                        <div class="dig_bx_cnt_mdl">


                            <div class="dig-log-par">        <div
                class="digloginpage" >
            <form accept-charset="utf-8" method="post" class="digits_login" action="{{route('register')}}">
                <div class="digits_fields_wrapper digits_login_fields">


                    <div class="minput">
                        <div class="minput_inner">
                            <div class="countrycodecontainer logincountrycodecontainer">
                                <input type="text" name="countrycode"
                                       class="input-text countrycode logincountrycode dark"
                                       value="+880"
                                       maxlength="6" size="3" placeholder="+880"
                                       autocomplete="tel-country-code"/>
                            </div>
                            <div class="digits-input-wrapper">
                                <input type="text" class="mobile_field mobile_format dig-mobmail" name="email"
                                       value="" data-type="1" required/>
                            </div>

                            <label>Email</label>
                            <span class="bgdark"></span>
                        </div>
                    </div>


                        <div class="minput">
                            <div class="minput_inner">
                                <div class="digits-input-wrapper">
                                    <input type="password" name="password" required autocomplete="current-password"/>
                                </div>
                                <label>Password</label>
                                <span class="bgdark"></span>
                            </div>
                        </div>
                        
                    {{-- <div class="minput dig_login_otp" style="display: none;">
                        <div class="minput_inner">
                            <div class="digits-input-wrapper">
                                <input type="text" name="dig_otp" class="dig-login-otp" autocomplete="one-time-code"/>
                            </div>
                            <label>OTP</label>
                            <span class="bgdark"></span>
                        </div>
                    </div> --}}


                    <input type="hidden" class="dig_login_captcha"
                           value="0">


                    <input type="hidden" name="dig_nounce" class="dig_nounce"
                           value="a6f7374649">

                    
                        <div class="dig_login_rembe" >
        <label class="" for="digits_login_remember_me886006533">
            <div class="dig_input_wrapper">
                <input data-all="digits_login_remember_me" name="digits_login_remember_me"
                       class="not-empty digits_login_remember_me" id="digits_login_remember_me886006533"
                       type="checkbox" value="1" >
                <div>Remember Me</div>
            </div>
        </label>
    </div>
                    </div>
                <div class="dig_spacer"></div>
                                    <div class="logforb">
                        <button type="submit" class="lighte bgdark button">
                            Login                        </button>
                                                    <div class="forgotpasswordaContainer"><a
                                        class="forgotpassworda">Forgot your Password?</a>
                            </div>
                                            </div>
                    
                    <div id="dig_login_va_otp"
                         class=" lighte bgdark button loginviasms loginviasmsotp">Login With OTP</div>

                                        <div  class="dig_resendotp dig_logof_log_resend" id="dig_lo_resend_otp_btn" dis='1'> Resend OTP<span>(00:<span>90</span>)</span></div>
                    <input type="hidden" class="dig_submit_otp_text"
                           value="Submit OTP"/>

                                        <div class="signdesc">Don&#039;t have an account?</div>
                    <div class="signupbutton transupbutton bgtransborderdark">Signup</div>
                                <input type="hidden" name="digits_redirect_page"
                       value=""/>

            </form>
        </div>

                <div class="forgot" style="display:none">
            <form accept-charset="utf-8" method="post" action="{{route('register')}}" class="digits_forgot_pass">

                <div class="digits_fields_wrapper digits_forgot_pass_fields">
                    <div class="minput forgotpasscontainer" >
                        <div class="minput_inner">
                            <div class="countrycodecontainer forgotcountrycodecontainer">
                                <input type="text" name="countrycode"
                                       class="input-text countrycode forgotcountrycode  dark"
                                       value="+880"
                                       maxlength="6" size="3" placeholder="+880"
                                       autocomplete="tel-country-code"/>
                            </div>

                            <div class="digits-input-wrapper">
                                <input class="mobile_field mobile_format forgotpass" type="text" name="forgotmail"
                                       data-type="1"
                                       required/>
                            </div>
                            <label>Email</label>
                            <span class="bgdark"></span>
                        </div>
                    </div>


                    <div class="minput dig_forgot_otp" style="display: none;">
                        <div class="minput_inner">
                            <div class="digits-input-wrapper">
                                <input type="text" name="dig_otp" class="dig-forgot-otp" autocomplete="one-time-code"/>
                            </div>
                            <label>OTP</label>
                            <span class="bgdark"></span>
                        </div>
                    </div>

                    <input type="hidden" name="rp_key" value=""/>

                    <input type="hidden" name="code" class="digits_code"/>
                    <input type="hidden" name="csrf" class="digits_csrf"/>
                    <input type="hidden" name="dig_nounce" class="dig_nounce"
                           value="a6f7374649">
                    <div class="changepassword" >
                        <div class="minput">
                            <div class="minput_inner">
                                <div class="digits-input-wrapper">
                                    <input type="password" class="digits_password" name="digits_password"
                                           autocomplete="new-password" required/>
                                </div>
                                <label>Password</label>
                                <span class="bgdark"></span>
                            </div>
                        </div>

                        <div class="minput">
                            <div class="minput_inner">
                                <div class="digits-input-wrapper">
                                    <input type="password" class="digits_cpassword" name="digits_cpassword"
                                           autocomplete="new-password" required/>
                                </div>
                                <label>Confirm Password</label>
                                <span class="bgdark"></span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="dig_submit_otp_text"
                           value="Submit OTP"/>
                </div>
                <div class="dig_spacer"></div>
                <button type="submit"
                        class="lighte bgdark button forgotpassword"
                        value="Reset Password">Reset Password</button>
                <div  class="dig_resendotp dig_logof_forg_resend" id="dig_lo_resend_otp_btn" dis='1'>Resend OTP<span>(00:<span>90</span>)</span></div>                                    <div class="backtoLoginContainer"><a
                                class="backtoLogin">Back to login</a>
                    </div>
                                    <input type="hidden" name="digits_redirect_page"
                       value=""/>

            </form>
        </div>

                <div class="register" >

            <form accept-charset="utf-8" method="post" class="digits_register digits_native_registration_form" action="http://www.khaasfood.com/?login=true">

                <div class="dig_reg_inputs">

                    <div class="digits_fields_wrapper digits_register_fields">
                        
                            <div id="dig_cs_name" class="minput">
                                <div class="minput_inner">
                                    <div class="digits-input-wrapper">
                                        <input type="text" name="digits_reg_name" class="digits_reg_name"
                                               value=""  autocomplete="name" />
                                    </div>
                                    <label>First Name</label>
                                    <span class="bgdark"></span>
                                </div>
                            </div>
                                                    <div id="dig_cs_mobilenumber" class="minput">
                                <div class="minput_inner">
                                    <div class="countrycodecontainer registercountrycodecontainer">
                                        <input type="text" name="digregcode"
                                               class="input-text countrycode registercountrycode  dark"
                                               value="+880" maxlength="6" size="3"
                                               placeholder="+880" required autocomplete="tel-country-code"/>
                                    </div>

                                    <div class="digits-input-wrapper">
                                        <input type="text" class="mobile_field mobile_format digits_reg_email"
                                               name="digits_reg_mail"
                                               data-type="2"
                                               value="" />
                                    </div>
                                    <label>Mobile Number<span class="optional">(Optional)</span></label>
                                    <span class="bgdark"></span>
                                </div>
                            </div>

                                                        <div id="dig_cs_email"
                                 class="minput dig-mailsecond" >
                                <div class="minput_inner">
                                    <div class="countrycodecontainer secondregistercountrycodecontainer">
                                        <input type="text" name="digregscode2"
                                               class="input-text countrycode registersecondcountrycode  dark"
                                               value="+880" maxlength="6" size="3"
                                               placeholder="+880"
                                               autocomplete="tel-country-code"/>
                                    </div>

                                    <div class="digits-input-wrapper">
                                        <input type="text" class="mobile_field mobile_format dig-secondmailormobile"
                                               name="mobmail2"
                                               data-mobile="1"
                                               data-mail="2"
                                            required/>
                                    </div>

                                    <label>
                                        <span class="dig_secHolder">Email</span>
                                        <span class="optional"></span>
                                    </label>
                                    <span class="bgdark"></span>
                                </div>
                            </div>
                            

                            <div id="dig_cs_password" class="minput" style="display: none;">
                                <div class="minput_inner">
                                    <div class="digits-input-wrapper">
                                        <input type="password" name="digits_reg_password"
                                               class="digits_reg_password"  autocomplete="new-password"/>
                                    </div>
                                    <label>Password</label>
                                    <span class="bgdark"></span>
                                </div>
                            </div>
                        </div>                        <div>
                                                    </div>

                        <div class="minput dig_register_otp" style="display: none;">
                            <div class="minput_inner">
                                <div class="digits-input-wrapper">
                                    <input type="text" name="dig_otp" class="dig-register-otp"
                                           value="" autocomplete="one-time-code"/>
                                </div>
                                <label>OTP</label>
                                <span class="bgdark"></span>
                            </div>
                        </div>


                        <input type="hidden" name="code" class="register_code"/>
                        <input type="hidden" name="csrf" class="register_csrf"/>
                        <input type="hidden" name="dig_reg_mail" class="dig_reg_mail">
                        <input type="hidden" name="dig_nounce" class="dig_nounce"
                               value="a6f7374649">

                        <input type="hidden" class="digits_form_reg_fields" value="{&quot;dig_reg_name&quot;:&quot;1&quot;,&quot;dig_reg_uname&quot;:&quot;0&quot;,&quot;dig_reg_email&quot;:&quot;2&quot;,&quot;dig_reg_mobilenumber&quot;:&quot;1&quot;,&quot;dig_reg_password&quot;:&quot;1&quot;}" />                    </div>
                    <div class="dig_spacer"></div>
                    
                        <button class="lighte bgdark button dig-signup-otp registerbutton"
                                value="Signup With OTP" type="submit">Signup With OTP</button>
                                                <div  class="dig_resendotp dig_logof_reg_resend" id="dig_lo_resend_otp_btn" dis='1'>Resend OTP <span>(00:<span>90</span>)</span></div>
                        <input type="hidden" class="dig_submit_otp_text"
                               value="Submit OTP"/>
                    
                                            <button class="dig_reg_btn_password lighte bgdark button registerbutton"
                                attr-dis="1"
                                value="Signup With Password" type="submit">
                            Signup With Password                        </button>


                    
                    <div class="backtoLoginContainer"><a
                                class="backtoLogin">Back to login</a>
                    </div>


            </form>
        </div>


        
    </div>                        </div>
                    </div>
                </div>
                            </div>
        </div>

        {{--  </div><div class="digits-fullscreen">
			
			<ul class="digit_cs-list digits_scrollbar digits-mobile-list d-none" style="display: none;" data-type="mobile">
				
				<li class="dig-cc-visible selected" value="880" data-country="bangladesh">(+880) Bangladesh</li><li class="spacer" disabled=""></li>
			
			</ul>
			
			<div class="digits-countrycode-search">
				<div class="digits-hide-countrycode">
					</div>
					
					<input type="text" class="countrycode_search regular-text"></div></div>		  --}}
					
					<div class="woodmart-toolbar woodmart-toolbar-label-show">
			
			@if(Illuminate\Support\Facades\Auth::check())

					<div class="woodmart-header-links wd-tools-element my-account-with-icon">
			<a href="{{route('frontend.user.profile', auth()->user()->id)}}">
				<span class="wd-tools-icon"></span>
				<span class="woodmart-toolbar-label">
					My account				</span>
			</a>
		</div>

@else 

<div class="woodmart-header-links wd-tools-element my-account-with-icon  login-side-opener">
	<a href="{{route('login')}}">
		<span class="wd-tools-icon"></span>
		<span class="woodmart-toolbar-label">
			My account				</span>
	</a>
</div>


@endif


				<div class="woodmart-toolbar-shop woodmart-toolbar-item wd-tools-element">
			<a href="{{route('products.all')}}">
				<span class="wd-tools-icon"></span>
				<span class="woodmart-toolbar-label">
					Shop				</span>
			</a>
		</div>
				</div>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400%2C500%2C900" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

<script type='text/javascript'>(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();</script>	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
			<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
		</script>
<link rel='stylesheet' id='vc_animate-css-css'  href='{{asset('wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min91f3.css?ver=6.4.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='vc_font_awesome_5_shims-css'  href='{{asset('wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/v4-shims.min91f3.css?ver=6.4.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='vc_font_awesome_5-css'  href='{{asset('wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/all.min91f3.css?ver=6.4.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-css'  href='{{asset('wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min91f3.css?ver=6.4.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='vc_pageable_owl-carousel-css-css'  href='{{asset('wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.min91f3.css?ver=6.4.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=6.4.0' type='text/css' media='all' />
{{-- <script type='text/javascript' defer src='../code.jquery.com/ui/1.12.1/jquery-ui080f.js?ver=5.8.2' id='jqueryUI-js-js'></script> --}}

{{-- Jquery  --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script type='text/javascript' id='custom_script-js-extra'>
/* <![CDATA[ */
var custom_script_object = {"ajaxurl":"https:\/\/www.khaasfood.com\/wp-admin\/admin-ajax.php","redirecturl":"","loadingmessage":"Loggin in, please wait..."};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart-child/js/custom080f.js?ver=5.8.2')}}' id='custom_script-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7')}}' id='regenerator-runtime-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0')}}' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/www.khaasfood.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/contact-form-7/includes/js/index4245.js?ver=5.5.2')}}' id='contact-form-7-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min00bc.js?ver=2.1.4-wc.5.9.0')}}' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minad76.js?ver=5.9.0')}}' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_40a2a7027b1859fe0f2e44db071c37a3","fragment_name":"wc_fragments_40a2a7027b1859fe0f2e44db071c37a3","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minad76.js?ver=5.9.0')}}' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-after'>
		jQuery( 'body' ).bind( 'wc_fragments_refreshed', function() {
			var jetpackLazyImagesLoadEvent;
			try {
				jetpackLazyImagesLoadEvent = new Event( 'jetpack-lazy-images-load', {
					bubbles: true,
					cancelable: true
				} );
			} catch ( e ) {
				jetpackLazyImagesLoadEvent = document.createEvent( 'Event' )
				jetpackLazyImagesLoadEvent.initEvent( 'jetpack-lazy-images-load', true, true );
			}
			jQuery( 'body' ).get( 0 ).dispatchEvent( jetpackLazyImagesLoadEvent );
		} );
		
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woodiscuz-woocommerce-comments/files/js/wpc-footer-script62ea.js?ver=1.2')}}' id='woodiscuz-footer-js-js'></script>
<script type='text/javascript' id='attachments-script-js-extra'>
/* <![CDATA[ */
var attach = {"limit_multiple_upload":"0"};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/yith-woocommerce-advanced-reviews/assets/js/ywar-attachments080f.js?ver=5.8.2')}}' id='attachments-script-js'></script>
<script type='text/javascript' defer src='../unpkg.com/libphonenumber-js%401.7.16/bundle/libphonenumber-max.js' id='libphonenumber-mobile-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/digits/assets/js/scrollToa79d.js?ver=7.8.1.8')}} id='scrollTo-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/dist/hooks.mine16b.js?ver=a7edae857aab69d69fa10d5aef23a5de')}}' id='wp-hooks-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/dist/i18n.min71a7.js?ver=5f1269854226b4dd90450db411a12b79')}}' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' defer src='{{asset('wp-admin/js/password-strength-meter.min080f.js?ver=5.8.2')}}' id='password-strength-meter-js'></script>
<script type='text/javascript' id='digits-main-script-js-extra'>
/* <![CDATA[ */
var dig_mdet = {"dig_hide_ccode":"1","loginwithotp":"Login With OTP","dig_sortorder":"","dig_dsb":"-1","Passwordsdonotmatch":"Passwords do not match!","fillAllDetails":"Please fill all the required details.","accepttac":"Please accept terms & conditions.","resendOtpTime":"90","useStrongPasswordString":"Please enter a stronger password.","strong_pass":"1","firebase":"0","forgot_pass":"1","mail_accept":"2","pass_accept":"1","mobile_accept":"1","login_uname_accept":"1","login_mobile_accept":"1","login_mail_accept":"1","login_otp_accept":"1","captcha_accept":"0","ajax_url":"https:\/\/www.khaasfood.com\/wp-admin\/admin-ajax.php","appId":"","uri":"\/\/www.khaasfood.com\/","state":"db00559b74","uccode":"+880","nonce":"a6f7374649","pleasesignupbeforelogginin":"Please signup before logging in.","invalidapicredentials":"Invalid API credentials!","invalidlogindetails":"Invalid login credentials!","emailormobile":"Email\/Mobile Number","RegisterWithPassword":"Register With Password","Invaliddetails":"Invalid details!","invalidpassword":"Invalid Password","InvalidMobileNumber":"Invalid Mobile Number!","InvalidEmail":"Invalid Email!","invalidcountrycode":"At the moment, we do not allow users from your country","Mobilenumbernotfound":"Mobile number not found!","MobileNumberalreadyinuse":"Mobile Number already in use!","MobileNumber":"Mobile Number","InvalidOTP":"Invalid OTP!","Pleasetryagain":"Please try again","ErrorPleasetryagainlater":"Error! Please try again later","UsernameMobileno":"Username\/Mobile Number","OTP":"OTP","resendOTP":"Resend OTP","verify_mobile":"1","otp_l":"6","Password":"Password","ConfirmPassword":"Confirm Password","pleaseentermobormail":"Please enter your Mobile Number\/Email","eitherentermoborusepass":"Either enter your Mobile Number or use Password!","submit":"Submit","overwriteWcBillShipMob":"0","signupwithpassword":"SIGN UP WITH PASSWORD","signupwithotp":"SIGN UP WITH OTP","verifymobilenumber":"Verify Mobile Number","signup":"SIGN UP","or":"OR","email":"Email","optional":"Optional","error":"Error","mob_verify_checkout":"1","SubmitOTP":"Submit OTP","Registrationisdisabled":"Registration is disabled","forgotPasswordisdisabled":"Forgot Password is disabled","Thisfeaturesonlyworkswithmobilenumber":"This features only works with mobile number","codevalidproceedcheckout":"Code is valid, please proceed with checkout","guest_checkout_verification":"1","billing_phone_verification":"1"};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/digits/assets/js/main.mina79d.js?ver=7.8.1.8')}}' id='digits-main-script-js'></script>
<script type='text/javascript' id='digits-login-script-js-extra'>
/* <![CDATA[ */
var dig_log_obj = {"direction":"ltr","dig_mobile_no_formatting":"1","dig_hide_ccode":"1","dig_sortorder":"","dig_dsb":"-1","show_asterisk":"1","login_mobile_accept":"1","login_mail_accept":"1","login_otp_accept":"1","captcha_accept":"0","Passwordsdonotmatch":"Passwords do not match!","fillAllDetails":"Please fill all the required details.","accepttac":"Please accept terms & conditions.","resendOtpTime":"90","useStrongPasswordString":"Please enter a stronger password.","strong_pass":"1","firebase":"0","mail_accept":"2","pass_accept":"1","mobile_accept":"1","username_accept":"0","ajax_url":"https:\/\/www.khaasfood.com\/wp-admin\/admin-ajax.php","appId":"","uri":"\/\/www.khaasfood.com\/","state":"db00559b74","left":"0","verify_mobile":"0","Registrationisdisabled":"Registration is disabled","forgotPasswordisdisabled":"Forgot Password is disabled","invalidlogindetails":"Invalid login credentials!","invalidapicredentials":"Invalid API credentials!","pleasesignupbeforelogginin":"Please signup before logging in.","pleasetryagain":"Please try again!","invalidcountrycode":"At the moment, we do not allow users from your country","Mobilenumbernotfound":"Mobile number not found!","MobileNumberalreadyinuse":"Mobile Number already in use!","Error":"Error","Thisfeaturesonlyworkswithmobilenumber":"This features only works with mobile number","InvalidOTP":"Invalid OTP!","ErrorPleasetryagainlater":"Error! Please try again later","Passworddoesnotmatchtheconfirmpassword":"Password does not match the confirm password!","Invaliddetails":"Invalid details!","InvalidEmail":"Invalid Email!","InvalidMobileNumber":"Invalid Mobile Number!","eitherenterpassormob":"Either enter your mobile number or click on sign up with password","login":"Log In","signup":"Sign Up","ForgotPassword":"Forgot Password","Email":"Email","Mobileno":"Mobile Number","ohsnap":"Oh Snap!","yay":"Yay!","notice":"Notice!","submit":"Submit","SubmitOTP":"Submit OTP","required":"Required","select":"(select)","login_success":"Login Successful, Redirecting..","login_reg_success_msg":"1","nonce":"a6f7374649"};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/digits/assets/js/login.mina79d.js?ver=7.8.1.8')}}' id='digits-login-script-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min91f3.js?ver=6.4.0')}}' id='wpb_composer_front_js-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}' id='imagesloaded-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/owl.carousel.min03ec.js?ver=5.3.4')}}' id='woodmart-owl-carousel-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/jquery.tooltips.min03ec.js?ver=5.3.4')}}' id='woodmart-tooltips-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/jquery.magnific-popup.min03ec.js?ver=5.3.4')}}' id='woodmart-magnific-popup-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/waypoints.min03ec.js?ver=5.3.4')}}' id='woodmart-waypoints-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/jquery.nanoscroller.min03ec.js?ver=5.3.4')}}' id='woodmart-nanoscroller-js'></script>
<script type='text/javascript' id='woodmart-theme-js-extra'>
/* <![CDATA[ */
var woodmart_settings = {"photoswipe_close_on_scroll":"1","woocommerce_ajax_add_to_cart":"yes","variation_gallery_storage_method":"old","elementor_no_gap":"enabled","adding_to_cart":"Processing","added_to_cart":"Product was successfully added to your cart.","continue_shopping":"Continue shopping","view_cart":"View Cart","go_to_checkout":"Checkout","loading":"Loading...","countdown_days":"days","countdown_hours":"hr","countdown_mins":"min","countdown_sec":"sc","cart_url":"https:\/\/www.khaasfood.com\/cart\/","ajaxurl":"https:\/\/www.khaasfood.com\/wp-admin\/admin-ajax.php","add_to_cart_action":"nothing","added_popup":"no","categories_toggle":"yes","enable_popup":"no","popup_delay":"2000","popup_event":"time","popup_scroll":"1000","popup_pages":"0","promo_popup_hide_mobile":"yes","product_images_captions":"no","ajax_add_to_cart":"1","all_results":"View all results","product_gallery":{"images_slider":true,"thumbs_slider":{"enabled":true,"position":"bottom","items":{"desktop":4,"tablet_landscape":3,"tablet":4,"mobile":3,"vertical_items":3}}},"zoom_enable":"yes","ajax_scroll":"yes","ajax_scroll_class":".main-page-wrapper","ajax_scroll_offset":"100","infinit_scroll_offset":"300","product_slider_auto_height":"no","price_filter_action":"click","product_slider_autoplay":"","close":"Close (Esc)","share_fb":"Share on Facebook","pin_it":"Pin it","tweet":"Tweet","download_image":"Download image","cookies_version":"1","header_banner_version":"1","promo_version":"1","header_banner_close_btn":"1","header_banner_enabled":"","whb_header_clone":"\n    <div class=\"whb-sticky-header whb-clone whb-main-header <%wrapperClasses%>\">\n        <div class=\"<%cloneClass%>\">\n            <div class=\"container\">\n                <div class=\"whb-flex-row whb-general-header-inner\">\n                    <div class=\"whb-column whb-col-left whb-visible-lg\">\n                        <%.site-logo%>\n                    <\/div>\n                    <div class=\"whb-column whb-col-center whb-visible-lg\">\n                        <%.main-nav%>\n                    <\/div>\n                    <div class=\"whb-column whb-col-right whb-visible-lg\">\n                        <%.woodmart-header-links%>\n                        <%.search-button:not(.mobile-search-icon)%>\n\t\t\t\t\t\t<%.woodmart-wishlist-info-widget%>\n                        <%.woodmart-compare-info-widget%>\n                        <%.woodmart-shopping-cart%>\n                        <%.full-screen-burger-icon%>\n                    <\/div>\n                    <%.whb-mobile-left%>\n                    <%.whb-mobile-center%>\n                    <%.whb-mobile-right%>\n                <\/div>\n            <\/div>\n        <\/div>\n    <\/div>\n","pjax_timeout":"5000","split_nav_fix":"","shop_filters_close":"no","woo_installed":"1","base_hover_mobile_click":"no","centered_gallery_start":"1","quickview_in_popup_fix":"","disable_nanoscroller":"enable","one_page_menu_offset":"150","hover_width_small":"1","is_multisite":"","current_blog_id":"1","swatches_scroll_top_desktop":"","swatches_scroll_top_mobile":"","lazy_loading_offset":"210","add_to_cart_action_timeout":"no","add_to_cart_action_timeout_number":"3","single_product_variations_price":"no","google_map_style_text":"Custom style","quick_shop":"yes","sticky_product_details_offset":"150","preloader_delay":"300","comment_images_upload_size_text":"Some files are too large. Allowed file size is 1 MB.","comment_images_count_text":"You can upload up to 3 images to your review.","comment_images_upload_mimes_text":"You are allowed to upload images only in png, jpeg formats.","comment_images_added_count_text":"Added %s image(s)","comment_images_upload_size":"1048576","comment_images_count":"3","comment_images_upload_mimes":{"jpg|jpeg|jpe":"image\/jpeg","png":"image\/png"},"home_url":"https:\/\/www.khaasfood.com\/","shop_url":"https:\/\/www.khaasfood.com\/shop\/","age_verify":"no","age_verify_expires":"30","cart_redirect_after_add":"no","swatches_labels_name":"no","product_categories_placeholder":"Select a category","product_categories_no_results":"No matches found","cart_hash_key":"wc_cart_hash_40a2a7027b1859fe0f2e44db071c37a3","fragment_name":"wc_fragments_40a2a7027b1859fe0f2e44db071c37a3"};
var woodmart_variation_gallery_data = null;
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/functions.min03ec.js?ver=5.3.4')}}' id='woodmart-theme-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/underscore.min0028.js?ver=1.13.1')}}' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/wp-util.min080f.js?ver=5.8.2')}}' id='wp-util-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minad76.js?ver=5.9.0')}}' id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' defer src='{{asset('wp-includes/js/wp-embed.min080f.js?ver=5.8.2')}}' id='wp-embed-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/themes/woodmart/js/jquery.autocomplete.min03ec.js?ver=5.3.4')}}' id='woodmart-autocomplete-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min91f3.js?ver=6.4.0')}}' id='vc_waypoints-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min91f3.js?ver=6.4.0')}}' id='prettyphoto-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.min91f3.js?ver=6.4.0')}}' id='vc_pageable_owl-carousel-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.min91f3.js?ver=6.4.0')}}' id='vc_grid-js-imagesloaded-js'></script>
<script type='text/javascript' defer src='{{asset('wp-content/plugins/js_composer/assets/js/dist/vc_grid.min91f3.js?ver=6.4.0')}}' id='vc_grid-js'></script>

<!-- WooCommerce JavaScript -->
<script type="text/javascript">
jQuery(function($) { 

			$( '.add_to_cart_button:not(.product_type_variable, .product_type_grouped)' ).on( 'click', function() {
				_gaq.push(['_trackEvent', 'Products', 'Add to Cart', ($(this).data('product_sku')) ? ($(this).data('product_sku')) : ('#' + $(this).data('product_id'))]);
			});
		
 });
</script>
<div class="mobile-nav slide-from-left">			<div class="woodmart-search-form">
								<form role="search" method="get" class="searchform  wts-ajax-search" action="{{route('products.filter')}}"  data-thumbnail="1" data-price="1" data-post_type="product" data-count="20" data-sku="0" data-symbols_count="3">
					<input type="text" class="s" placeholder="Search for products" value="" name="search" />
					<input type="hidden" name="post_type" value="product">
										<button type="submit" class="searchsubmit">
						Search											</button>
				</form>
													<div class="search-results-wrapper"><div class="woodmart-scroll"><div class="woodmart-search-results woodmart-scroll-content"></div></div><div class="woodmart-search-loader wd-fill"></div></div>
							</div>
							<div class="mobile-nav-tabs">
						<ul>
							<li class="mobile-tab-title mobile-pages-title active" data-menu="pages"><span>Menu</span></li>
							<li class="mobile-tab-title mobile-categories-title " data-menu="categories"><span>Categories</span></li>
						</ul>
					</div>
				<div class="mobile-menu-tab mobile-categories-menu "><div class="menu-mobile-category-container"><ul id="menu-mobile-category" class="site-mobile-menu">
		
@foreach($categories as $category)
					

<li id="menu-item-3697" class="english_menu_cat menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-3697 item-level-0">
	<a href="{{route('frontend.product.sub_list', $category->slug )}}" class="woodmart-nav-link">
		<span class="nav-link-text">{{$category->name}}</span></a>
<div class="sub-menu-dropdown color-scheme-dark">

<div class="container">

<ul class="sub-menu color-scheme-dark">
	
	@foreach($category->child_category as $subcategory)

	<li id="menu-item-3699" class="english_menu_cat menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3699 item-level-1">
		<a href="{{route('frontend.product.products_list',$subcategory->slug)}}" class="woodmart-nav-link">
			<span class="nav-link-text">{{$subcategory->name}}
			</span>
		</a>
	</li>

	@endforeach

</ul>
</div>
</div>
</li>

@endforeach


</ul></div></div><div class="mobile-menu-tab mobile-pages-menu active"><div class="menu-main-navigation-container">
	
	<ul id="menu-main-navigation-1" class="site-mobile-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-57 current_page_item menu-item-380 item-level-0 menu-item-has-block"><a href="{{route('frontend.product.index')}}" class="woodmart-nav-link">
		<span class="nav-link-text">Home</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-405 item-level-0"><a href="{{route('products.all')}}" class="woodmart-nav-link"><span class="nav-link-text">Products</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24259 item-level-0"><a href="{{route('product.premium')}}" class="woodmart-nav-link"><span class="nav-link-text">Gift Items</span></a></li>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3407 item-level-0"><a href="{{route('frontend.contact_us')}}" class="woodmart-nav-link"><span class="nav-link-text">Contact Us</span></a></li>

 @guest
<li class="menu-item item-level-0  my-account-with-text login-side-opener menu-item-register"><a href="{{route('login')}}">Login / Register</a>

@endguest

@auth
<li class="menu-item item-level-0  my-account-with-text  menu-item-register"><a href="{{route('frontend.user.profile', auth()->user()->id)}}">My Account</a>
@endauth

</li>
</ul>

</div></div>
		</div><!--END MOBILE-NAV-->			<div class="login-form-side">
				<div class="widget-heading">
					<h3 class="widget-title">Sign in</h3>
					<a href="#" class="close-side-widget wd-cross-button wd-with-text-left">close</a>
				</div>
				
							<form method="post" class="login woocommerce-form woocommerce-form-login " action="{{route('login')}}" >

				{{ csrf_field() }}
    {{-- <input type="hidden" name="dig_nounce" class="dig_nounce"
           value="a6f7374649">
    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide "
       id="dig_wc_log_otp_container" otp="1" style="display: none;">
        <label for="dig_wc_log_otp">OTP <span class="required">*</span></label>
        <input type="text" class="input-text" name="dig_wc_log_otp" id="dig_wc_log_otp"/>
    </p> --}}


    {{-- <input type="hidden" name="username" id="loginuname" value=""/> --}}
    
				
				<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-username">
					<label for="username">Email&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" autocomplete="email" value="{{old('email')}}" />
				</p>
				<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-password">
					<label for="password">Password&nbsp;<span class="required">*</span></label>
					<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
				</p>

				<button type="submit" class="woocommerce-Button button ">Login</button>

				
				{{-- <p class="form-row">
					<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a4b559ff7f" /><input type="hidden" name="_wp_http_referer" value="/" />										<button type="submit" class="button woocommerce-button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
				</p>				 --}}
				

    {{-- <input type="hidden" id="wc_login_cd" val="1"> --}}

    <p class="form-row form-row-wide">
    {{-- <input type="hidden" id="wc_code_dig" val=""> --}}
            {{-- <div class="loginViaContainer">
                            <span class="digor">OR<br/><br/></span>
                                <button onclick="return false" class="woocommerce-Button button dig_wc_mobileLogin"
                        name="loginviasms">Login With OTP</button>
                
                        </div> --}}
        {{-- <div  class="dig_resendotp dig_wc_login_resend" id="dig_man_resend_otp_btn" dis='1'>Resend OTP <span>(00:<span>90</span>)</span></div>        </p> --}}

        				<div class="login-form-footer">
					<a href="{{ route('forget.password.get') }}" class="woocommerce-LostPassword lost_password">Lost your password?</a>
					<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
						<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="remember" type="checkbox" value="forever" /> <span>Remember me</span>
					</label>
				</div>				
									{{-- <span class="social-login-title wood-login-divider">Or login with</span>
					<div class="woodmart-social-login woodmart-social-alt-style">
													<div class="social-login-btn">
								<a href="my-account/indexf133.html?social_auth=facebook" class="login-fb-link">Facebook</a>
							</div>
																			<div class="social-login-btn">
								<a href="my-account/index6c36.html?social_auth=google" class="login-goo-link">Google</a>
							</div>
																	</div> --}}
								

			</form>

						
				<div class="create-account-question">
					<span class="create-account-text">No account yet?</span>
					<a href="{{route('register')}}" class="btn btn-style-link btn-color-primary create-account-button">Create an Account</a>
				</div>
			</div>
					<a href="#" class="scrollToTop">Scroll To Top</a>
		<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset("js/cart.js")}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    




</body>

</html>

