@extends('frontend.layouts.app')

@section('content')


<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Managing Director's Message</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Director's Message</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


<!-- Start About Area -->
<section class="about-area pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-wrap" data-aos="fade-up" data-aos-duration="2000">
                    <div class="about-content" style="margin-top: 40px; text-align: justify">
                        <h2 data-aos="fade-right" data-aos-duration="2000" style="margin: 5px 0;">{{$messages->name}}</h2>
                        <h5 data-aos="fade-left" data-aos-duration="2000">{{$messages->designation}}</h5>
                        <p>{!!$messages->message!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="zoom-in-down" data-aos-duration="2000">
                <div class="rainbow mt-lg-5">
                    <div class="about_img">
                        <div class="col_img" style="width: 100%">
                            <img src="{{asset($messages->image)}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->



@endsection
