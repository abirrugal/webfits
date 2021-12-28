@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.area')}}">Area List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.area.create')}}">Add Area</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Area List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.area.create')}}">Add Area</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Area Name</th>
    <th class="h5 p-3">Price</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($areas as $area)
       <tr>

        

    <td class="h5">{{$area->name}}</td>
    <td class="h5">{{$area->price}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.area.edit', $area->id)}}" class="mt-2 btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.area.delete', $area->id)}}" method="POST">
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
    {{$areas->links()}}
    </div>
    </div>
    </div>
@endsection