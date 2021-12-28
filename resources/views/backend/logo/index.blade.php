@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.logo')}}">Logo List</a>
  </li>
  {{--  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.logo.create')}}">Add Logo</a>
  </li>  --}}

</ul>
    <div class="well">
    <h3 class="my-4">Logo List</h3>
    {{--  <p>
    <a class="btn btn-success" href="{{route('admin.logo.create')}}">Add Logo</a> 
    </p>  --}}
    <p class="h5 mb-4 text-center">Note: 1st logo for footer and 2nd logo for header. You can change the logo.</p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Logo Image</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($logos as $logo)
       <tr>

        


    <td class="h5 text-center">
    <img src="{{asset($logo->image)}}" height="60px" width="60px" alt="">
    </td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.logo.edit', $logo->id)}}" class=" btn btn-warning me-3">Change</a>
      {{--  <form class="d-inline "  action="{{route('admin.logo.delete', $logo->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger ">Delete</button>
      </form>    --}}
    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>

    </div>
    </div>

 
@endsection