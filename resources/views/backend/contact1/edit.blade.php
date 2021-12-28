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


<h3 class="my-3">Edit Contact</h3>

<form action="{{route("admin.contact.update", $contact->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('put')

<div class="form-group mb-2">
  <label for="sub-category" class="h6">Phone</label>

  <textarea  class="form-control mb-3" name="phone" id="phone" >{!!$contact->phone!!}</textarea>

</div>
<div class="form-group mb-2">
  <label for="sub-category" class="h6">Email</label>

  <textarea  class="form-control mb-3" name="email" id="email" >{!!$contact->email!!}</textarea>

</div>
<div class="form-group mb-2">
  <label for="sub-category" class="h6">Address</label>
  <textarea  class="form-control mb-3" name="address" id="address" >{!!$contact->address!!}   </textarea>
</div>

  <button type="submit" class="btn btn-primary btn-block mt-3">Edit Contact</button>
</form>

<script type="text/javascript">


  CKEDITOR.replace( 'phone' );
  CKEDITOR.replace( 'email' );
  CKEDITOR.replace( 'address' );

</script>

@endsection