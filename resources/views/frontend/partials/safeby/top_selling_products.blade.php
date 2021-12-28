
    <div data-v-9d19c254="" class="ctg-product-tab_content_btn ">
        <div data-v-9d19c254="">
      
        </div> <button class="btn btn-dark  my-3 rounded"><a href="{{route('frontend.product.best_seller')}}" class="text-white">See More</a></button> 
    </div>
</div>

    
<div class="container">
    <div class="row content-layout-wrapper align-items-start">
    
    
    
    <div class="site-content shop-content-area col-lg-12 col-12 col-md-12 description-area-before content-with-products" role="main">
    <div class="woocommerce-notices-wrapper"></div>
    
    <div class="shop-loop-head">
    <div class="woodmart-woo-breadcrumbs">
    <div class="yoast-breadcrumb"></div>		
    </div>
    <div class="woodmart-shop-tools">
    </div>
    </div>
    
    
    <div class="woodmart-active-filters">
    </div>
    
    <div class="woodmart-shop-loader"></div>
    
    <div id="wts-search-results" class="products elements-grid align-items-start woodmart-products-holder  woodmart-spacing-30 pagination-pagination row grid-columns-4" data-source="main_loop" data-min_price="" data-max_price="">
    
    
    
        

        

        @if($top_products) @foreach ($top_products as $product)




        {{-- Product List Start  --}}
        
        
        <div class="product-grid-item wd-with-labels product col-md-4 col-6 col-lg-3 woodmart-hover-standard type-product post-2513 status-publish first instock product_cat-dry-fish product_cat-organic has-post-thumbnail  shipping-taxable purchasable product-type-simple has-default-attributes" data-loop="1" data-id="2513">
            <div class="product-element-top">
            <a href="{{route('frontend.product.show',$product->slug)}}" class="product-image-link">
            <div class="product-labels labels-rounded">
                                                </div>
                                    <img width="300" height="300" src="{{asset($product->image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="{{$product->title}}" loading="lazy" srcset="{{asset($product->image)}}" sizes="(max-width: 300px) 100vw, 300px">            </a>
            <div class="woodmart-buttons wd-pos-r-t">
        
        
        
            </div>
        
            </div>
            <h3 class="product-title"><a href="{{route('frontend.product.show',$product->slug)}}">{{$product->title}}</a>
            </h3>
            
            @if($product->discounted_price !== null && $product->discounted_price > 0) 
            <span class="price">
            <span class="woocommerce-Price-amount amount">
           <strike>৳&nbsp; {{$product->price}}  </strike>                           </span>
            </span>
          
        
            <span class="price">
            <span class="woocommerce-Price-amount amount">
            ৳&nbsp;{{$product->sale_price}}                           </span>
            </span>
        
        @else
        
        <span class="price">
            <span class="woocommerce-Price-amount amount">
           ৳&nbsp; {{$product->price}}  </span>
            </span>
        
        
            @endif
        
        
        
            <div class="woodmart-add-btn ">
                <a href="{{route('frontend.product.show', $product->slug)}}"  class="button product_type_simple   add-to-cart-loop btn-sm mt-2" ><span>
                    Add to cart
                    </span></a>
            </div>
            </div>
        
        
                                
        
                                @endforeach
                                @endif
    
    
    
    
    
    
    
    </div>
    
    
    <div class="products-footer">
    <nav class="woocommerce-pagination wts_pagination">
    </nav>
    </div>
    <style type="text/css">
    .blur-product {
    filter: blur(6px);
    }
    </style>
    <script type="text/javascript">
    (function($) {
    window.addEventListener('popstate', function(event) {
    var currentLink = location.href;
    var params = Object.fromEntries([...new URLSearchParams(new URL(currentLink).search)]);
    navigate_to_url(params);
    });
    $(".wts_pagination").on("click", "a.page-numbers", function(e) {
    e.preventDefault();
    var currentLink = $(this).attr('href');
    var re=/page\/[0-9]\//gi;
    if(re.lastIndex){
    currentLink.replace(re,'');
    var params = Object.fromEntries([...new URLSearchParams(new URL(currentLink).search)]);
    }else{
    var params = Object.fromEntries([...new URLSearchParams(new URL(currentLink).search)]);
    }
    navigate_to_url(params);
    });
    
    function navigate_to_url(params){
    /**
    * Remove ajax_nonce, action
    */
    params = _.pick(params, function(value, key, object) {
    var bad_params = ['ajax_nonce', 'action'];
    return _.indexOf(bad_params, key) === -1;
    });
    var newUrl = new URLSearchParams(params).toString();
    var re=/page\/[0-9]\//gi;
    re.exec(location.href);
    if(re.lastIndex){
    history.replaceState('','',location.origin+'/?'+newUrl);
    }else{
    history.pushState('', JSON.stringify(params), '?' + newUrl);
    }
    show_search_results(params);
    }
    
    function show_search_results(params) {
    $.ajax({
    "url": wp_total_solr_ajax.ajaxurl,
    "type": "get",
    "datatype": "json",
    "data": _.extend({
    'ajax_nonce': wp_total_solr_ajax.ajax_nonce,
    'per_page': 16,
    'action': 'wts_get_search_results'
    }, params),
    beforeSend: function() {
    $(".product-grid-item").addClass("blur-product");
    },
    success: function(response) {
    $(".product-grid-item").removeClass("blur-product");
    $(".woodmart-shop-tools").html(response.num_items);
    $("#wts-search-results").html(response.results);
    $(".wts_pagination").html(response.pagination);
    }
    });
    }
    
    }(jQuery));
    </script>
    
    <script type="text/javascript">
    if(typeof webengage !== "undefined"){
    webengage.track('Category Viewed', {
    "Category Id" : "102",
    "Category Name" : "Fish"
    });
    }
    </script></div>
    </div><!-- .main-page-wrapper --> 
    </div> <!-- end row -->