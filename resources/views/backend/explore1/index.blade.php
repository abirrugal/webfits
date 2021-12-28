@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.explore')}}">Explore Our Furniture List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.explore.create')}}">Add Explore Our Furniture</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Explore Our Furniture List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.explore.create')}}">Add Explore Our Furniture</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Title</th>
    <th class="h5 p-3">Descriptions</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($explores as $explore)
       <tr>

        
    

    <td class="h5 text-center">{{$explore->title}}</td>
    <td class="h5 text-center">{!!\Illuminate\Support\Str::limit($explore->descriptions, 40)!!}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.explore.edit', $explore->id)}}" class=" btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.explore.delete', $explore->id)}}" method="POST">
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
 
    </div>
    </div>
    </div>

 
@endsection