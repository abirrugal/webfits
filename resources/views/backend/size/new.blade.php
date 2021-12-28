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
    <a class="nav-link " href="{{route('admin.size')}}">Size List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.size.create')}}">Add Size</a>
  </li>  
  </ul>


<h3 class="my-3">Add Size</h3>

<form action="{{route("admin.size.create")}}" method="post" enctype="multipart/form-data">
@csrf


<div class="form-group mb-2">
  <label for="sub-category" class="h6">Enter Size</label>
<input type="text" class="form-control mb-3" name="size" id="child_category" value="{{old('size')}}">
</div>


  
  <button type="submit" class="btn btn-primary btn-block mt-3">Add Size</button>
</form>


<script type="text/javascript">

  $('.colorpicker').colorpicker();

</script>
@endsection