@extends('backend.layouts.admin_layouts')
@section('title')
    Customer's List
@endsection

@section('main')
    @foreach ($customers as $customer)
    <div class="card">
        <ul class="list-group list-group-flush d-flex flex-row flex-wrap">
          <li class="list-group-item"><span class="h6">Name : </span> {{$customer->id}}</li>
          <li class="list-group-item"><span class="h6">Name : </span> {{$customer->name}}</li>
          <li class="list-group-item"><span class="h6">Email : </span>{{$customer->email}}</li>
          <li class="list-group-item"><span class="h6">Phone number : </span>{{$customer->phone_number}}</li>
          <li class="list-group-item"><span class="h6">Status : </span>{{$customer->role_as}}</li>

    

       
        </ul>
      </div>
      @endforeach
   
@endsection