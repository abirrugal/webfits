@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.social')}}">Social Links List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.social.create')}}">Add Social Links</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Social Links List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.social.create')}}">Add Social Links</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Facebook</th>
    <th class="h5 p-3">Facebook 2</th>
    <th class="h5 p-3">Instagram</th>
    <th class="h5 p-3">Youtube</th>
    <th class="h5 p-3">Linkedin</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($socials as $social)
       <tr>

        


    <td class="h5 text-center">{{$social->facebook}}</td>
    <td class="h5 text-center">{{$social->facebook2}}</td>
    <td class="h5 text-center">{{$social->instagram}}</td>
    <td class="h5 text-center">{{$social->youtube}}</td>
    <td class="h5 text-center">{{$social->linkedin}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.social.edit', $social->id)}}" class=" btn btn-warning me-3">Edit</a>
      <form class="d-inline "  action="{{route('admin.social.delete', $social->id)}}" method="POST">
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
    {{$socials->links()}}
    </div>
    </div>
    </div>

 
@endsection