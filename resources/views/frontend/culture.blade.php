@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->culture_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Company Culture</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Culture</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<div class="container" style="margin-top: 3rem; margin-bottom:3rem">
    <div class="row d-flex">
        @foreach ($cultures as $culture)
        <div class="col-md-3 d-flex mb-3" style="justify-content: center">
            <div class="media-block">
                <div class="icon" style="text-align: center">
                    <i class="{{$culture->icon}}" data-aos="fade-down" data-aos-duration="2000" style="color: slateblue"></i>
                    <div class="title" data-aos="fade-right" data-aos-duration="2000">
                        <h4 style="color: teal;margin-top:1.5rem">{{$culture->title}} </h4>
                    </div>
                </div>
                <div class="details" style="text-align: center" data-aos="fade-left" data-aos-duration="2000">
                    <p style=" display: block; text-align: center;">{!!$culture->details!!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Start Partners Area -->
<div class="partners-area py-4">
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
