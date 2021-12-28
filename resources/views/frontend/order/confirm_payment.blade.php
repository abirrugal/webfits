@extends('frontend.layouts.master')

@section('main_content')


<!-- Contact start -->
<div class="container-fluid">
    <div class="nav-margin">
        <div class="border rounded p-md-5 m-md-4">
      
            {{-- <p class="sub-title-text c-mb-4 ">Please Confirm Payment Status.</p> --}}

            <div class="container ">
                <div class="card  p-4 ">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3 text-white">Please Confirm Payment Status.</h5>
                        <hr>
                        <div class="card-text text-center">

      
                            {{-- <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                              </div>
                              <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                              </div> --}}

                            
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                      </div>

                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                                </li>
                              </ul>

                              <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">



                                </div>

                              </div>
                                
    

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection