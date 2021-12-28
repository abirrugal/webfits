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
    <a class="nav-link " href="{{route('admin.social')}}">Social Links List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.social.create')}}">Add Social Links</a>
  </li>  
  </ul>


<h3 class="my-3">Add Social Links</h3>

<form action="{{route("admin.social.create")}}" method="post" enctype="multipart/form-data">
@csrf


<div class="form-group mb-2">
  <label for="sub-category" class="h6">Facebook link</label>
<input type="text" class="form-control mb-3" name="facebook" id="child_category" value="{{old('facebook')}}">
</div>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Facebook link 2</label>
<input type="text" class="form-control mb-3" name="facebook2" id="child_category" value="{{old('facebook2')}}">
</div>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Instagram link</label>
<input type="text" class="form-control mb-3" name="instagram" id="child_category" value="{{old('instagram')}}">
</div>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Youtube link</label>
<input type="text" class="form-control mb-3" name="youtube" id="child_category" value="{{old('youtube')}}">
</div>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Linkedin link</label>
<input type="text" class="form-control mb-3" name="linkedin" id="child_category" value="{{old('linkedin')}}">
</div>


  

  <button type="submit" class="btn btn-primary btn-block mt-3">Add Social Links</button>
</form>



@endsection