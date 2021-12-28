@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.weight')}}">Weight List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.weight.create')}}">Add Weight</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Weight List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.weight.create')}}">Add Weight</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    
    <th class="h5 p-3 text-center">Weight</th>
    <th class="h5 p-3 text-center">Price</th>
    
    <th class="h5 p-3 text-center">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($weights as $weight)
       <tr>

        

    <td class="h6 text-center">{{$weight->weight}}</td>
    <td class="h6 text-center">{{$weight->price}}</td>
  
    <td class="d-flex justify-content-center align-items-center">

        <a  href="{{route('admin.weight.edit', $weight->id)}}" class=" btn btn-warning me-3">Edit</a>
        
      <form class="d-inline "  action="{{route('admin.weight.delete', $weight->id)}}" method="POST">
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
    {{$weights->links()}}
    </div>
    </div>
    </div>

 
@endsection