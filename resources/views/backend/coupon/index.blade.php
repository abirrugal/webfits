@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('coupon')}}">Copon List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('coupon.create')}}">Add Coupon</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Copon List</h3>
    <p>
    <a class="btn btn-success" href="{{route('coupon.create')}}">Add coupon</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Coupon Name</th>
    <th class="h5 p-3">Coupon</th>
    <th class="h5 p-3">Coupon Percent Type</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($coupons as $color)
       <tr>

        
  

    <td class="h5 text-center">{{$color->coupon}}</td>
    <td class="h5 text-center">{{$color->discount}}</td>
    <td class="h5 text-center">{{$color->coupon_sts}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('coupon.edit', $color->id)}}" class=" btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('coupon.delete', $color->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger ">Delete</button>
      </form>  
    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$coupons->links()}}
    </div>
    </div>
    </div>

 
@endsection