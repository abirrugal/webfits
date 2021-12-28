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
      <a class="nav-link active" href="{{route('coupon.create')}}">Add Coupon</a>
    </li>
  </ul>

<h3 class="my-3">Add New Coupon</h3>
<form action="{{route("coupon.create")}}" method="post" enctype="multipart/form-data">
@csrf

  <div class="form-group">
    <label for="category">Coupon</label>
    <input type="text" class="form-control mt-3" name="coupon" id="category" value="{{old('coupon')}}">
  </div>

  <label for="stock_status" class="form-label text-black h6">Coupon Discount Type</label>
<div class="mb-3">
      <select select class="form-select" aria-label="Default select example" name="coupon_sts">
        <option value="percent" {{old('coupon_sts')=== 'percent'? 'selected' : '' }}>Percent</option>
        <option value="flat" {{old('coupon_sts')=== 'flat'? 'selected' : '' }}>Flat</option>
      </select>
    </div>

  <div class="form-group">
    <label for="category">Discount</label>
    <input type="number" class="form-control mt-3" name="discount" id="category" value="{{old('discount')}}">
  </div>


  <button type="submit" class="btn btn-primary btn-block mt-3">Add Coupon</button>
</form>
<p class=" mt-3"> <a href="{{route('coupon')}}" >Go back to coupons</a>  </p>
@endsection