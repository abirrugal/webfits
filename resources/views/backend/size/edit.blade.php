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
    <a class="nav-link " href="{{route('admin.size')}}">Size List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.size.create')}}">Add Size</a>
  </li>  
  </ul>


<h3 class="my-3">Edit Size</h3>
<form action="{{route("admin.size.update", $size->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
 <div class="form-group">
    <label for="sub-category" class="h6">Enter Size</label>
<input type="text" class="form-control mb-3" name="size" id="child_category" value="{{$size->size}}">
  </div>
  

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Size</button>
</form>

@endsection