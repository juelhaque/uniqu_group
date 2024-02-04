@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->governance_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Corporate Governance</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Corporate Governance</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<div class="container">
    <div class="row">
        @foreach ($governence as $item)
        <div class="col-lg-6 mb-5 text-center">
            <div class="about-wrap">
                <div class="about-content">
                    <h4 style="margin-top:3rem; margin-bottom:1.5rem" data-aos="fade-down" data-aos-duration="2000">{{$item->title}}</h4>
                    <img src="{{ asset($item->image) }}" class="img-size" alt="" data-aos="zoom-in-down" data-aos-duration="2000">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Start Partners Area -->
<div class="partners-area py-4">
    <!-- data-aos="fade-left" -->
    <div class="container-fluid">
        <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
            <h2 class="text-white">Associate Of Business Group</h2>
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

