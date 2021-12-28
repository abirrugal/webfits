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
    <a class="nav-link " href="{{route('admin.brand')}}">Brand List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.brand.create')}}">Add Brand</a>
  </li>  
  </ul>


<h3 class="my-3">Add New Brand</h3>
<form action="{{route("admin.brand.create")}}" method="post" enctype="multipart/form-data">
@csrf
 <div class="form-group">
    <label for="sub-category" class="h6">Brand Name</label>
<input type="text" class="form-control mb-3" name="name" id="child_category" value="{{old('name')}}">
  </div>
  
<div class="mb-3">
    <label for="image" class="form-label text-black h6">Image</label>
    <input type="file" name="image"  class="form-control" id="image" aria-describedby="PriceHelp">
    {{-- <div id="emailHelp" class="form-text">Upload Banner image..</div> --}}
</div>

  <button type="submit" class="btn btn-primary btn-block mt-3">Add Brand</button>
</form>

@endsection