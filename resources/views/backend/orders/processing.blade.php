@extends('backend.layouts.admin_layouts')


@section('title')
Customer's Orders.
@endsection

@section('main')


<ul class="nav nav-tabs my-4">
    <li class="nav-item">
        <a class="nav-link " href="{{route('admin.orders')}}">Pending order</a>
      </li>
  
    
      <li class="nav-item">
        <a class="nav-link active" href="#">Processing order</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.orders.completed')}}">Completed order</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.orders.cancel')}}">Cancelled order</a>
      </li>
</ul>


<div class="well">
    <h3 class="my-4">Processing Order List</h3>
  
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    
    <thead>
    <tr>
    <th class="h5 p-3">Id</th>
    <th class="h5 p-3">Customer's Name</th>
    <th class="h5 p-3">Number</th>
    <th class="h5 p-3">City</th>
    <th class="h5 p-3">Delevery Sts</th>
    <th class="h5 p-3">Payment Sts</th>
    <th class="h5 p-3">Details</th>
    <th class="h5 p-3">Delete</th>

    </tr>
    </thead>
    
    <tbody>
    
    
    @foreach($orders as $order)

  
    <tr>
    <td class="card-title font-weight-bold">{{$order->id}}</td>
    <td class="card-title font-weight-bold">{{$order->customer_name}}</td>
    <td class="card-title font-weight-bold">{{$order->customer_phone_number}}</td>
    <td class="card-title font-weight-bold">{{$order->city}}</td>

    <td class="card-title font-weight-bold">

      <form action="{{route('admin.order.delivery', $order->id)}}" method="POST">
        @csrf
        @method('Put')

        <div class="d-flex">

            <select class="form-select" name="order_sts" id="">
                <option value='pending' @if ($order->operational_status=== "pending")
                  selected
                @endif>Panding</option>
                <option value='processing' @if ($order->operational_status=== "processing")
                  selected
                @endif>Processing</option>
                <option value='delivered' @if ($order->operational_status=== "delivered")
                  selected
                @endif>Delivered</option>
                <option value='cancel' @if ($order->operational_status=== "cancel")
                  selected
                @endif>Order Cancelled</option>
              </select>

                    &nbsp;  &nbsp;  <button class="btn btn-success" type="submit">Change</button>
        </div>
              </form>

    </td>


    <td class="card-title font-weight-bold">


      <form action="{{route('admin.order.payment' , $order->id)}}" method="POST">
        @csrf
        @method('Put')

  <div class="d-flex">
                      <select class="form-select" name="order_sts" id="">
                        <option value='Pending' @if ($order->payment_status=== "Pending")
                          selected
                        @endif>Panding</option>
                        <option value='Paid' @if ($order->payment_status=== "Paid")
                          selected
                        @endif>Paid</option>

                     
                      </select>

                      &nbsp;  &nbsp;<button class="btn btn-success " type="submit">Change</button>
  </div>
  
                </form>
      
    </td>

    <td>

      {{-- <div class="d-flex"> --}}
      <a href="{{route('admin.order.show',$order->id)}}">
      <button class="btn btn-primary ">
        Details
      </button>
    </a>
  </td>
  <td>
      <form  action="{{route('admin.order.delete', $order->id)}}" method="POST">
        @csrf 
        @method("Delete")
        <button class="btn btn-danger" type="submit"> X </button>

      </form>
      {{-- </div> --}}

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



@endsection