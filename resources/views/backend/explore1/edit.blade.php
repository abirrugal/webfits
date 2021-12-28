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
    <a class="nav-link " href="{{route('admin.explore')}}">Explore Our Furniture info List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.explore.create')}}">Add Explore Our Furniture info</a>
  </li>  
  </ul>


<h3 class="my-3">Edit Explore Our Furniture info</h3>

<form action="{{route("admin.explore.update", $explore->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Title</label>
<input type="text" class="form-control mb-3" name="title" id="child_category" value="{{$explore->title}}">
</div>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Descriptions</label>
  <textarea  class="form-control mb-3" name="descriptions" id="descriptions" >{!!$explore->descriptions!!} </textarea>
</div>

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Explore Our Furniture info</button>
</form>

<script type="text/javascript">


  CKEDITOR.replace( 'descriptions' );

</script>

@endsection