
<div class="mt-5"></div>
<div class="mt-5"></div>
<div class="mt-5"></div>

<footer class="footer-container color-scheme-light ">

    <div class="container main-footer">
<aside class="footer-sidebar widget-area row" role="complementary">
                            <div class="footer-column footer-column-1 col-12">
                    <div id="text-11" class="woodmart-widget widget footer-widget  widget_text">			<div class="textwidget"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div  class="wpb_single_image wpb_content_element vc_align_left">

<figure class="wpb_wrapper vc_figure">
    
    <div class="vc_single_image-wrapper   vc_box_border_grey">
        @isset($logo[1]->image)
        <img width="217" height="79" src="{{$logo[1]->image}}" class="vc_single_image-img attachment-full woodmart-lazy-load woodmart-lazy-fade" alt="" loading="lazy" data-wood-src="{{$logo[1]->image}}" srcset="" />

        @endisset
    
    </div>
</figure>
</div>

<div class="wpb_text_column wpb_content_element" >
<div class="wpb_wrapper">
    <p>Safe Buys is an e-commerce platform coupled with a chain of brick-and-mortar stores for safe and pure foods in Bangladesh.</p>

</div>
</div>
@isset($socials[0])
    

    <div class="woodmart-social-icons text-left icons-design- icons-size-default color-scheme-light social-follow social-form-circle">
                            <a rel="nofollow noopener" href="{{$socials[0]->facebook}}" target="_blank" class=" woodmart-social-icon social-facebook">
                <i></i>
                <span class="woodmart-social-icon-name">Facebook</span>
            </a>
            
            
                            <a rel="nofollow noopener" href="{{$socials[0]->facebook2}}" target="_blank" class=" woodmart-social-icon social-facebook">
                <i></i>
                <span class="woodmart-social-icon-name">Facebook</span>
            </a>
        
        
        
                            <a rel="nofollow noopener" href="{{$socials[0]->instagram}}" target="_blank" class=" woodmart-social-icon social-instagram">
                <i></i>
                <span class="woodmart-social-icon-name">Instagram</span>
            </a>
        
                            <a rel="nofollow noopener" href="{{$socials[0]->youtube}}" target="_blank" class=" woodmart-social-icon social-youtube">
                <i></i>
                <span class="woodmart-social-icon-name">YouTube</span>
            </a>
        
        
        
                            <a rel="nofollow noopener" href="{{$socials[0]->linkedin}}" target="_blank" class=" woodmart-social-icon social-linkedin">
                <i></i>
                <span class="woodmart-social-icon-name">linkedin</span>
            </a>
        
        
        
                    
        
    </div>

    @endisset

</div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element" >

    @isset($contact[0])
        
    
<div class="wpb_wrapper">
    <h5 class="widget-title contact-footer">CONTACT US</h5>

{!!$contact[0]->address!!}

<p><i class="fa fa-mobile" style="width: 15px; text-align: center; margin-right: 4px; color: #ffa5007d;"></i><strong>Phone: </strong><br />
{!!$contact[0]->phone!!}</p>
<p><i class="fa fa-envelope-o" style="width: 15px; text-align: center; margin-right: 4px; color: #ffa5007d;"></i><strong>Email: </strong><br />
<a href="#" class="__cf_email__">{!!$contact[0]->email!!}</a><br />

</div>
@endisset
</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element" >
<div class="wpb_wrapper">
    <h5 class="widget-title">USEFUL LINKS</h5>

</div>
</div>
<div  class="vc_wp_custommenu wpb_content_element">
    
<div class="widget widget_nav_menu"><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu">

    @foreach ($page_title as $item)

    <li id="menu-item-3478" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3478"><a href="{{route('frontend.page_content', $item->id)}}">{{$item->title}}</a></li>

    @endforeach

</ul></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element" >
<div class="wpb_wrapper">
    <h5 class="widget-title">NEWSLETTER</h5>
<p>Enter your email below and get informed of our offers, campaigns, new products time to time!</p>

</div>
</div>

<div class="wpb_text_column wpb_content_element" >
<div class="wpb_wrapper">
    
<div class="emaillist" id="es_form_f2-n1">


                <form action="{{route('frontend.subs')}}" method="post" class="es_subscription_form es_shortcode_form" id="es_subscription_form_61a35eeed7787" data-source="ig-es">
                        {{ csrf_field() }} 
                    <div class="es-field-wrap"><label>
                            
                            <input class="es_required_field es_txt_email ig_es_form_field_email" type="email" name="email" value="" placeholder="" required="required" />

                        </label></div>			

      
        <label style="position:absolute;top:-99999px;left:-99999px;z-index:-99;"><input type="email" name="esfpx_es_hp_email" class="es_required_field" tabindex="-1" autocomplete="-1" value=""/></label>
                        <input type="submit" name="submit" class="es_subscription_form_submit es_submit_button es_textbox_button" id="es_subscription_form_submit_61a35eeed7787" value="Subscribe"/>

        
        <span class="es_spinner_image" id="spinner-image"><img src="{{asset('wp-content/plugins/email-subscribers/lite/public/images/spinner.gif')}}" alt="Loading"/></span>

    </form>


                <span class="es_subscription_message " id="es_subscription_message_61a35eeed7787">
                </span>
</div>



</div>
</div>
</div></div></div></div><style data-type="vc_shortcodes-custom-css"></style></div>
</div>						</div>
                                            </aside><!-- .footer-sidebar -->
</div>


<div class="text-center">Copyright © 2021 Safe Buys All rights reserved | Design & Developed By <a href="https://quicktech-ltd.com">QuickTech IT</a></div>

            {{--  <div class="copyrights-wrapper copyrights-two-columns">
        <div class="container">
            <div class="min-footer">
                <div class="col-left reset-mb-10">
                                                    KHAASFOOD  @2020													</div>
                                            <div class="col-right reset-mb-10">
                        <img src="wp-content/uploads/2020/06/SSL-Commerz-Pay-With-logo-All-Size-03-1.png" alt="payments">							</div>
                                    </div>
        </div>
    </div>  --}}



<!--Start of Tawk.to Script-->
{{--  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59fe9f41bb0c3f433d4c732c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>  --}}
<!--End of Tawk.to Script-->


</footer>