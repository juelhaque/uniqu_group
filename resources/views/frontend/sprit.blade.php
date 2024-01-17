@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->sprit_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Company Sprit</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Company Sprit</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in-down" data-aos-duration="1600">
                    <div class="mt-lg-5">
                        <div class="about_img">
                            <div class="">
                                <img src="{{ asset($sprit->image) }}" class="w-100" alt="" style="border-radius: 8px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="about-wrap">
                        <div class="about-content" style="text-align: justify">
                            <h2 data-aos="fade-left" data-aos-duration="1500">{{ $sprit->title }}</h2>
                            <div data-aos="fade-right" data-aos-duration="1500">{!! $sprit->details !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Counter Area -->
    <section class="counter-area pt-4 pb-0">
        <!-- data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="single-counter">
                        <i class="flaticon-smile"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $achievments->group_data }}">00</span>
                            <span class="target">{{ $achievments->group }}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-2 col-6" data-aos="fade-right" data-aos-duration="1500">
                    <div class="single-counter">
                        <i class="flaticon-team"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $achievments->company_data }}">00</span>
                            <span class="target">+ {{ $achievments->company }}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-2 col-12" data-aos="zoom-in" data-aos-duration="1800">
                    <div class="single-counter">
                        <img src="{{ asset($company_profile->company_logo) }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="single-counter">
                        <i class="flaticon-trophy"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $achievments->business_data }}">00</span>
                            <span class="traget">+ {{ $achievments->business }}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="single-counter">
                        <i class="flaticon-file"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $achievments->employee_data }}">00</span>
                            <span class="target">+ {{ $achievments->employee }}</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- Start Partners Area -->
    <div class="partners-area py-4">
        <!-- data-aos="fade-left" -->
        <div class="container-fluid">
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2 class="text-white">Our Partners</h2>
            </div>
            <div class="partners-wrap owl-theme owl-carousel" data-aos="fade-up" data-aos-duration="1500">
                @foreach ($partnars as $partnar)
                    <div class="partners-item">
                        <a href="#"><img src="{{ asset($partnar->image) }}" alt="Image"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Partners Area -->

@endsection
