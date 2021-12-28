@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.blog')}}">Blog List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.blog.create')}}">Add Blog</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Blog List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.blog.create')}}">Add Blog</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Blog Image</th>
    <th class="h5 p-3">Blog Title</th>
    <th class="h5 p-3">Blog Descriptions</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($blogs as $blog)
       <tr>

        
    <td class="h6"><img src="{{asset($blog->image)}}" width="50px" height="50px" alt=""></td>

    <td class="h5">{{$blog->title}}</td>
    <td class="h5"> {!! Illuminate\Support\Str::limit($blog->details, 30) !!}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.blog.edit', $blog->id)}}" class="mt-2 btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.blog.delete', $blog->id)}}" method="POST">
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
    {{$blogs->links()}}
    </div>
    </div>
    </div>
@endsection