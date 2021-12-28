
@extends('frontend.layouts.master')
@section('main_content')



  <!-- Contact start -->
  <div class="container-fluid">
    <div class="nav-margin">
        <div class="border rounded p-md-5 m-md-4">
            <div class="main-title-text border-bottom w-50 mx-auto pb-2 text-center h4">Contact With Us
            </div>
            <p class="sub-title-text c-mb-4 ">Please contact with us using our Contact Info</p>

            <div class="container ">
                <div class="card bg-dark text-white p-4 ">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3 text-white">CONTACT INFO</h5>
                        <hr>
                        <div class="card-text text-center">

                            <p> <b>Mobile No :</b> {{$contact[0]->phone}}</p>
                            <p> <b>Email :</b> {{$contact[0]->email}} </p>
       <p>{!!$contact[0]->address!!}</p>
                                
    

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact end -->
    @endsection