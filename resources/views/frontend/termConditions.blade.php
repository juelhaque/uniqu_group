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
        <div class="col-lg-6 mb-5 text-center">
            <div class="about-wrap">
                <div class="about-content" style="text-align: justify" data-aos="fade-right" data-aos-duration="2000">
                    <h4 style="margin-top:3rem; margin-bottom:1.5rem" data-aos="fade-down" data-aos-duration="2000">{{$terms_conditions->title}}</h4>
                    <p>{!!$terms_conditions->description!!}</p>
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

@endsection

