@extends('frontend.layouts.master')

@section('main_content')

<div class="container">
<div class="col-md-12">
    
    <h3 class="my-3">Edit Profile</h3>

    <form action="{{route("frontend.user.update", 1)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

     <div class="form-group">
        <label for="sub-category" class="h6">Full Name</label>
        <input type="text" class="form-control mb-3" name="name" id="child_category" value="{{$user->name}}">
      </div>
     <div class="form-group">
        <label for="sub-category" class="h6">Email</label>
        <input type="text" class="form-control mb-3" disabled id="child_category" value="{{$user->email}}">
      </div>
     <div class="form-group">
        <label for="sub-category" class="h6">Phone Number</label>
        <input type="text" class="form-control mb-3" name="phone" id="child_category" value="{{$user->phone_number}}">
      </div>


      <div class="form-group">
        <label for="sub-category" class="h6">Password</label>
        <input type="password" class="form-control mb-3" name="password" id="child_category" >
      </div>
      
    
      <button type="submit" class="btn btn-primary btn-block mt-3">Edit User Profile</button>
    </form>

  </div>
  </div>

      
  @endsection