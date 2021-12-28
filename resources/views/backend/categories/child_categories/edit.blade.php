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
      <a class="nav-link" href="{{route('admin.childcategories')}}">Child-Categories List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Edit Child-Category</a>
    </li>
  </ul>
<h3 class="my-3">Edit {{$category->name}}</h3>
<form action="{{route("admin.childcategory.update", $category->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="category">Child-Category Name</label>
    <input type="text" class="form-control mb-3 mt-2" name="child_category" id="category" value="{{$category->name}}">
  </div>

  <div class="my-3">
    <label for="description" class="form-label text-black h6">Category's Descriptions</label>
   <textarea name="description" name="description" id="description">{{$category->description}}</textarea>
   {{-- <div id="emailHelp" class="form-text">Edit your categories's descriptions here..</div> --}}
  </div>

  <div class="form-group">
    <label for="sub-category" class="h6">Feature</label>
<input type="text" class="form-control mb-3" name="feature"  value="{{$category->feature}}">
  </div>

 <div id="emailHelp" class="mb-2 form-text">Select only if you want to change the Default Subcategory.</div>
 <select select class="form-select" aria-label="Default select example" name="subcategory_id">
 <option  value='no_id'>Select a Subcategory </option>
@foreach($categories as $category)
 @foreach($category->child_category as $sub)
 <option  value="{{$sub->id}}">{{$sub->name}}</option>
@endforeach
@endforeach
  </select>
  <div class="mb-3">
    <label for="child_img" class="form-label text-black h6">Banner image for category</label>
    <input type="file" name="child_img"  class="form-control" id="child_img" aria-describedby="PriceHelp">
    <div id="emailHelp" class="form-text">Upload Banner image..</div>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Edit Sub-Category</button>
</form>
<p class=" mt-3"> <a href="{{route('admin.subcategories')}}" >Go back to Sub-categories</a>  </p>

<script>
  CKEDITOR.replace( 'description' );
  </script>
@endsection