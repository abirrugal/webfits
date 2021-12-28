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
    <a class="nav-link " href="{{route('admin.area')}}">Area List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.area.create')}}">Add Area</a>
  </li>  
  </ul>


<h3 class="my-3">Add New Area</h3>
<form action="{{route("admin.area.create")}}" method="post" enctype="multipart/form-data">
@csrf

 <div class="form-group">
    <label for="sub-category" class="h6">Area Name</label>
    <input type="text" class="form-control mb-3" name="name" id="child_category" value="{{old('name')}}">
  </div>
 <div class="form-group">
    <label for="sub-category" class="h6">Price</label>
    <input type="text" class="form-control mb-3" name="price" id="child_category" value="{{old('price')}}">
  </div>
  
  {{-- <label for="district" class="h6">Select District</label>

  <select class="form-select" id="district" name="district_id">
    <option selected>Select District Name</option>
    @foreach ($district as $item)

    <option value="{{$item->id}}">{{$item->name}}</option>

    @endforeach
    
  </select> --}}

  <button type="submit" class="btn btn-primary btn-block mt-3">Add Area</button>
</form>

@endsection