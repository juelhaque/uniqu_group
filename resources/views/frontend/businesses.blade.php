@extends('frontend.layouts.app')

@section('content')


<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-left" data-aos-duration="1000">Business of Unique Group</h2>
            <ul data-aos="fade-right" data-aos-duration="1000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>{{$businesses->name}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


<!-- Start business Area -->
<section class="about-area pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                <div class=" rainbow mt-lg-5">
                    <div class="about_img">
                        <div class="col_img" style="width: 100%">
                            <img src="{{asset($businesses->image)}}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="about-wrap " style="margin-top: 45px">
                    <div class="about-content">
                        <h2>{{$businesses->name}}</h2>
                        <p style="text-align: justify">{!! Illuminate\Support\Str::limit($businesses->description, 1000)!!}</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center; padding-top: 45px" data-aos="zoom-in-down" data-aos-duration="2000">
                <a href="{{$businesses->link}}" target="__blank" class="btn btn-danger">Visit Website</a>
            </div>
        </div>
    </div>
</section>
<!-- End business Area -->


@endsection
