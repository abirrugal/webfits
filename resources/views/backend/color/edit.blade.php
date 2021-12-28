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
    <a class="nav-link " href="{{route('admin.color')}}">Color List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.color.create')}}">Add Color</a>
  </li>  
  </ul>


<h3 class="my-3">Edit Color</h3>

<form action="{{route("admin.color.update", $color->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
 <div class="form-group">
    <label for="sub-category" class="h6">Color Name</label>
<input type="text" class="form-control mb-3" name="name" id="child_category" value="{{$color->name}}">
  </div>
  
  <input type="color" class="w-25 mt-3"   name="color" value="{{$color->color}}">

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Color</button>
</form>

@endsection