
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
    <a class="nav-link " href="{{route('admin.blog')}}">Blog List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.blog.create')}}">Add Blog</a>
  </li>  
  </ul>


<h3 class="my-3">Edit Blog</h3>
<form action="{{route("admin.blog.update",$blog->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
 <div class="form-group">
    <label for="sub-category" class="h6">Blog Title</label>
<input type="text" class="form-control mb-3" name="title" id="child_category" value="{{$blog->title}}">
  </div>
  
<div class="mb-3">
    <label for="image" class="form-label text-black h6">Image</label>
    <input type="file" name="image"  class="form-control" id="image" aria-describedby="PriceHelp">
    {{-- <div id="emailHelp" class="form-text">Upload Banner image..</div> --}}
</div>

<div class="form-floating">
  <textarea class="form-control" name="details" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$blog->details}}</textarea>
</div>

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Blog</button>
</form>

<script>
  CKEDITOR.replace( 'floatingTextarea2' );
  </script>

@endsection