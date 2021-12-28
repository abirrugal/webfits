@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.brand')}}">Brand List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.brand.create')}}">Add Brand</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Brand List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.brand.create')}}">Add Brand</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Brand Image</th>
    <th class="h5 p-3">Brand Name</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($brands as $brand)
       <tr>

        
    <td class="h6"><img src="{{asset($brand->banner)}}" width="50px" height="50px" alt=""></td>

    <td class="h5">{{$brand->name}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.brand.edit', $brand->id)}}" class="mt-2 btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.brand.delete', $brand->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger mt-2">Delete</button>
      </form>  
    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$brands->links()}}
    </div>
    </div>
    </div>
@endsection