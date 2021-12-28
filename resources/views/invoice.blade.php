
<html>

    <head>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
    
    
    <div class="container my-4">
        <div class="d-flex justify-content-end">
     <div class="btn btn-primary px-3 py-2 print mt-5">Print Invoice</div>
     </div>
    </div>
    
    <div class="container">
    
     <div id="voucher_invoice_user">
    
    
    
    <div class="text-center">
    
    <div class="d-flex justify-content-center">

     <div class="logo mb-3"><img src="{{asset('logo/logo.png')}}" height="100px" width="120px" alt=""></div>
     
    <p class="fw-bold">Invoice No: sb{{$order->id}}</p>
    <p class="fw-bold">Date: {{ $order->created_at->format('d.m.Y') }} </p>
    <p class="fw-bold">Time: {{Carbon\Carbon::parse($order->created_at)->format('H:i:s A')}}</p>
    
    {{--  <p class="fw-bold">Token No : <strong>{{ $order->token }}</strong></p>  --}}

    </div>
    
    
    <div class="d-flex justify-content-center">
    <div class=" mb-3">
    <div class="row">
    
      
        {{-- <div class="" style="display: flex;
        justify-content: between;"> --}}
    
    <div class="col-md-6 text-left" style="text-align: left">
        <p class="text-left h6">Customer</p>
        <div>{{$order->customer_name}}</div>
        <div>{{$order->customer_phone_number}}</div>
        {{--  <p class="text-left h6">Customer number : </p>
        <p class="text-left h6 mb-3">Served By : Super Admin</p>  --}}
    </div>
    
    
    {{-- <div class=" " style="display: flex;
    justify-content: center;">
    <div class="col-md-6 ">
        <div class="col-md-6 text-left" style="text-align: left">
            <p class="text-left h6">Shipping</p>
            <div>{{$order->customer_name}}</div>
            <div>{{$order->customer_phone_number}}</div>
            
          {{$order->address}} 
    
        </div>
    </div>
    </div> --}}
    
        {{-- </div> --}}
    
    </div>
    </div>
    
    </div>

<tr></tr>
<tr></tr>
<hr>

    <table class="table table-bordered">
    <thead>
     <tr>
       <th scope="col">SL.</th>
       <th scope="col"></th>
       <th scope="col">Descriptions</th>
       <th scope="col"></th>
       <th scope="col">Price</th>
       <th scope="col"></th>
       <th scope="col">Qty</th>
       <th scope="col"></th>
       <th scope="col">Amount</th>
    
     </tr>
    </thead>
    
    @php
        $i=1;
    @endphp
    
    @foreach ($order->orderProducts as $order_item)
       
    
       <tr>
     
    
       <td class="fw-bold" scope="col">{{$i++}}</td>
       <td class="fw-bold" scope="col"></td>
       <td class="fw-bold" scope="col">
           
        {{ $order_item->product->title }}, 
    
    </td>

    <td class="fw-bold" scope="col"></td>

       <td class="fw-bold" scope="col">{{number_format($order_item->price,2)}}</td>
       <td class="fw-bold" scope="col"></td>

       <td class="fw-bold" scope="col">{{$order_item->quantity}}</td>
       <td class="fw-bold" scope="col"></td>

       <td class="fw-bold" scope="col">{{number_format($order_item->price,2)}}</td>
    
     </tr>
    
  
    @endforeach
    
    
   

    <tr></tr>
    <tr></tr>

    <hr>

     <tr>
     
       <td class="fw-bold" colspan="4" scope="col"></th>
               <td class="fw-bold" colspan="3" class="text-start" scope="col">Subtotal</td>
               <td></td>
               <td class="fw-bold"  class="text-end" scope="col"> {{number_format($order->paid_amount,2)}} </td>
    
     </tr>


     <tr>
     
       <td class="fw-bold" colspan="4" scope="col"></th>
               <td class="fw-bold" colspan="3" class="text-start" scope="col"> Shipping Fee </td>
               <td></td>
               <td class="fw-bold"  class="text-end" scope="col">{{number_format($order->shipping_cost,2)}}</td>
    
     </tr>
     <tr>
     
       <td class="fw-bold" colspan="4" scope="col"></th>
               <td class="fw-bold" colspan="3" class="text-start" scope="col"> Additional Fee </td>
               <td></td>
               <td class="fw-bold"  class="text-end" scope="col"> {{number_format($order->additional_cost,2)}} </td>
    
     </tr>
     <tr>
     
       <td class="fw-bold" colspan="4" scope="col"></th>
               <td class="fw-bold" colspan="3" class="text-start" scope="col"> Total </td>
               <td></td>
               <td class="fw-bold"  class="text-end" scope="col"> {{number_format($order->total_amount + $order->additional_cost,2)}} </td>
    
     </tr>
    
    </table>
    
    </div>
    </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>   
    
    <script src="{{asset('js/print.js')}}"></script>
    
    
    
    <script>
    //     $(function() {
    //   $("#voucher_invoice").find('.print').on('click', function() {
    //     $.print("#voucher_invoice");
    //   });
    
    // });
    
       $(function() {
     $(".print").on('click', function() {
       $.print("#voucher_invoice_user");
     });
    
    });
    
    
    </script>
    
    </body>
    
    </html>
    