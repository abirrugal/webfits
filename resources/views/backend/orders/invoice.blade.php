
@extends('backend.layouts.admin_layouts')


@section('main')


<div class="container">
    <div class="d-flex justify-content-end">
 <div class="btn btn-primary px-3 py-2 print">Print Invoice</div>
 </div>
</div>

<div class="container">

 <div id="voucher_invoice">



<div class="text-center">


 <div class="logo mb-3"><img src="{{asset('logo/logo.png')}}" height="100px" width="120px" alt=""></div>
 
<p class="fw-bold">Invoice No: sb{{$order->id}}</p>
<p class="fw-bold">Date: {{ $order->created_at->format('d.m.Y') }} </p>
<p class="fw-bold">Time: {{Carbon\Carbon::parse($order->created_at)->format('H:i:s A')}}</p>

{{--  <p class="fw-bold">Token No : <strong>{{ $order->token }}</strong></p>  --}}




<div class=" mb-3">
<div class="row justify-content-between">

  
    <div class="d-flex justify-content-between">

<div class="col-md-6 text-left" style="text-align: left">
    <p class="text-left h6">Customer</p>
    <div>{{$order->customer_name}}</div>
    <div>{{$order->customer_phone_number}}</div>
    {{--  <p class="text-left h6">Customer number : </p>
    <p class="text-left h6 mb-3">Served By : Super Admin</p>  --}}
</div>

<div class="float-right">
<div class="col-md-6 ">
    <div class="col-md-6 text-left" style="text-align: left">
        <p class="text-left h6">Shipping</p>
        <div>{{$order->customer_name}}</div>
        <div>{{$order->customer_phone_number}}</div>
        <div>{{$order->address}}</div>
       

    </div>
</div>
</div>
    </div>

</div>
</div>

<table class="table table-bordered">
<thead>
 <tr>
   <th scope="col">SL.</th>
   <th scope="col">Descriptions</th>
   <th scope="col">Price</th>
   <th scope="col">Qty</th>
   <th scope="col">Amount</th>

 </tr>
</thead>

@php
    $i=1;
@endphp

@foreach ($order->orderProducts as $order_item)
   

   <tr>
 

   <td class="fw-bold" scope="col">{{$i++}}</td>
   <td class="fw-bold" scope="col">
       
    {{ $order_item->product->title }}, 

</td>
   <td class="fw-bold" scope="col">{{number_format($order_item->price,2)}}</td>
   <td class="fw-bold" scope="col">{{$order_item->quantity}}</td>
   <td class="fw-bold" scope="col">{{number_format($order_item->price,2)}}</td>

 </tr>


@endforeach




 <tr>
 
   <td class="fw-bold" colspan="2" scope="col"></th>
           <td class="fw-bold" colspan="2" class="text-start" scope="col">Subtotal</td>
           <td class="fw-bold"  class="text-end" scope="col"> {{number_format($order->paid_amount,2)}} </td>

 </tr>
 <tr>
 
   <td class="fw-bold" colspan="2" scope="col"></th>
           <td class="fw-bold" colspan="2" class="text-start" scope="col"> Shipping Fee </td>
           <td class="fw-bold"  class="text-end" scope="col">{{number_format($order->shipping_cost,2)}}</td>

 </tr>
 <tr>
 
   <td class="fw-bold" colspan="2" scope="col"></th>
           <td class="fw-bold" colspan="2" class="text-start" scope="col"> Additional Fee </td>
           <td class="fw-bold"  class="text-end" scope="col"> {{number_format($order->additional_cost,2)}} </td>

 </tr>
 <tr>
 
   <td class="fw-bold" colspan="2" scope="col"></th>
           <td class="fw-bold" colspan="2" class="text-start" scope="col"> Total </td>
           <td class="fw-bold"  class="text-end" scope="col"> {{number_format($order->total_amount + $order->additional_cost,2)}} </td>

 </tr>

</table>

</div>
</div>
</div>

<script>
//     $(function() {
//   $("#voucher_invoice").find('.print').on('click', function() {
//     $.print("#voucher_invoice");
//   });

// });

   $(function() {
 $(".print").on('click', function() {
   $.print("#voucher_invoice");
 });

});


</script>

@endsection
