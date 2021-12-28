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
    <a class="nav-link " href="{{route('admin.logo')}}">Logo List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.logo.create')}}">Add Logo</a>
  </li>  
  </ul>


<h3 class="my-3">Add Logo</h3>

<form action="{{route("admin.logo.create")}}" method="post" enctype="multipart/form-data">
@csrf


<div class="form-group">
  <label for="sub-category" class="h6">logo Image</label>
<input type="file" class="form-control mb-3" name="image">
</div>


  

  <button type="submit" class="btn btn-primary btn-block mt-3">Add Logo</button>
</form>



@endsection