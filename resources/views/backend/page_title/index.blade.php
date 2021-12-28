@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.page_title')}}">Page title List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.page_title.create')}}">Add Page title</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Page title List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.page_title.create')}}">Add Page title</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Page title</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($page_titles as $page_title)
       <tr>



    <td class="h5 text-center">{{$page_title->title}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.page_title.edit', $page_title->id)}}" class=" btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.page_title.delete', $page_title->id)}}" method="POST">
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
    {{$page_titles->links()}}
    </div>
    </div>
    </div>

 
@endsection