@extends('frontend.layouts.master')

@section('main_content')

<div class="container">



  <div class="card">
    <h4 class="card-title text-center py-3 border">Order Details</h4>

    {{route('admin.order.show',$order->id)}}

    <table class="table">
      <thead>
        <tr class="h5">
          <th scope="col">Products</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          
        </tr>
      </thead>
    
      <tbody>
    @foreach ($order as $orders)
    @foreach ($orders->orderProducts as $item)
    
     
    <tr>
          
        <td class="h6">{{$item->product->title}}</td>
        <td class="h6">{{$item->quantity}}</td>
        <td class="h6">{{number_format($item->price,2)}}</td>
        
      </tr>


    @endforeach


     @endforeach
    
    </tbody>
  </table>
    
     {{-- <div class="card-body h5 d-flex justify-content-center me-4 flex-column">
      <div class="font-weight-bold ">Shipping Cost (BDT) :&nbsp; </span> <span class="me-3">{{number_format($order->shipping_cost,2)}}</div>
      <div class="font-weight-bold ">Total Amount (With Shipping Cost) (BDT) :&nbsp; </span> <span class="me-3">{{number_format($order->total_amount,2)}}</div>
    </div> --}}
    
      </div>
      </div>





  @endsection