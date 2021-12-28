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
    <a class="nav-link " href="{{route('admin.weight')}}">Weight List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.weight.create')}}">Add Weight</a>
  </li>  
  </ul>


<h3 class="my-3">Edit Weight</h3>
<form action="{{route("admin.weight.update", $weight->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')
 <div class="form-group">
    <label for="sub-category" class="h6">Enter Weight</label>
<input type="text" class="form-control mb-3" name="weight" id="child_category" value="{{$weight->weight}}">
  </div>

 <div class="form-group">
    <label for="sub-category" class="h6">Enter Price</label>
<input type="number" class="form-control mb-3" name="price" id="child_category" value="{{$weight->price}}">
  </div>
  

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Weight</button>
</form>

@endsection