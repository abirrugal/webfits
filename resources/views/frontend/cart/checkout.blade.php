@extends('frontend.layouts.master') @section('main_content')
@section('title','Checkout')
<div class="container mt-4 pb-5">
    @guest
    <div class="alert alert-info my-3 text-center h5">You need to login first to complete your order</div>

    <div class="jumbotron p-3">
        <div class="d-flex justify-content-center flex-wrap">
            <a href="{{route('login')}}"> <button class="btn btn-primary mr-2 btn-lg btn-success">Sign into your Account</button></a>
            <a href="{{route('register')}}"> <button class="btn btn-secondary mt-3 mt-md-0 btn-lg " style="background-color: #003a1a">Create an account</button></a>
        </div>
    </div>


    @endguest @empty($totalProducts)
    <div class="alert alert-warning text-center h5">Your cart is empty. Please add some product to your cart first.</div>
    @endempty @auth @if($totalProducts) @foreach ($errors->all() as $message)
    <div class="alert alert-danger">{{$message}}</div>
    @endforeach
    <div class="alert alert-info my-3">You are ordering as {{auth()->user()->name}}</div>
    <h2>Checkout form</h2>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">@if(session('cart')){{count(session('cart'))}}@else 1 @endif</span>
            </h4>
            <ul class="list-group mb-3">
                @if (session('cart'))
                <div class="scroll_v">
                    @foreach (session('cart') as $product)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$product['title']}}</h6><span class="btn-sm">({{$product['quantity']}} items)</span> {{-- <small class="text-muted">Brief description</small> --}}
                        </div>
                        <span class="text-muted"><span class="h5"> &#2547;</span> {{number_format($product['total_price'])}}</span>
                    </li>
                    @endforeach
                </div>
                @endif


@if(session('coupon'))


<li class="list-group-item d-flex justify-content-between">
    <span>Total ({{$totalProducts}} items) (BDT)</span>
    <strong><span class="h5"> &#2547; </span>{{number_format($totalPrice)}}</strong>
</li> 

<li class="list-group-item d-flex justify-content-between bg-light">
    <div class="text-success">
        <h6 class="my-0">Promo code</h6>


{{session('coupon')['name']}} <a class="btn btn-danger btn-sm  ml-2" href="{{route('coupon.remove')}}">X</a>

        

    </div>
    <span class="text-success"><span class="h5">  </span>{{session('coupon')['discount']}}</span>
</li>

<li class="list-group-item d-flex justify-content-between">
    <span>Discounted price</span>
    <strong><span class="h5"> &#2547; </span>{{number_format(session('coupon')['balance'])}}</strong>
</li> 



@else


<li class="list-group-item d-flex justify-content-between">
    <span>Total ({{$totalProducts}} items) (BDT)</span>
    <strong><span class="h5"> &#2547; </span>{{number_format($totalPrice)}}</strong>
</li> 

<li class="list-group-item d-flex justify-content-between bg-light">
    <div class="text-success">
        <h6 class="my-0">Promo code</h6>


Empty promo code.

        

    </div>
    <span class="text-success">-<span class="h5"> &#2547; </span>0</span>
</li>


@endif


              
            </ul>

            @if(session('coupon'))


            @else

            <form action="{{route('coupon.apply')}}" method="POST" class="card p-2">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control mb-2" name="coupon" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
                
            @endif

       


        </div>
        {{-- Address Start --}}
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>

            <form action="{{route('order')}}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label class="mb-2" for="lastName">Name</label>
                    <input type="text" class="form-control mb-2" name="name" id="Name" value="{{auth()->user()->name}}" required>
                    <div class="invalid-feedback">
                        @error('name')
                        <div class="alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2" for="email">Phone Number</label>
                    <input type="number" class="form-control mb-2" name="phone" id="phone" value="{{auth()->user()->phone_number}}">
                    <div class="invalid-feedback">
                        @error('phone')
                        <div class="alert-danger mt-2">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-2" for="address">Address</label>
                    <textarea class="form-control mb-2" name="address" id="address" placeholder="Please enter your full address." required></textarea> @error('address')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror
                </div>
                <div class="row">
                    <div class="col-md-5 mb-2">
                        <label class="mb-2" for="city">City</label>
                        <input type="text" class="form-control mb-2" name="city" id="city"> @error('city')
                        <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span> @enderror
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="mb-2" for="zip">Postal code</label>
                        <input type="text" class="form-control mb-2" name="postal_code" id="postal_code" placeholder="" required>
                        <div class="invalid-feedback">
                            @error('postal_code')
                            <div class="alert-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                
                {{-- <label for="stock_status" class="form-label text-black h6">Select District</label>
                <div class="mb-3">
                      <select id="categoryList" class="custom-select" aria-label="Default select example" name="district">
                        @foreach ($districts as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>


                    <label for="stock_status" class="form-label text-black h6">Select Area</label>
                    <div class="mb-3">
                        <select id="subcategoryList" select class="custom-select" aria-label="Default select example" name="area">
                            <option value="">Select Areas</option>
                          
                           
                            @foreach ($districts as $district)          
                            @foreach ($district->areas as $sub)          
                            <option value="{{$sub->id}}" class='parent-{{ $sub->district_id }} subcategory'>{{$sub->name}}</option>
                        @endforeach
                        @endforeach
                           
                        
                        </select>
                        </div> --}}





                        
                        
                        <label for="stock_status" class="form-label text-black h6 ">Select Delevery Area</label>
                        <div class="mb-3">
                              <select id="subcategoryList" select class="custom-select" aria-label="Default select example" name="area">
                                <option value="">Select Delevery Area</option>

                             
                               
                                @foreach ($areas as $area)   
                                      
                                <option value="{{$area->id}}" class='parent-{{ $area->district_id }} subcategory'>{{$area->name}}</option>
                              @endforeach
                             
                         
                              </select>
                            </div>



                @isset($id)
                <input type="hidden" name="id" value="{{$id}}"> @endisset 
                {{--
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
            
                <hr class="mb-4"> --}}

           

                <h4 class="mb-3">Select A Payment Method.</h4>  
                

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary " onclick="cash()">
                      <input type="radio"  name="pay" id="option1" value="Cash On Delevery"> <div><img src="{{asset('icon/cashondelivery.png')}}"></div> Cash On Delevery 
                    </label>

                    <label class="btn btn-secondary mx-2 " onclick="bkash()">
                      <input type="radio" name="pay"  id="option2" value="Bkash"> <div><img src="{{asset('icon/bkash.png')}}"></div> Bkash 
                    </label>

                    <label class="btn btn-secondary mr-2" onclick="rocket()" >
                        <input type="radio" name="pay" disabled  id="option2" value="Rocket"> <div><img src="{{asset('icon/rocket.png')}}"></div> Rocket
                      </label>

                    <label class="btn btn-secondary " onclick="nagad()">
                      <input type="radio" name="pay" id="option3"  value="Nagad"> <div><img src="{{asset('icon/nagad.png')}}"></div> Nagad
                    </label>
                  </div>

                  
                  
      {{-- Bkash Payment              --}}
                  
<div class="card mt-3 bkash_payment_body d-none">

<div class="card-body">

 

                        <div class="bkash_details ">
                            <p class="text-center">Follow these steps for bKash payment</p>
                            <div class="card mb-3">
                             
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">01. Go to your bKash Mobile Menu by dialing *247#</li>
                                  <li class="list-group-item">02. Choose “Send Money”</li>
                                  <li class="list-group-item">03. Enter The bKash Account Number 01309313258  </li>
                                  <li class="list-group-item">04. Enter Your amount Tk </li>
                                  <li class="list-group-item">05. Enter a reference 1234  </li>
                                  <li class="list-group-item">06. Now enter your bKash Mobile Menu PIN to confirm </li>
                                </ul>
                              </div>
    </div>  




                            <div class="form-group">
                              <label for="exampleFormControlInput1">Enter Mobile Number</label>
                              <input type="text" name="pay_number" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Transection Id</label>
                              <input type="text" name="trans" class="form-control" id="exampleFormControlInput2" placeholder="Transection Id">
                            </div>

                        


                    </div>
                  </div>







{{-- Nagad mayment  --}}


                  <div class="card mt-3 nagad_payment_body d-none">

                    <div class="card-body">




<div class="nagad_details ">
    <p class="text-center">Follow these steps for Nagad payment</p>
    <div class="card mb-3">
     
        <ul class="list-group list-group-flush">
          <li class="list-group-item">01. Go to your Nagad Mobile Menu by dialing *167#</li>
          <li class="list-group-item">02. Choose “Send Money”</li>
          <li class="list-group-item">03. Enter The Nagad Account Number 0172402994 </li>
          <li class="list-group-item">04. Enter your amount</li>
          <li class="list-group-item">05. Enter a reference 1234</li>
          <li class="list-group-item">06. Now enter your Nagad Mobile Menu PIN to confirm </li>
        </ul>
      </div>
</div>  




                            <div class="form-group">
                              <label for="exampleFormControlInput1">Enter Mobile Number</label>
                              <input type="text" name="pay_number_nagad" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlInput1">Transection Id</label>
                              <input type="text" name="trans_nagad" class="form-control" id="exampleFormControlInput2" placeholder="Transection Id">
                            </div>

                        


                    </div>
                  </div>








                  
{{-- Rocket mayment  --}}


<div class="card mt-3 rocket_payment_body d-none">

    <div class="card-body">




<div class="nagad_details ">
<p class="text-center">Follow these steps for Rocket payment</p>
<div class="card mb-3">

<ul class="list-group list-group-flush">
<li class="list-group-item">01. Go to your Rocket Mobile Menu by dialing *322#</li>
<li class="list-group-item">02. Choose “Send Money”</li>
<li class="list-group-item">03. Enter The Rocket Account Number 019199712196</li>
<li class="list-group-item">04. Enter your amount</li>
<li class="list-group-item">05. Enter a reference 1234</li>
<li class="list-group-item">06. Now enter your Rocket Mobile Menu PIN to confirm</li>
</ul>
</div>
</div>  




            <div class="form-group">
              <label for="exampleFormControlInput1">Enter Mobile Number</label>
              <input type="text" name="pay_number_rocket" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Transection Id</label>
              <input type="text" name="trans_rocket" class="form-control" id="exampleFormControlInput2" placeholder="Transection Id">
            </div>

        


    </div>
  </div>





                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block mb-3 w-100" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
</div>
    @endif @endauth
    
    
<script>
     
     $('#categoryList').on('change',function(e){
            console.log(e);
            var brand_id =  e.target.value;
            console.log(brand_id);

        });

 
        function bkash(){
            $('.bkash_payment_body').toggleClass('d-none');
            $('.nagad_payment_body').addClass('d-none');
            $('.rocket_payment_body').addClass('d-none');
        }
    
        function nagad(){
            $('.nagad_payment_body').toggleClass('d-none');
            $('.bkash_payment_body').addClass('d-none');
            $('.rocket_payment_body').addClass('d-none');
        }

        function cash(){
            $('.nagad_payment_body').addClass('d-none');
            $('.bkash_payment_body').addClass('d-none');
        }

        function rocket(){
            
            $('.rocket_payment_body').toggleClass('d-none');
            $('.nagad_payment_body').addClass('d-none');
            $('.bkash_payment_body').addClass('d-none');

        }
    
   
    

</script>
    @endsection