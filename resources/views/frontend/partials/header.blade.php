                           {{-- Header Section  --}}
                
                           <section class="header-wrapper" data-v-09d7dd13>
                            <div class="left-side-nav product-nav" data-v-26f78ce2 data-v-09d7dd13>
                           

                                {{--  <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal">
                                    
                               kkk </button>  --}}
                                
                               <span class="openSideNav" onclick="openNav()"  data-v-26f78ce2>☰</span>

                            </div>



                            <div id="mySidenav" class="sidenav">
                                <div class="d-flex justify-content-center">
                                <div  style="height: 100px; width:100px;">
                                                                <img src="{{asset('logo/logo.png')}}" style="height: auto"; width="100%">
                                                                <hr>
                                </div>
                                
                                </div>
                                
                                
                                
                                
                                                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                                                <a class="h4" href="{{route('products.all')}}">Products</a>
                                
                                                                @foreach ($categories as $category)
                                                                    
                                                                
                                                                <a class="h4" href="{{ route('frontend.product.sub_list', $category->slug) }}">{{$category->name}}</a>
                                
                                                                @endforeach
                                                             
                                                              </div>










                            <div class="container" data-v-096ef2b0 data-v-09d7dd13>
                                <div class="header-content" data-v-096ef2b0>
                                    <div class="site-logo" data-v-096ef2b0><a href="{{route('frontend.product.index')}}" aria-current="page"
                                            class="nuxt-link-exact-active nuxt-link-active" data-v-096ef2b0><img
                                                src="{{asset('logo/logo.png')}}" alt="" ></a></div>
                                    <div class="header-menu" data-v-096ef2b0>
                                        <ul data-v-096ef2b0>
                                            <li data-v-096ef2b0>
                                                <a href="{{route('products.all')}}" data-v-096ef2b0>Products</a></li>
                                            {{-- <li data-v-096ef2b0>
                                          
                                                <a href="page/showrooms.html" data-v-096ef2b0>Showroom</a></li> --}}
                                        </ul>
                                    </div>
        
                                    <div class="header-searchBox" data-v-096ef2b0>
                                        <form action="{{route('products.filter')}}" method="GET">

                                            <div class="searchBox-input" data-v-096ef2b0>
                                                <div class="search-filed" data-v-096ef2b0>
                                                    <div class="close-searchBox " data-v-096ef2b0><a href="javascript:void(0)"
                                                            class="close-btn " data-v-096ef2b0><i class="icon-search"
                                                                data-v-096ef2b0></i></a></div> 
                                                                
                                                                <input type="text" name="search"
                                                        placeholder="What are you looking for?" data-v-096ef2b0>

                                                </div>
                                            </div>
                                            <div id="searchModal" class="search-option_modal" style="display:none;"
                                                data-v-096ef2b0>
                                                <div class="search-result" data-v-096ef2b0>
                                                    <ul data-v-096ef2b0> </ul>
                                                </div>
                                            </div>

                                        </form>


                                    </div>


                                

                                    <div class="header-icons" data-v-096ef2b0>
                                   
                                        <ul data-v-096ef2b0>

                  {{-- Small Screen log in user  only --}}
                                            @auth


                                          <li data-v-096ef2b0 class="d-lg-none" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-user-o"
                                              data-v-096ef2b0></i>
                                            
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{route('frontend.user.profile', auth()->user()->name)}}"><i class="icon-user-o d-none d-lg-block" ></i> Profile</a>
                                                <a class="dropdown-item" href="{{route('frontend.user.profile', auth()->user()->name)}}"><i class="icon-heart-empty d-none d-lg-block" ></i> Wish List</a>
                                                <a class="dropdown-item" href="{{route('frontend.user.profile', auth()->user()->name)}}"><i class="icon-balance-scale d-none d-lg-block" ></i> Compare</a>
                                             
                                              </div>
                                            
                                            </li>

     

                                            @endauth



{{-- Large Screen log in  --}}

                                            @auth
                                            <li class="d-none d-lg-inline-block" data-v-096ef2b0><a href="{{route('frontend.user.profile', auth()->user()->name)}}" data-v-096ef2b0><i class="icon-user-o"
                                                data-v-096ef2b0></i></a></li>
                                            @endauth




                                         
                                    @guest
                                    <li data-v-096ef2b0><a href="{{route('login')}}" data-v-096ef2b0><i class="icon-user-o"
                                        data-v-096ef2b0></i></a></li>
                                    @endguest
                                                    

{{-- Compare  --}}

                                             <li class="d-none d-lg-inline-block" data-v-096ef2b0><a href="{{route('compare')}}" class="notification-item"
                                                    data-v-096ef2b0><i class="icon-balance-scale" data-v-096ef2b0></i> <span
                                                        class="notification-badge badge badge-pill badge-dark text-white"
                                                        data-v-096ef2b0>0</span></a></li> 

{{-- Wishlist  --}}



                                            <li data-v-096ef2b0 class="d-none d-lg-inline-block"><a href="{{route('wishlist')}}" class="notification-item"
                                                    data-v-096ef2b0><i class="icon-heart-empty" data-v-096ef2b0></i> <span
                                                        class="notification-badge badge badge-pill badge-dark text-white wishlist_count"
                                                        data-v-096ef2b0>{{$count}}</span></a>
                                                    
                                            </li>




{{-- Cart  --}}

                                            <li class="cart-dropdown" data-v-096ef2b0><a href="{{route('cart.index')}}"
                                                    class="notification-item" data-v-096ef2b0>
                                                    
                                                    @php    
                                                    $data=[];
                                                       $data['cart'] = session('cart')? session('cart'):[];
                                                       $totalCartProducts = array_sum(array_column($data['cart'],'quantity'));
                                                         @endphp   
                                                    
                                                    
                                                    <i class="icon-basket d-block"
                                                        data-v-096ef2b0></i>
                                                        
                                                        <span
                                                        class="d-block notification-badge badge badge-pill badge-dark text-white total-items total_cart_items"
                                                        data-v-096ef2b0>{{$totalCartProducts}}</span></a>


@if (session('cart'))
    


                                                <div class="cart-dropdown-content" data-v-096ef2b0>
                                                    <div class="p-3" data-v-096ef2b0>
                                                        <div data-v-096ef2b0>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                    </div>

                                                   
                                                    <div class="checkout-btn" data-v-096ef2b0><a href="{{route('checkout')}}"
                                                            class="d-block border mt-2 border-dark p-3 font-weight-bold text-uppercase text-center"
                                                            data-v-096ef2b0>Checkout Now</a></div>


                                                    <div class="view-cart-btn d-block" data-v-096ef2b0><a href="{{route('cart.index')}}"
                                                            class="d-block border mt-2 border-dark p-3 font-weight-bold text-uppercase text-center"
                                                            data-v-096ef2b0>View Cart</a></div>
                                                </div>

@endif


                                            </li>


                                        </ul>
                                    </div>


                             

                                </div>
                            </div>



                   


                            <div style="clear:both" data-v-09d7dd13></div>
                            <div class="right-side-nav product-nav" data-v-24d779bc data-v-09d7dd13>
                                <div id="productSideNav2" class="rightSidenav" style="width:0;" data-v-24d779bc>
                                    <div class="right-side-content" data-v-24d779bc>
                                        <div class="right-fixed-content" data-v-24d779bc><a href="javascript:void(0)"
                                                class="productCloseNav2" data-v-24d779bc>×</a></div>
                                        <div class="right-sideNav-menu" data-v-24d779bc>
                                            <div class="right-sideNav-text" data-v-24d779bc>
                                                <div class="header_text_sideNav" data-v-24d779bc>
                                                    <h3 data-v-24d779bc>Hej!</h3>
                                                </div>
                                                <div class="bottom_text_sideNav" data-v-24d779bc><a href="#" data-v-24d779bc>
                                                        <div data-v-24d779bc>Create an IKEA account</div>
                                                        <div class="bottom_text_subText" data-v-24d779bc>Create an account or
                                                            become an IKEA Family club member - oh did we mention it’s free to
                                                            join?</div>
                                                    </a></div>
                                            </div>
                                            <ul class="sideNav-menu-small" data-v-24d779bc>
                                                <li data-v-24d779bc><a href="user/login.html" data-v-24d779bc>My profile</a>
                                                </li>
                                                <li data-v-24d779bc><a href="#" data-v-24d779bc>My orders</a></li>
                                                <li data-v-24d779bc><a href="#" data-v-24d779bc>Find your IKEA store</a></li>
                                                <li data-v-24d779bc><a href="#" data-v-24d779bc>IKEA Credit Card</a></li>
                                                <li data-v-24d779bc><a href="#" data-v-24d779bc>IKEA Family</a></li>
                                                <li data-v-24d779bc><a href="#" data-v-24d779bc>IKEA For Business</a></li>
                                                <li data-v-24d779bc><a href="#" data-v-24d779bc>Customer Service</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->




                            <style>


                                /* The side navigation menu */
                                .sidenav {
                                  height: 100%; /* 100% Full-height */
                                  width: 0; /* 0 width - change this with JavaScript */
                                  position: fixed; /* Stay in place */
                                  z-index: 100; /* Stay on top */
                                  top: 0; /* Stay at the top */
                                  left: 0;
                                  background-color: #111; /* Black*/
                                  overflow-x: hidden; /* Disable horizontal scroll */
                                  padding-top: 60px; /* Place content 60px from the top */
                                  background: #fff;
                                  box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
                                  transition: 0.5s; 0.5 second transition;
                                }
                                
                                /* The navigation menu links */
                                .sidenav a {
                                  padding: 8px 8px 8px 82px;
                                  text-decoration: none;
                                  font-size: .875rem;
                                  color: #111;
                                  display: block;
                                  transition: 0.3s;
                                font-weight: 700;
                                
                                  
                                }
                                
                                /* When you mouse over the navigation links, change their color */
                                .sidenav a:hover {
                                  color: #111;
                                }
                                
                                /* Position and style the close button (top right corner) */
                                .sidenav .closebtn {
                                  position: absolute;
                                  top: 0;
                                  right: 25px;
                                  font-size: 36px;
                                  margin-left: 50px;
                                }
                                
                                /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
                                #main {
                                  transition: margin-left .5s;
                                  padding: 20px;
                                }
                                
                                /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
                                @media screen and (max-height: 450px) {
                                  .sidenav {padding-top: 15px;}
                                  .sidenav a {font-size: 18px;}
                                }
                                
                                
                                .dropdown-menu{
                                    min-width: 7rem;
                                }
                                
                                
                                </style>
                                
                                <script>
                                    /* Set the width of the side navigation to 250px */
                                function openNav() {
                                  document.getElementById("mySidenav").style.width = "250px";
                                }
                                
                                /* Set the width of the side navigation to 0 */
                                function closeNav() {
                                  document.getElementById("mySidenav").style.width = "0";
                                }
                                </script>


                          
                        </section>