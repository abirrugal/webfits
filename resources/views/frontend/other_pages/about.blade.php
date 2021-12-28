
@extends('frontend.layouts.master')
@section('main_content')



  <!-- Contact start -->
  <div class="container-fluid">
    <div class="nav-margin">
        <div class="border rounded p-md-5 m-md-4">
            {{-- <div class="main-title-text border-bottom w-50 mx-auto pb-2 text-center h5 mb-3">Our Privacy Policy
            </div> --}}
            {{-- <p class="sub-title-text c-mb-4 ">Please read our privacy policy.</p> --}}

            <div class="container ">
                <div class="card  text-dark p-4 ">
                    <div class="card-body">
                        @foreach ($page_contents->page_contents as $item)
                        <h5 class="card-title text-center mb-3 text-dark">{{$item->title}}</h5>
                        @endforeach

                        <hr>
                        <div class="card-text text-center">

@foreach ($page_contents->page_contents as $item)
    {!!$item->descriptions!!}
@endforeach
                           
    

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact end -->
    @endsection