@extends('frontend.layouts.master') @section('main_content')
@section('title', request()->segment(count(request()->segments())))

<style>

img {
    max-width: 100%;
    border: 0;
    vertical-align: top;
}


/* Image sizes  */

.product_img {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    width: auto;
    max-width: 270px;
    max-height: 200px
}

.title_img {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    width: auto;
    max-width: 190px;
    max-height: 150px
}

.product_img_show {
    max-width: 289px;
    max-height: 289px;
    height: 100%!important;
    width: auto!important;
}

.w-sm {
    width: 90%
}

footer {
    padding-top: 3rem;
    padding-bottom: 3rem
}

footer p {
    margin-bottom: .25rem
}

.absulute-bottom {
    position: absolute;
    bottom: 0
}

.price-title-home {
    font-size: 1rem;
    font-weight: 700;
    color: #d2691e
}


/* Price  */


/* Show page price  */

.price-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #d2691e
}

.item-price {
    font-size: 18px;
    padding: 2px 0;
    font-weight: 600;
    text-align: left;
}

.item-price strike {
    color: #999;
    margin-right: 5px;
    font-size: 15px;
}

.item-price span {
    line-height: 21px;
    height: 22px;
    font-size: 18px;
    color: #f57224;
}

#currency {
    font-size: 18px;
    font-weight: 400;
    margin-right: 2px;
}


/* Cart  */

.add_to_cart {
    background: #003a1a;;
    border-color: #a88734 #9c7e31 #846a29;
    color: #fff
}

.add_to_cart:hover{
 color:#fff;   
}

.buy_now {
    background: #6ca300;
    border-color: #ca7c1b #be751a #a56616;
    color: #fff
}
.buy_now:hover{
    color:#fff;
}

.brand {
    color: #fff;
    font-size: 1.5rem;
    font-weight: 700
}

.bg-navi {
    background-color: #203040
}

.bd-subnavbar {
    position: relative;
    z-index: 1020;
    background-color: rgba(255, 255, 255, .95);
    box-shadow: 0 .5rem 1rem rgb(0 0 0 / 5%), inset 0 -1px 0 rgb(0 0 0 / 15%)
}


/* Small screen menu and title margin */

#menu_sm {
    margin-top: 25px;
}



.side_menu_title {
    color: #000;
    font-family: inherit;
    font-weight: 600;
    font-size: 14px;
    padding-left: 5px;
    white-space: nowrap
}

.menu_title {
    padding-top: 13px;
    padding-bottom: 1px;
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
    position: relative;
    height: 36px;
    line-height: 18px;
    color: #111;
    white-space: normal;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.category_title {
    padding-top: 13px;
    padding-bottom: 1px;
    font-size: 22px;
    color: #0f1111!important;
    font-weight: 700;
    font-family: "Amazon Ember", Arial, sans-serif;
    text-transform: capitalize
}

.border-btm {
    border-bottom: 1px solid #e4dada
}

.product-title,
.product-title a {
    position: relative;
    font-size: 16px;
    height: 30px;
    line-height: 18px;
    color: #212121;
    white-space: normal;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.same_level_text {
    position: relative;
    height: 36px;
    line-height: 18px;
}

html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.fa-apple-alt,
.fa.fa-cart-arrow-down,
i.fa.fa-truck {
    font-size: 40px;
    color: #fff;
    text-align: center
}

.bg-violet {
    background-color: #0d1128!important
}

.bg-blue {
    background-color: #2e3094!important
}

.text-dim-white {
    color: rgba(255, 255, 255, .8);
    font-size: 16px;
    line-height: 1.8;
    font-weight: 400
}

.main_heading {
    font-weight: 700;
    font-size: 28px;
    line-height: 36px;
    box-sizing: border-box;
    text-rendering: optimizeLegibility;
    color: #0f1111;
    -webkit-text-size-adjust: 100%
}

.category-title-text {
    font-size: 21px!important;
    line-height: 27.3px!important;
    padding-bottom: 0;
    display: block;
    margin-bottom: 8px!important;
    font-weight: 700;
    text-rendering: optimizeLegibility;
    padding: 0;
    margin: 0;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #0f1111
}

.sub-title-text {
    text-align: center;
    font-size: 16px;
    color: #666;
    font-family: Lato, sans-serif;
    font-weight: 400;
    line-height: 20px;
    margin: 15px 0 70px 0
}

.footer_amazona {
    margin-bottom: 0;
    padding-bottom: 0;
    background-color: #232f3e;
    min-width: 1000px;
    position: relative;
    font-size: 14px;
    line-height: 20px
}

.footer_sps {
    width: 10%;
    padding: 0 15px
}

.scroll_v {
    max-height: 340px;
    overflow: auto
}

.product-container {
    display: grid;
    grid-template-rows: 1fr;
    grid-gap: 15px;
    justify-content: center;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr))
}

.logo-text {
    margin-top: 8px;
    font-family: 'Exo 2', Montserrat, sans-serif;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 600;
}

.text-size-title {
    font-size: 15px!important;
    font-weight: 500;
    color: #d73a39;
    font-family: Montserrat, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    margin: 13px 15px
}

.sub-title-text {
    text-align: center;
    font-size: 16px;
    color: #666;
    font-family: Lato, sans-serif;
    font-weight: 400;
    line-height: 20px;
    margin: 15px 0 70px 0
}

.service-img-size {
    min-height: 200px;
    max-height: 200px
}

#services .container .card-title,
.nav-tabs .nav-link.active,
.title-text,
nav-tabs .nav-item.show .nav-link {
    font-family: Montserrat, sans-serif;
    text-shadow: none;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 15px;
    color: #222
}

#services .container .card-text,
.description {
    display: inline-block;
    font-size: 15px;
    text-shadow: none;
    font-weight: 400;
    font-family: Montserrat, sans-serif;
    margin: 0 0 5px;
    line-height: 10px
}

.nav-tabs .nav-link.active,
.xeo2 {
    font-family: 'Exo 2', sans-serif;
    text-shadow: none;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 18px;
    color: #222
}

.hr {
    width: 20%
}


/* searchbar curve  */

.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 1px;
}

.bd-subnavbar {
    position: relative;
    z-index: 0;
    background-color: rgba(255, 255, 255, .95);
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 5%), inset 0 -1px 0 rgb(0 0 0 / 15%);
}

@media (min-width:768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem
    }
}

@media (max-width:600px) {
    .product_img,
    .title_img {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        width: auto;
        max-width: 150px;
        max-height: 200px;
        margin-top: 8px;
    }
}

@media (max-width:500px) {
    .btn-group-lg>.btn,
    .btn-lg {
        font-size: 1rem
    }
    .product-title,
    .product-title a {
        font-size: 15px;
        height: 35px;
        overflow: hidden;
        line-height: 18px;
        color: #212121;
        white-space: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
    .product-container {
        display: grid;
        grid-template-rows: 1fr;
        grid-gap: 15px;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr))
    }
    .product_img,
    .title_img {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        width: auto;
        max-width: 100px;
        max-height: 200px;
        margin-top: 15px;
    }
}

@media (max-width:320px) {
    .hidden {
        display: none
    }
    .btn-group-lg>.btn,
    .btn-lg {
        font-size: 15px
    }
    .product-container {
        display: grid;
        grid-template-rows: 1fr;
        grid-gap: 15px;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr))
    }
    .product_img,
    .title_img {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        width: auto;
        max-width: 80px;
        max-height: 150px;
        margin-top: 15px;
    }
    .price-title-home {
        font-size: .8rem;
        font-weight: 700;
        color: #d2691e
    }
    .logo-text {
        margin-top: 5px;
        font-family: 'Exo 2', Montserrat, sans-serif;
        text-transform: uppercase;
        font-size: 16px;
    }
}
</style>






<div class="mt-md-2 mt-lg-3 pb-5">
    <div class="container-fluid pb-5">
        <div class="">
            @if (session('success'))

            <div class="alert alert-success">
                {{session('success')}}
            </div>

            @endif
        </div>
        <div class="row">
          <div class="col-md-8  p-1 py-sm-2 pl-sm-3 pr-sm-2 mb-md-3">
            <div class=" mb-3  p-2 " style="max-width: 100%;">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-md-5 ">
                            <img class=" w-100" src="{{asset($product->image)}}" alt="{{$product->slug}}">
                        </div>
                        <div class="col-md-5">
                            <div class="scroll_products">
                                <div class="card-body ml-3">
                                    <h5 class="card-title basic-title">{!!$product->title!!}</h5>
                                    <hr> {{-- Check If The Sale price is available or not if is it show it otherwise show price --}} 
                                    
                                     
                                    
                                    @if($product->discounted_price !== null && $product->discounted_price > 0)
                                    <p class="card-text price-title"> BDT <strike>{{number_format($product->price,2)}}</strike>(-{{$product->discount}}%)
                                    <br> BDT {{number_format($product->sale_price,2)}}</p>
                                    @else
                                    <p class="card-text price-title"> BDT {!! number_format($product->price,2)!!}</p>
                                    
                                    @endif
                                    <div class=" d-lg-none">
                                        @if($product->in_stock===1 || $product->stock_amount !== 0 )

                                        <div class="h5 mt-4 text-success mb-3 ">In Stock</div>
                                        @else
                                        <div class="h5 mt-4 text-danger mb-3 ">Out Of Stock</div>
                                        @endif
                                    </div>
                                    <div class="mb-3 d-lg-none"> Quantity:</div>
                                    <div class="d-flex d-lg-none justify-content-start flex-row align-items-center quantity_div mb-4 mb-lg-2 ">
                                        <div>

                                            <button class="btn btn-danger minus_btn_show">-</button>
                                        </div>
                                        <button class="card-text border px-3 mx-2 d-flex align-items-center display_quantity_show w-auto">1</button> {{-- <input type="number" class="display_quantity_show w-50" disabled value="1"> --}}
                                        <div>
                                        <button class="btn btn-success plus_btn_show">+</button>
                                        </div>
                                    </div>
                                <li class="list-group-item d-md-none cart_div mb-3">



@if($product->product_colors()->count() > 0)
<div class="h6">Select Color</div>



@foreach ($product->product_colors as $item)

<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="{{$item->id}}sm" name="color_value_sm" value="{{$item->color_name}}" class="custom-control-input">
    <label class="custom-control-label" for="{{$item->id}}sm"> {{$item->color_name}} </label>

  </div>

  @endforeach

  @endif

@if($product->product_sizes()->count() > 0)
  <div class="h6">Select Sizes</div>




@foreach ($product->product_sizes as $item)

<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="{{$item->id}}sm" name="size_value_sm" value="{{$item->size}}" class="custom-control-input">
    <label class="custom-control-label" for="{{$item->id}}sm"> {{$item->size}} </label>

  </div>

  @endforeach

  @endif
  
  



  
  @if($product->product_weights()->count() > 0)

  <div class="h6">Select Weights</div>
  @foreach ($product->product_weights as $item)

  <div class="custom-control custom-radio mb-2">
    <input type="radio" id="{{$item->id}}sm" name="weight_value_sm" value="{{$item->id}}" class="custom-control-input">
    <label class="custom-control-label" for="{{$item->id}}sm">{{$item->weight}} - &#2547 {{$item->price}} @if($product->discount !== null || $product->discount > 0) (-{{$product->discount}}%)  @endif</label>
  </div>
  @endforeach
  @endif

                                    



                                        <div class="d-flex d-md-none align-items-center flex-row mt-3">
                                            <form class="mr-2" data-route="{{route('cart.store')}}" id="add_cart" method="POST">
                                                @csrf

                                                <input type="hidden" name="product_id" class="product_id_show" value="{{$product->id}}">
                                                <input disabled type="hidden" name="quantity_show" class="quantity_count_show w-50 quantity_show" value="1">

                                            <button class="btn   add_to_cart w-100" type="button" onclick="add_to_cart11({{$product->id}})" data-route="{{route('cart.store')}}">Add to cart</button>
                                            </form>

                                            {{-- <form data-route="{{route('cart.store')}}" class="d-inline" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" class="product_id_show" value="{{$product->id}}">
                                                
                                                <div class="button cart-button">
                                                    <button class="btn cart_route_selection_ajax" data-route="{{route('cart.store')}}" type="button" onclick="add_to_cart({{$product->id}})" style="width: 100%;">Add to cart</button>
                                                </div>
                                                
                                            </form> --}}


                                            {{-- <form action="{{route('buy_now', $product->id)}}" class="card ml-3" method="POST">
                                                @csrf
                                                <button class="btn  buy_now " type="submit">Buy now</button>
                                            </form> --}}


                                            <div class="card  d-md-none ">
                                                <a class="w-100 " href="{{route('cart.index')}}"> <button class="btn  buy_now" onclick="add_to_cart11({{$product->id}})"> Buy now </button></a>
                                            </div>



                                        </div>
                                    </li>
                                    <div class="font-weight-bold h6">Description</div>
                                    <p class="card-text description">{!!$product->description!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pl-md-2 px-0 px-sm-2"> {{-- This is main division it divided into two section, This is 2nd --}}
                <ul class="list-group mt-4 ">
                    {{--
                    <li class="list-group-item active">
                        Checkout
                    </li> --}}
                    <li class="list-group-item d-none d-lg-block">

                        <div class="d-none d-lg-block">
                            @if($product->in_stock===1 || $product->stock_amount !== 0)

                            <div class="h5 mt-3 text-success mb-3">In Stock</div>
                            @else
                            <div class="h5 mt-3 text-danger mb-3">Out Of Stock</div>

                            @endif
                        </div>
                        {{-- Large --}}

@if($product->product_colors()->count() > 0)
<div class="h6">Select Color</div>



@foreach ($product->product_colors as $item)

<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="{{$item->id}}" name="color_value" value="{{$item->color_name}}" class="custom-control-input" >
    <label class="custom-control-label" for="{{$item->id}}"> {{$item->color_name}} </label>

  </div>

  @endforeach

  @endif

@if($product->product_sizes()->count() > 0)

  <div class="h6">Select Size</div>



@foreach ($product->product_sizes as $item)

<div class="custom-control custom-radio ">
    <input type="radio" id="{{$item->id}}" name="size_value" value="{{$item->size}}" class="custom-control-input">
    <label class="custom-control-label" for="{{$item->id}}"> {{$item->size}} </label>

  </div>

  @endforeach

  @endif



  @if($product->product_weights()->count() > 0)

  <div class="h6">Select Weights</div>
  @foreach ($product->product_weights as $item)

  <div class="custom-control custom-radio mb-2">
    <input type="radio" id="{{$item->id}}" name="weight_value" value="{{$item->id}}" class="custom-control-input">
    <label class="custom-control-label" for="{{$item->id}}">{{$item->weight}} - &#2547 {{$item->price}} @if($product->discount !== null || $product->discount > 0) (-{{$product->discount}}%)  @endif</label>
  </div>
  @endforeach
  @endif


                        <div class="mb-2 "> Quantity:</div>

                        <div class="d-flex justify-content-start flex-row align-items-center quantity_div mb-4 mb-lg-2 ">
                            <div>
                                <button class="btn btn-danger minus_btn_show">-</button>
                            </div>

                            <button class="card-text border px-3 mx-2 d-flex align-items-center display_quantity_show w-auto">1</button> {{-- <input type="number" class="display_quantity_show w-50" disabled value="1"> --}}
                            <div>
                                <button class="btn btn-success plus_btn_show">+</button>

                            </div>
                        </div>
                    </li>
                    {{-- <li class="list-group-item justify-content-between bg-light d-none d-md-flex">

                        <div class="text-success ">
                            <h5 class="my-0">Promo code</h5>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success ">-0</span>

                    </li> --}}
                    
                    {{-- Large screen --}}
                    <li class="d-none d-lg-flex list-group-item justify-content-between bg-light flex-wrap">
                        <strong class="h5 font-weight-bold pt-1 ">
                            
                            Price BDT&nbsp;<span id="lg-right-subtotal">{{ $product->sale_price ? number_format( $product->sale_price,2) :  number_format($product->price,2) }} </span> </strong>
                    </li>
                    <li class="list-group-item d-none d-md-block cart_div">
                        <form data-route="{{route('cart.store')}}" id="add_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" class="product_id_show" value="{{$product->id}}">
                            <input disabled type="hidden" name="quantity_show" class="quantity_count_show w-50 quantity_show" value="1">
                            <button class="btn  add_to_cart w-100" type="button" data-route="{{route('cart.store')}}" onclick="add_to_cart11({{$product->id}})">Add to cart</button>
                        </form>


                        {{-- <form class="card d-none d-md-block mt-3" action="{{route('buy_now', $product->id)}}" method="POST">
                            @csrf
                            <button class="btn  buy_now w-100 " type="submit">Buy now</button>
                        </form> --}}
<div class="card d-none d-md-block mt-3">
                        <a class="w-100" href="{{route('cart.index')}}"> <button class="btn  buy_now w-100 " onclick="add_to_cart11({{$product->id}})"> Buy now </button></a>
</div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>

add_to_cart11();





function add_to_cart11(product_id) {




  var color_val =  $('input[name="color_value"]:checked').val();
  var size_val =  $('input[name="size_value"]:checked').val();
  var weight_val =  $('input[name="weight_value"]:checked').val();

  var color_val_sm =  $('input[name="color_value_sm"]:checked').val();
  var size_val_sm =  $('input[name="size_value_sm"]:checked').val();
  var weight_val_sm =  $('input[name="weight_value_sm"]:checked').val();

if(color_val === "undefined" && size_val === 'undefined' && weight_val === 'undefined' ){
    var color = color_val_sm;
    var size = size_val_sm;
    var weight = weight_val_sm;
}else{
    var color = color_val;
    var size = size_val;
    var weight = weight_val;
}


   
$(document).ready(function(e) {

    
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var data = product_id;
var data1 = $('.quantity_show').val();


$.ajax({
method: 'POST',

url: "{{asset('/')}}cart",
data: { product_id: data, quantity_show: data1, color:color, size:size , weight:weight },
cache: false,
success: function(response) {
//  window.location.reload();
    if (response.status === 'success') {
 

        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        });

        Toast.fire({
        icon: 'success',
        title: "Item added to cart success.",
        });


$('.total_cart_items').html(response.totalProducts);        

$('.test').html('This is for test');
$('.productImage_ajax').attr("src", response.productImage);
$('.productTotalPrice_ajax').html(numberWithCommas(response.productTotalPrice));
$('.total_price_ajax').html(numberWithCommas(response.total));

    }

},
async: false,
error: function(error) {

}
})
})

}


        </script>



@endsection

@section('before_body')



@endsection