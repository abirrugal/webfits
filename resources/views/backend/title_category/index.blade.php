@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')


    <div class="well">
    <h3 class="my-4">Title Category List</h3>

    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Title Category Image</th>
    <th class="h5 p-3">Title Category Name</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($title_categorys as $title_category)
       <tr>




    <td class="h5 text-center"><img src="{{asset($title_category->image)}}" height="60px" width="60px" alt=""> </td>
    <td class="h5 text-center">{{$title_category->name}}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.title_category.edit', $title_category->id)}}" class=" btn btn-warning me-3">Edit</a>
     
        {{-- <form class="d-inline "  action="{{route('admin.title_category.delete', $title_category->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger ">Delete</button>
      </form>   --}}

    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$title_categorys->links()}}
    </div>
    </div>
    </div>

 
@endsection