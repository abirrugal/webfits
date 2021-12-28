@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.size')}}">Size List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.size.create')}}">Add Size</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Size List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.size.create')}}">Add Size</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    
    <th class="h5 p-3 text-center">Size</th>
    
    <th class="h5 p-3 text-center">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($sizes as $size)
       <tr>

        

    <td class="h6 text-center">{{$size->size}}</td>
  
    <td class="d-flex justify-content-center align-items-center">

        <a  href="{{route('admin.size.edit', $size->id)}}" class=" btn btn-warning me-3">Edit</a>
        
      <form class="d-inline "  action="{{route('admin.size.delete', $size->id)}}" method="POST">
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
    {{$sizes->links()}}
    </div>
    </div>
    </div>

 
@endsection