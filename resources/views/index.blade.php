@extends('frontend.layouts.master')
@section('main_content')


<div class="container">
    <div class="row content-layout-wrapper align-items-start">




<div class="site-content col-lg-12 col-12 col-md-12" role="main">

<article id="post-57" class="post-57 page type-page status-publish hentry">

<div class="entry-content">
    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1596896889107 vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                
                
                                <!-- START Slider 1 REVOLUTION SLIDER 6.2.23 -->
                                
                
                              
                                
                                <p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_3_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_3_1" style="" data-version="6.2.23">


                        <rs-slides>

 @foreach ($sliders as $item)

                            <rs-slide data-key="{{$item->id}}" data-title="Slide" data-thumb="//www.khaasfood.com/wp-content/uploads/2020/06/b2ce87e0-022c-4f31-a1bc-f63c54411d31.jpg" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                                <img src="wp-content/plugins/revslider/public/assets/assets/transparent.png" alt="Slide" title="b2ce87e0-022c-4f31-a1bc-f63c54411d31" width="1900" height="570" class="rev-slidebg" data-no-retina>
    <!--
                                --><a
                                    id="slider-3-slide-{{$item->id}}-layer-0" 
                                    class="rs-layer"
                                    href="product/black-seed-honey/index.html" target="_self" rel="nofollow"
                                    data-type="image"
                                    data-rsp_ch="on"
                                    data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                    data-dim="w:['100%','100%','100%','100%'];h:auto,auto,233px,500px;"
                                    data-vbility="t,t,f,f"
                                    data-layeronlimit="on"
                                    data-frame_999="o:0;st:w;"
                                    style="z-index:9;"
                                ><img src="{{$item->image}}" alt="Best Grocery Store in Bangladesh" width="1900" height="570" data-c="fullwidth" data-no-retina> 
                                </a><!--
    
                                --><a
                                    id="slider-3-slide-{{$item->id}}-layer-3" 
                                    class="rs-layer"
                                    href="product/black-seed-honey/index.html" target="_self" rel="nofollow"
                                    data-type="image"
                                    data-rsp_ch="on"
                                    data-text="w:normal;s:20,20,7,4;l:0,0,9,6;"
                                    data-dim="w:300px,300px,779px,480px;h:180px,180px,811px,500px;"
                                    data-vbility="f,f,t,t"
                                    data-layeronlimit="on"
                                    data-frame_999="o:0;st:w;"
                                    style="z-index:10;"
                                ><img src="{{$item->image_sm}}" alt="Best Grocery Store in Bangladesh" width="480" height="500" data-no-retina> 
                                </a><!--
    
                                --><a
                                    id="slider-3-slide-{{$item->id}}-layer-15" 
                                    class="rs-layer rev-btn"
                                    href="product-category/meat/beef/index.html" target="_self" rel="nofollow"
                                    data-type="button"
                                    data-rsp_ch="on"
                                    data-xy="xo:1644px,1644px,673px,326px;yo:472px,472px,192px,428px;"
                                    data-text="w:normal;s:20,20,7,18;l:50,50,19,40;fw:500;"
                                    data-dim="w:142px,142px,57px,126px;minh:0px,0px,none,none;"
                                    data-padding="r:20,20,8,18;l:20,20,8,18;"
                                    data-border="bor:25px,25px,25px,25px;"
                                    data-frame_0="x:0,0,0,0px;y:0,0,0,0px;"
                                    data-frame_1="x:0,0,0,0px;y:0,0,0,0px;"
                                    data-frame_999="o:0;st:w;"
                                    data-frame_hover="c:#000;bgc:#fff;bor:25px,25px,25px,25px;sp:200;e:power1.inOut;"
                                    style="z-index:8;background-color:#002d09;font-family:Roboto;"
                                >Book Now 
                                </a><!--
    -->						</rs-slide>
@endforeach

                              
                        </rs-slides>
                        <rs-static-layers><!--
                        --></rs-static-layers>
                    </rs-module>
                    <script type="text/javascript">
                        setREVStartSize({c: 'rev_slider_3_1',rl:[1240,1240,778,480],el:[570,570,660,500],gw:[1900,1900,778,480],gh:[570,570,660,500],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
                        var	revapi3,
                            tpj;
                        function revinit_revslider31() {
                        jQuery(function() {
                            tpj = jQuery;
                            revapi3 = tpj("#rev_slider_3_1");
                            if(revapi3==undefined || revapi3.revolution == undefined){
                                revslider_showDoubleJqueryError("rev_slider_3_1");
                            }else{
                                revapi3.revolution({
                                    sliderLayout:"fullwidth",
                                    visibilityLevels:"1240,1240,778,480",
                                    gridwidth:"1900,1900,778,480",
                                    gridheight:"570,570,660,500",
                                    spinner:"spinner3",
                                    perspective:600,
                                    perspectiveType:"global",
                                    editorheight:"570,307,660,500",
                                    responsiveLevels:"1240,1240,778,480",
                                    progressBar:{disableProgressBar:true},
                                    navigation: {
                                        onHoverStop:false,
                                        arrows: {
                                            enable:true,
                                            style:"hesperiden",
                                            left: {
                                                h_offset:30
                                            },
                                            right: {
                                                h_offset:30
                                            }
                                        }
                                    },
                                    fallbacks: {
                                        allowHTML5AutoPlayOnAndroid:true
                                    },
                                });
                            }
                            
                        });
                        } // End of RevInitScript
                    var once_revslider31 = false;
                    if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider31 ) { once_revslider31 = true; revinit_revslider31();}});} else {once_revslider31 = true; revinit_revslider31();}
                    </script>
                    <script>
                        var htmlDivCss = '	#rev_slider_3_1_wrapper rs-loader.spinner3 div { background-color: #ffffff !important; } ';
                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement('div');
                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
                    <script>
                        var htmlDivCss = unescape("%23rev_slider_3_1_wrapper%20.hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3A%23000000%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A20px%3B%0A%09color%3A%23ffffff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82c%27%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82d%27%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A");
                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement('div');
                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
                    <script>
                        var htmlDivCss = unescape("%0A%0A%0A%0A%0A");
                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement('div');
                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
                </rs-module-wrap>
                <!-- END REVOLUTION SLIDER -->
    <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">		
            <div id="wd-5f0ea9228ba5c" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-100 text-center woodmart-title-size-custom ">
                            
                
    
    
    
                <!-- Products Category  -->
                
                <div class="liner-continer">
                    <span class="left-line"></span>
                    <h3 class="woodmart-title-container title  woodmart-font-weight-600" >PRODUCT CATEGORIES</h3>								<span class="right-line"></span>
                </div>
                
                            
                        </div>
            
            <div class="products woocommerce row categories-style-default  woodmart-spacing-30 justify-content-center columns-6">
                

    
    @foreach ($categories as $category)
    @php

    $count = 0;
        foreach($category->child_category as $child){
          
            $count += $child->products()->count(); 
            
        }
        
    @endphp
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 category-grid-item cat-design-alt product-category product" data-loop="2">
        <div class="wrapp-category">
            <div class="category-image-wrapp">
                <a href="{{route('frontend.product.sub_list', $category->slug)}}" class="category-image">
                    
                    <img class="woodmart-lazy-load woodmart-lazy-fade" src="{{asset($category->banner)}}" data-wood-src="{{asset($category->banner)}}" alt="Fish" width="300"  />			</a>
            </div>
            <div class="hover-mask">
                <h3 class="category-title">
                    {{$category->name}} <mark class="count">{{$category->products()->count() + $count}}</mark>			</h3>
    
                                <div class="more-products"><a href="{{route('frontend.product.sub_list', $category->slug)}}">{{$category->products()->count() + $count}} products</a></div>
                
                        </div>
            <a href="{{route('frontend.product.sub_list', $category->slug)}}" class="category-link"></a>
                </div>
    </div>
    @endforeach

    
    
</div></div></div></div></div>


<div class="d-flex justify-content-between flex-wrap">
	<div id="wd-5f0ea95e0ec8e" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-100 text-center woodmart-title-size-custom ">
						
			<div class="liner-continer">
				<span class="left-line"></span>
				<h5 class="woodmart-title-container title  woodmart-font-weight-600 mt-3">NEW PRODUCTS</h5>								<span class="right-line"></span>
			</div>
			
						
	</div>

    
            
@include('frontend.partials.safeby.recently_arrived_products')
       




<div class="d-flex justify-content-between flex-wrap">
	<div id="wd-5f0ea95e0ec8e" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-100 text-center woodmart-title-size-custom ">
						
			<div class="liner-continer">
				<span class="left-line"></span>
				<h5 class="woodmart-title-container title  woodmart-font-weight-600 mt-3 ">BEST SELLING PRODUCTS</h5>								<span class="right-line"></span>
			</div>
			
						
	</div>



    @include('frontend.partials.safeby.top_selling_products')





    <div class="d-flex justify-content-between flex-wrap">
        <div id="wd-5f0ea95e0ec8e" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-100 text-center woodmart-title-size-custom ">
                            
                <div class="liner-continer">
                    <span class="left-line"></span>
                    <h5 class="woodmart-title-container title  woodmart-font-weight-600 mt-3">DISCOUNTED PRODUCTS</h5>								<span class="right-line"></span>
                </div>
                
                            
        </div>
    
    
    
        @include('frontend.partials.safeby.feature_products')

    
    
    
  
            
 


            <div id="wd-5f0ea9e140be5" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-100 text-center woodmart-title-size-custom ">
                
                

                <div class="liner-continer">
                    <span class="left-line"></span>


                    <h3 class="woodmart-title-container title  woodmart-font-weight-600" >LATEST BLOG POSTS</h3>								<span class="right-line"></span>
                </div>
                
                            
                        </div>
            
            
    <div class="vc_grid-container-wrapper vc_clearfix">
        <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid vc_custom_1608711638090 cover2contain" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:57,&quot;style&quot;:&quot;all&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1634627430488-7fb8bfa7-e463-4&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}" data-vc-request="https://www.khaasfood.com/wp-admin/admin-ajax.php" data-vc-post-id="57" data-vc-public-nonce="e08943f153">
            <style data-type="vc_shortcodes-custom-css">.vc_custom_1419258058654{padding-left: 15px !important;background-color: #282828 !important;}</style>
            <div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">
                <div class="vc_pageable-slide-wrapper vc_clearfix d-flex flex-wrap" data-vc-grid-content="true">

{{-- Blog Start  --}}

@foreach ($blogs as $blog)

<div class="vc_grid-item vc_clearfix vc_col-sm-4">

    <div class="vc_grid-item-mini vc_clearfix ">
    <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-slideInRight"  data-vc-animation="slideInRight">
        <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-4-3 vc_gitem-is-link" style="background-image: url('{{asset($blog->image)}}') !important;">
            <a href="{{route('blog.show', $blog->id)}}" title="{{$blog->title}}" class="vc_gitem-link vc-zone-link">
            </a>
            
            <img src="{{asset($blog->image)}}" class="vc_gitem-zone-img" alt="">
            
            <div class="vc_gitem-zone-mini"></div></div>
            
            <div class="vc_gitem-zone vc_gitem-zone-b vc-gitem-zone-height-mode-auto vc_gitem-is-link">
            <a href="{{route('blog.show', $blog->id)}}" title="{{$blog->title}}" class="vc_gitem-link vc-zone-link"></a>
            <div class="vc_gitem-zone-mini">
                <div class="vc_gitem_row vc_row vc_gitem-row-position-middle">
                    
                    
                    <div class="vc_col-sm-6 vc_gitem-col vc_gitem-col-align- vc_custom_1419258058654">
                        <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_date" >
                            <div style="font-size: 12px;color: #efefef;text-align: left;font-family:Roboto;font-weight:400;font-style:normal" >February 18, 2021</div></div>
                            
                            <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title" ><h3 style="font-size: 20px;color: #ffffff;text-align: left;font-family:Roboto;font-weight:300;font-style:normal" >
                                {{$blog->title}}</h3></div></div>
                                
                          
                                

<div class="vc_col-sm-6 vc_gitem-col vc_gitem-col-align-"></div>

</div></div></div></div></div>

<div class="vc_clearfix"></div></div>
    
@endforeach

               

{{-- Blog End  --}}



</div></div>
       


</div>

    </div></div></div></div></div></div></div></div>


@endsection
