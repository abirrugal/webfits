@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.color')}}">Color List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.color.create')}}">Add Color</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Color List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.color.create')}}">Add Color</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Color Image</th>
    <th class="h5 p-3">Color Name</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($colors as $color)
       <tr>

        
    <td class="h6 text-center">
      <input type="color" value="{{$color->color}}" disabled>
     
    </td>

    <td class="h5 text-center">{{$color->name}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.color.edit', $color->id)}}" class=" btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.color.delete', $color->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger ">Delete</button>
      </form>  
    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$colors->links()}}
    </div>
    </div>
    </div>

 
@endsection