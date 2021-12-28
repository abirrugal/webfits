@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.slider')}}">Main Slider List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.slider.create')}}">Add Main Slider</a>
  </li></ul>
    <div class="well">
    <h3 class="my-4">Main Slider List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.slider.create')}}">Add Main Slider</a> 
    </p>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    
    <th class="h5 p-3 text-center">Main Slider (Pc)</th>
    <th class="h5 p-3 text-center">Main Slider (Mobile)</th>
    <th class="h5 p-3 text-center">Status</th>
    <th class="h5 p-3 text-center">Change</th>
    
    <th class="h5 p-3 text-center">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($sliders as $slider)
       <tr>

        

    <td class="h6 text-center"><img src="{{asset($slider->image)}}" height="60" width="70" alt=""> </td>
    <td class="h6 text-center"><img src="{{asset($slider->image_sm)}}" height="60" width="70" alt=""> </td>
    <td class="h6 text-center">{{$slider->status}} </td>
    <td class="h6 text-center">  <a class="btn btn-sm btn-info" href="{{route('admin.slider.status', $slider->id)}}">Change</a> </td>
    
  
    <td class="d-flex justify-content-center align-items-center">

        <a  href="{{route('admin.slider.edit', $slider->id)}}" class=" btn btn-warning me-3">Edit</a>
        
      <form class="d-inline "  action="{{route('admin.slider.delete', $slider->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger ">Delete</button>
      </form>  
    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>
    {{-- <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$sliders->links()}}
    </div> --}}
    </div>
    </div>

 
@endsection