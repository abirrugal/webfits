@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
@if($errors->any())
@foreach($errors->all() as $error)
 <div class="alert alert-danger m-4">
 {{$error}}
 </div>
@endforeach
@endif
<ul class="nav nav-tabs my-4"> 
    <li class="nav-item">
      <a class="nav-link" href="{{route('coupon')}}">Coupon List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{route('coupon.create')}}">Update Create</a>
    </li>
  </ul>

<h3 class="my-3">Edit Coupon</h3>
<form action="{{route("coupon.update", $coupon->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

  <div class="form-group">
    <label for="category">Coupon</label>
    <input type="text" class="form-control mt-3" name="coupon" id="category" value="{{$coupon->coupon}}">
  </div>

  <div class="form-group">
    <label for="category">Discount</label>
    <input type="number" class="form-control mt-3" name="discount" id="category" value="{{$coupon->discount}}">
  </div>


  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Coupon</button>
</form>
<p class=" mt-3"> <a href="{{route('coupon')}}" >Go back to Coupons</a>  </p>
@endsection