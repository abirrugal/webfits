
@extends('frontend.layouts.master')

@section('main_content')

<div class="container">
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="#">My Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('frontend.user.orders', auth()->user()->name)}}">My Orders</a>
  </li>
</ul>
</div>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('frontend.product.index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 ">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    {{--  <img src="{{asset(auth()->user()->image)}}" alt="Admin" class="rounded-circle" width="150">  --}}
                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      <a href="{{route('logout')}}">
                        <button class="text-white btn btn-info mt-2">
                            Logout
                        </button>
                      </a>
                      {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                      {{--  <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>  --}}
                    </div>
                  </div>
                </div>
              </div>
    
            </div>


            <div class="col-md-8 pb-5">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->name}}
                    </div>

               

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$user->phone_number}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        ********
                    </div>
                  </div>
                  <hr>
              
                  {{-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr> --}}
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-secondary " target="__blank" href="{{route('frontend.user.profile.edit', $user->id)}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

      
    @endsection

    