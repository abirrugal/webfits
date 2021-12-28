@extends('backend.layouts.admin_layouts')
@section('sidenav')
@include('backend.layouts.partials.side_menu')
@endsection
@section('title', 'We serve you the best')
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="{{route('admin.contact')}}">Contact Info</a>
  </li>
  {{--  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.contact.create')}}">Add Contact</a>
  </li>  --}}



</ul>
    <div class="well">
    <h3 class="my-4">Contact Info</h3>
    {{--  <p>
    <a class="btn btn-success" href="{{route('admin.contact.create')}}">Add Contact</a> 
    </p>  --}}

    {{--  <p class="h5 mb-4 text-center">Note: .</p>  --}}

    <div class="table-responsive">
    <table class="table table-bordered table-condensed">
    <thead>
    <tr>
    
    <th class="h5 p-3">Phone</th>
    <th class="h5 p-3">Email</th>
    <th class="h5 p-3">Address</th>
    
    <th class="h5 p-3">Action</th>
    </tr>
    </thead> 
    <tbody>
       @foreach($contacts as $contact)
       <tr>

        
    

    <td class="h5 text-center">{!!$contact->phone!!}</td>
    <td class="h5 text-center">{!!$contact->email!!}</td>
    <td class="h5 text-center">{!!\Illuminate\Support\Str::limit($contact->address, 40)!!}</td>
  
    <td class="d-flex justify-content-center align-items-center">
        <a  href="{{route('admin.contact.edit', $contact->id)}}" class=" btn btn-warning me-3">Change Info</a>
      {{--  <form class="d-inline "  action="{{route('admin.contact.delete', $contact->id)}}" method="POST">
      @csrf
      @method('Delete')
      <button type="submit" class="btn btn-danger ">Delete</button>
      </form>    --}}
    </td>
    </tr>
    @endforeach  
    </tbody>  
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$contacts->links()}}
    </div>
    </div>
    </div>

 
@endsection