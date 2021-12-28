
    <div data-v-9d19c254="" class="ctg-product-tab_content_btn ">
        <div data-v-9d19c254="">
      
        </div> <button class="btn btn-dark  my-3 rounded"><a href="{{route('frontend.product.featured')}}" class="text-white">See More</a></button> 
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
    
    
    
        

        

        @if($recent_products) @foreach ($features as $product)




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


    
</div>
    </div><!-- .main-page-wrapper --> 
    </div> <!-- end row -->