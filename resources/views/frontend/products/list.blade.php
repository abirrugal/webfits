@extends('frontend.layouts.master')

@section('main_content')



		
    <div class="page-title page-title-default title-size-small title-design-centered color-scheme-light with-back-btn title-shop" style="background-image: url(https://www.khaasfood.com/wp-content/uploads/2017/06/dummy-wood-title.jpg);">
<div class="container">
<div class="nav-shop">

<div class="shop-title-wrapper">
                                                <a href="javascript:woodmartThemeModule.backHistory()" class="woodmart-back-btn"><span>Back to products</span></a>
    
                                    <h1 class="entry-title">{{$category->name}}</h1>
                            </div>


<ul class="woodmart-product-categories has-product-count">

{{-- Sub Category name  --}}

@if($category->child_category()->count() > 0)
@foreach ($category->child_category as $item)

<li class="cat-item cat-item-113 "><a class="category-nav-link" href="{{route('frontend.product.products_list',$item->slug)}}"><span class="category-summary"><span class="category-name">{{$item->name}}</span><span class="category-products-count"><span class="cat-count-number">{{$item->products()->count()}}</span> <span class="cat-count-label">products</span></span></span></a>
@endforeach
@endif

{{-- Sub category start   --}}

{{-- <ul class="children">
    
<li class="cat-item cat-item-258 "><a class="category-nav-link" href="https://www.khaasfood.com/product-category/honey/box_honey/"><span class="category-summary"><span class="category-name">Box Honey</span><span class="category-products-count"><span class="cat-count-number">4</span> <span class="cat-count-label">products</span></span></span></a>
</li>
<li class="cat-item cat-item-115 "><a class="category-nav-link" href="https://www.khaasfood.com/product-category/honey/natural_honey/"><span class="category-summary"><span class="category-name">Natural Honey</span><span class="category-products-count"><span class="cat-count-number">2</span> <span class="cat-count-label">products</span></span></span></a>
</li>


</ul> --}}
{{-- Sub category end   --}}


</li>


</ul>
</div>
</div>
</div>


<!-- MAIN CONTENT AREA -->


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



    @include('frontend.partials.product_list_view')







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

        
            <div data-v-9d19c254="" class="ctg-product-tab_content_btn">
                <div data-v-9d19c254="">
              
                </div> {{$products->links()}} </span>
            </div>
   


@endsection
