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
    <a class="nav-link " href="{{route('admin.favicon')}}">Favicon List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.favicon.create')}}">Add Favicon</a>
  </li>  
  </ul>


<h3 class="my-3">Edit favicon</h3>

<form action="{{route("admin.favicon.update", $favicon->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

 <div class="form-group">
    <label for="sub-category" class="h6">favicon Image</label>
<input type="file" class="form-control mb-3" name="image">
  </div>
  

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Favicon</button>
</form>

@endsection