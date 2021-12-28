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
    <a class="nav-link " href="{{route('admin.contact')}}">Contact List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.contact.create')}}">Add Contact</a>
  </li>  
  </ul>


<h3 class="my-3">Add Contact</h3>

<form action="{{route("admin.contact.create")}}" method="post" enctype="multipart/form-data">
@csrf


<div class="form-group mb-2">
  <label for="sub-category" class="h6">Phone</label>
  
  <textarea  class="form-control mb-3" name="phone" id="phone" >{!!old('phone')!!}</textarea>
  
</div>


<div class="form-group mb-2">
  <label for="sub-category" class="h6">Email</label>

  <textarea  class="form-control mb-3" name="email" id="email" >{!!old('email')!!}</textarea>

</div>
<div class="form-group mb-2">
  <label for="sub-category" class="h6">Address</label>
<textarea  class="form-control mb-3" name="address" id="address" >{!!old('address')!!}</textarea>
</div>


  

  <button type="submit" class="btn btn-primary btn-block mt-3">Add Contact</button>
</form>


<script type="text/javascript">


      CKEDITOR.replace( 'address' );
      CKEDITOR.replace( 'phone' );
      CKEDITOR.replace( 'email' );

</script>
@endsection