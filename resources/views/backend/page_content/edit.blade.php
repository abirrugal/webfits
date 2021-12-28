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
    <a class="nav-link " href="{{route('admin.page_content')}}">Page content List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.page_content.create')}}">Add Page content</a>
  </li>  
  </ul>


<h3 class="my-3">Edit Page content</h3>

<form action="{{route("admin.page_content.update", $page_content->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

<select class="form-select" name="page_create_id">
  <option  selected>Select Page</option>

  @foreach ($page_title as $item)

  <option value="{{$item->id}}" @if($item->id == $page_content->page_create_id) {{'selected'}}  @endif>{{$item->title}}</option>
  
  @endforeach

</select>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Title</label>
<input type="text" class="form-control mb-3" name="title" id="child_category" value="{{$page_content->title}}">
</div>

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Descriptions</label>
  <textarea  class="form-control mb-3" name="descriptions" id="descriptions" >{!!$page_content->descriptions!!}   </textarea>
</div>

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Page content</button>
</form>

<script type="text/javascript">


  CKEDITOR.replace( 'descriptions' );

</script>

@endsection

