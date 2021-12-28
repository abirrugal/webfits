@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.district')}}">District List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.district.create')}}">Add District</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">District List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.district.create')}}">Add District</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">District Name</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($districts as $district)
       <tr>

        

    <td class="h5">{{$district->name}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.district.edit', $district->id)}}" class="mt-2 btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.district.delete', $district->id)}}" method="POST">
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
    {{$districts->links()}}
    </div>
    </div>
    </div>
@endsection