

@extends('frontend.layouts.master')

@section('main_content')

<div class="container">
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link " href="{{route('frontend.user.profile', auth()->user()->name)}}">My Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">My Orders</a>
  </li>
</ul>
</div>




<div class="container pb-5">
<div class="well">
    <h3 class="my-4">My Order List</h3>
   
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    <th class="h5 p-3">Order Id</th>
    <th class="h5 p-3">Name</th>
    <th class="h5 p-3">Number</th>

    <th class="h5 p-3">Total Amount</th>
    <th class="h5 p-3">Shipping Cost</th>
    <th class="h5 p-3">Total Payable Amount</th>
    {{-- <th class="h5 p-3">Paid ammount</th> --}}
    <th class="h5 p-3">Oder Process Status</th>
    {{-- <th class="h5 p-3">Action</th> --}}

    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
    <tr>
    <td class="card-title font-weight-bold"> {{$order->id}}</td>
    <td class="card-text font-weight-bold">{{$order->customer_name}} </td>
    <td class="card-title font-weight-bold">{{$order->customer_phone_number}} </td>
    <td class="card-text font-weight-bold">BDT {{$order->paid_amount}} </td>
    <td class="card-text font-weight-bold">BDT {{$order->shipping_cost}} </td>
    <td class="card-text font-weight-bold">BDT {{$order->total_amount}} </td>
    <td class="card-text font-weight-bold">{{$order->operational_status}} </td>
    <td class="card-text font-weight-bold"><div class="d-flex justify-content-end"> <div class="btn btn-success">
      <a class="text-white m-2 p-2" href="{{route('frontend.product.invoice', $order->id)}}">Invoice</a> 
      </div> </div> </td>
    <td class="card-text font-weight-bold">
      
      {{-- <button class="btn btn-success"><a href="{{route('order.details',$order->id)}}"> Details</a></button> --}}
    
    </td>


    </tr>
    @endforeach
    </tbody>
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$orders->links()}}
    </div>
    </div>
    </div>
</div>


  @endsection