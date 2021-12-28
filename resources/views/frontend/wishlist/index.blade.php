@extends('frontend.layouts.master') @section('main_content')




<div class="container">
    <div class="dashboard-site_part">
        <div class="left_side  max-768-none">
            <div data-v-7cb344d6="">
                <div data-v-7cb344d6="" class="lzd-playground-nav">
                    <div data-v-7cb344d6="" class="member-info">
                        <p data-v-7cb344d6=""><span data-v-7cb344d6="">Hello,&nbsp;</span><span data-v-7cb344d6="" id="lzd_current_logon_user_name">{{auth()->user()->name}}</span></p>
                    </div>


                    <ul data-v-7cb344d6="" class="nav-container">
                        {{-- <li data-v-7cb344d6="" id="Manage-My-Account" class="item"><a data-v-7cb344d6="" href="/user/dashboard" class="active" data-spm="Manage-My-Account"><span data-v-7cb344d6="">Manage My Account</span></a>
                            <ul data-v-7cb344d6="" class="item-container">
                                <li data-v-7cb344d6="" id="My-profile" class="sub"><a data-v-7cb344d6="" href="/user/profile" class="" data-spm="My-profile">My Profile</a></li>
                                <li data-v-7cb344d6="" id="Address-book" class="sub"><a data-v-7cb344d6="" href="/user/all_address" class="" data-spm="Address-book">Address Book</a></li>
                                <li data-v-7cb344d6="" id="Payment-methods" class="sub"><a data-v-7cb344d6="" href="/user/payment" class="" data-spm="Payment-methods">My Payment Options</a></li>
                                <li data-v-7cb344d6="" id="Vouchers" class="sub"><a data-v-7cb344d6="" href="/user/vouchers" class="" data-spm="Vouchers">Vouchers</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li data-v-7cb344d6="" id="My-Orders" class="item"><a data-v-7cb344d6="" href="/user/orders" class="" data-spm="My-Orders"><span data-v-7cb344d6="">My Orders</span></a>
                            <ul data-v-7cb344d6="" class="item-container">
                                <li data-v-7cb344d6="" id="Returns" class="sub"><a data-v-7cb344d6="" href="/user/returns" class="">My Returns</a></li>
                                <li data-v-7cb344d6="" id="Cancellations" class="sub"><a data-v-7cb344d6="" href="/user/cancellations" class="">My Cancellations</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li data-v-7cb344d6="" id="My-Reviews" class="item"><a data-v-7cb344d6="" href="/user/reviews" class=""><span data-v-7cb344d6="">My Reviews</span></a>
                            <ul data-v-7cb344d6="" class="item-container"></ul>
                        </li> --}}
                        <li data-v-7cb344d6="" id="My-Wishlists" class="item"><a data-v-7cb344d6="" href="{{route('wishlist')}}" aria-current="page" class="nuxt-link-exact-active nuxt-link-active text-dark" data-spm="My-Wishlists"><span data-v-7cb344d6="">My Wishlist</span></a></li>
                        <li data-v-7cb344d6="" id="My-Wishlists" class="item "><a data-v-7cb344d6="" href="{{route('logout')}}" class="text-dark"><span data-v-7cb344d6="">Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebaruser-mobile max-768-show">
            <div class="sidebar-user-mobile mx-auto">



                <div class="row col-12">
                

                    <div class="product-wishlist col-6 col-sm-4 mb-2 mt-2 text-center"><a href="{{route('wishlist')}}" aria-current="page" class="nuxt-link-exact-active nuxt-link-active">
                            <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 2.748v11.047c3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                </svg></div>
                            <div class="product-wishlist-title">
                                Wishlist
                            </div>
                        </a></div>

                    {{-- <div class="product-wishlist col-6 col-sm-4 mb-2 mt-2 text-center"><a href="/compare" class="">
                            <div class="svg"><i class="icon-balance-scale"></i></div>
                            <div class="product-wishlist-title">
                                Compare
                            </div>
                        </a></div> --}}


                    <div class="user-logout col-6 col-sm-4 mb-2 mt-2 text-center "><a href="{{route('logout')}}">
                            <div class="svg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
                                </svg></div>
                            <div class="user-logout-title">
                                Logout
                            </div>
                        </a></div>
                </div>



            </div>
        </div>
        <div id="user-right-view" class="right_side">
            <div data-v-a166d9c2="">
                <div data-v-a166d9c2="" class="lzd-playground-right">
                    <div data-v-a166d9c2="" class="section-title">
                        <h2 data-v-a166d9c2="" class="title">My Wishlist</h2>
                    </div>



                    
                    <div data-v-a166d9c2="" class="my-wishlist">
                        <div data-v-a166d9c2="" class="mod-header-tab border p-2 "><a data-v-a166d9c2="" href="#" class="active text-dark h6">My Wishlist <span data-v-a166d9c2=""> ({{$wish_lists->count()}})</span></a></div>
                        <!---->
                        <!---->
                        <div data-v-a166d9c2="" class="card card_258">
                            <div data-v-a166d9c2="" class="panel-body">
                                <div data-v-a166d9c2="" class="panel-body-table-area">
                                    <table data-v-a166d9c2="" class="table table-bordered table-striped">
                                        <thead data-v-a166d9c2="">
                                            <tr data-v-a166d9c2="">
                                                <th data-v-a166d9c2="" scope="col">Product</th>
                                                <th data-v-a166d9c2="" scope="col">Details</th>
                                                <th data-v-a166d9c2="" scope="col" class="text-center">Price</th>
                                                <th data-v-a166d9c2="" scope="col" class="text-center">#</th>
                                                <th data-v-a166d9c2="" scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody data-v-a166d9c2="">
                                    

                                            @foreach ($wish_lists as $wish_list)

                                            @foreach ($wish_list->products as $product)

                                              

                                            <tr data-v-a166d9c2="">
                                                <td data-v-a166d9c2="" width="5%" class="text-center"><a data-v-a166d9c2="" href="{{route('frontend.product.show', $product->slug)}}" class="">
                                                    
                                                    <img data-v-a166d9c2="" src="{{asset($product->image)}}" loading="lazy" class="w-100 img-thumbnail" alt="chair" title="chair" width="70px">
                                                </a>
                                            </td>

                                                <td data-v-a166d9c2="" class="text-left"><a data-v-a166d9c2="" href="{{route('frontend.product.show', $product->slug)}}" class=""><strong data-v-a166d9c2="">{{$product->title}}</strong></a> <br data-v-a166d9c2="">
                                                    <div data-v-a166d9c2="">
                                                        
                                                        @isset($product->brand->name)

                                                        
                                                        <b data-v-a166d9c2="">{{$product->brand->name}}  </b>
                                                       
                                                            
                                                        @endisset
                                                        
                                                         
               
                                                    </div> <br data-v-a166d9c2="">
                                                    <div data-v-a166d9c2=""><b data-v-a166d9c2="">Short Details:</b>

                                                        {!! Illuminate\Support\Str::limit( $product->description, 30) !!}

                                                    </div>
                                                </td>


                                                <td data-v-a166d9c2="" class="text-center">
                                                    <div data-v-a166d9c2="">{{$product->sale_price !== null || $product->sale_price > 0  ? number_format($product->sale_price,2)  : number_format($product->price,2) }}</div>
                                                </td>

                                                <td data-v-a166d9c2="" class="text-center">
                                                    <div data-v-a166d9c2=""></div>
                                                </td>
                                                
                                                <td data-v-a166d9c2="" class="text-center">
                                                    <div data-v-a166d9c2="" class="action_btn">
                                                        
                                                        <button data-v-a166d9c2="" class="btn cart_btn" onclick="add_to_cart11({{$product->id}})"><i data-v-a166d9c2="" class="icon-cart-plus"></i></button> 
                                                        
                                                        <form action="{{route('wishlist.delete', $wish_list->id)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        <button data-v-a166d9c2="" type="submit" class="btn delete_btn"><i data-v-a166d9c2="" class="icon-cancel"></i></button>
                                                    
                                                       </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                            @endforeach

        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                        




                </div>
            </div>
        </div>
    </div>
</div>




<script>

    add_to_cart11();
    
    
    
    
    
    function add_to_cart11(product_id) {
    
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
    data: { product_id: data, quantity_show: data1 },
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
