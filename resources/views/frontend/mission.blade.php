@extends('frontend.layouts.app')

@section('content')


<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->mission_vision_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Mission & Vision</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Mission & Vision</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


   <!-- Start Mission Area -->
   <section class="about-area pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-wrap reveal">
                    <div class="about-content" style="padding-top:3rem">
                        <h4>{{$mission->title}}</h4>
                        <p>{!!$mission->details!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal-img rainbow mt-lg-5">
                    <div class="about_img">
                        <div class="col_img" style="width: 100%; height:350px">
                            <img src="{{ asset($mission->image) }}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section>
 <div id = "animated-example" class = "animated bounceInLeft">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="reveal-img rainbow mt-lg-5">
                    <div class="about_img">
                        <div class="col_img" style="width: 100%; height:350px">
                            <img src="{{ asset($mission->vision_image) }}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-wrap reveal">
                    <div class="about-content" style="padding-top:3rem">
                        <h4>{{$mission->vision_title}}</h4>
                        <p>{!!$mission->vision_details!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

 <script>
    function myFunction() {
       location.reload();
    }
 </script>

@endsection
