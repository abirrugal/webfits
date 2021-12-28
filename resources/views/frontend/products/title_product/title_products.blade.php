

                        @if($products) @foreach ($products as $product)




                        {{-- Product List Start  --}}
                        
                        
                        <div class="product-grid-item wd-with-labels product col-md-4 col-sm-6 col-lg-3 woodmart-hover-standard type-product post-2513 status-publish first instock product_cat-dry-fish product_cat-organic has-post-thumbnail  shipping-taxable purchasable product-type-simple has-default-attributes" data-loop="1" data-id="2513">
                            <div class="product-element-top">
                            <a href="{{route('frontend.product.show', $product->slug)}}" class="product-image-link">
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
                                <a href="{{route('frontend.product.show',$product->slug)}}"  class="button product_type_simple   add-to-cart-loop btn-sm mt-2" ><span>
                                    Add to cart
                                    </span></a>
                            </div>
                            </div>
                        
                        
                                                
                        
                                                @endforeach
                                                @endif
                        
                        
                        
                        
                                           
                        
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        
                            
                        
                                            <script>
                                        
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });
                                        
                                        
                                        
                                        
                                        
                                        function Add_wishlist(id){
                                            if(id){    
                                            $.ajax({
                                            type:'get',
                                            dataType: 'json',
                                            data :{
                                            
                                              id:id
                                            },
                                            url: "{{asset('/')}}wishlist/create/"+id,
                                            success:function(data){
                                              
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
                                            })
                                            
                                            if($.isEmptyObject(data.error)){
                                                $('.wishlist_count').text(data);
                                            Toast.fire({
                                            icon: 'success',
                                            title: 'Product added to wishlist success.',
                                            });
                                            
                                            
                                            
                                            }else{
                                            
                                            Toast.fire({
                                            icon: 'error',
                                            title: data.error,
                                            })
                                            
                                            }
                                            
                                            
                                            
                                            },
                                            
                                            
                                            error:function(data){
                                            
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
                                            })
                                            
                                            
                                            Toast.fire({
                                            icon: 'error',
                                            title: "Please Login First.",
                                            })
                                            
                                            }
                                            
                                            
                                            
                                            });
                                                    }else{
                                            
                                            
                                                    }
                                                    }
                        
                        
                                                   
                        // Compare 
                        
                        function compare(id){
                                   
                        
                        
                                   if(id){    
                           $.ajax({
                           type:'get',
                           dataType: 'json',
                           data :{
                           
                             id:id
                           },
                           url: "{{asset('/')}}compare/create/"+id,
                           success:function(data){
                             
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
                           })
                        
                        
                           
                         
                                          
                                           Toast.fire({
                                           icon: 'success',
                                           title: 'Product added to compare success.',
                                           });
                           
                           
                           
                           // }else{
                           
                           // Toast.fire({
                           // icon: 'error',
                           // title: data.error,
                           // })
                           
                           // }
                           
                           
                           
                           },
                           
                           
                           error:function(data){
                           
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
                           })
                           
                           
                           // Toast.fire({
                           // icon: 'error',
                           // title: "Please Login First.",
                           // })
                        
                           
                                           Toast.fire({
                                           icon: 'error',
                                           title: 'Error.',
                                           });
                           
                           }
                           
                           
                           
                           });
                                   }else{
                        
                                       alert('id invalid');
                           
                           
                                   }
                        
                               }
                                             </script>
                        
                                             