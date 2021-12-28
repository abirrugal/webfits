@extends('frontend.layouts.master')
@section('main_content')
<div class="container-fluid my-3">
<div class="d-flex justify-content-center">
<div class="container mt-3">
<div  class="12">
  
            <div data-v-3fc73b42="" class="rl-pd-post-img"><img data-v-3fc73b42=""
                    src="{{asset($blog->image)}}"
                    loading="lazy" class="w-100" alt=""></div>
            <div data-v-3fc73b42="" class="rl-pd-post-text">
                <div class="text-center blog_title">{{$blog->title}}</div>
            </div>

            <div data-v-3fc73b42="" class="rl-pd-post-text text-center">
                <div class="text-center blog_text">{!!$blog->details!!}</div>
            </div>
            
        </a>
    
</div>
</div>
</div>
</div>

@endsection