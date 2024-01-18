@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->terms_condition_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Terms & Conditions</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Terms & Conditions</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<div class="container">
    <div class="row">
        <div class="col-lg-12" data-aos="flip-down" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
            <div class="mt-lg-2">
                <div class="about_img">
                    <div class="col_img" style="width: 100%; height: 300px">
                        <img style="border-radius: 150px 0 0 0;" src="{{ asset($terms_conditions->image) }}" class="w-100 px-3" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row px-4">
                <div class="col-lg-6 mb-5 text-center">
                    <div class="about-wrap">
                        <div class="about-content" style="text-align: justify" data-aos="fade-right" data-aos-duration="2000">
                            <h2 style="margin-top:2rem; margin-bottom:1.5rem; color: #a71605;" data-aos="fade-down" data-aos-duration="2000">{{$terms_conditions->title}}</h2>
                            <div>{!!$terms_conditions->description!!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 text-center">
                    <div class="about-wrap">
                        <div class="about-content" style="text-align: justify" data-aos="fade-left" data-aos-duration="2000">
                            <p style="margin-top:3rem; margin-bottom:1.5rem">{!!$terms_conditions->points!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


