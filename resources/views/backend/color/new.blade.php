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

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>

<ul class="nav nav-tabs my-4">  
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.color')}}">Color List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.color.create')}}">Add Color</a>
  </li>  
  </ul>


<h3 class="my-3">Add Color</h3>

<form action="{{route("admin.color.create")}}" method="post" enctype="multipart/form-data">
@csrf


<div class="form-group mb-2">
  <label for="sub-category" class="h6">Color Name</label>
<input type="text" class="form-control mb-3" name="name" id="child_category" value="{{old('name')}}">
</div>

<input type="color" class="w-25 mt-3"   name="color" value="{{old('color')}}">

  

  <button type="submit" class="btn btn-primary btn-block mt-3">Add Color</button>
</form>


<script type="text/javascript">

  $('.colorpicker').colorpicker();

</script>
@endsection