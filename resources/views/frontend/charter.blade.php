@extends('frontend.layouts.app')

@section('content')

<div class="page-title-area bg-17" style="background-image: url({{$banner->charter_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-down" data-aos-duration="1000">Charter of Unique Group</h2>
            <ul data-aos="fade-up" data-aos-duration="1000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Charter of Unique Group</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <h2 style="margin-top:2rem; margin-bottom: 1.5rem; color:teal; text-align: center" data-aos="zoom-in-down" data-aos-duration="1500">We Value</h2>
                @foreach ($cultures as $culture)
                <div class="col-md-6 d-flex mb-3" style="justify-content: center">
                    <div class="media-block">
                        <div class="icon" style="text-align: center">
                            <i class="{{$culture->icon}}" data-aos="fade-down" data-aos-duration="1500" style="color: slateblue"></i>
                            <div class="title" data-aos="fade-right" data-aos-duration="1500">
                                <h4 style="color: teal;margin-top:1.5rem">{{$culture->title}} </h4>
                            </div>
                        </div>
                        <div class="details" style="text-align: center" data-aos="fade-left" data-aos-duration="1500">
                            <p style=" display: block; text-align: center;">{!!$culture->details!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-wrap">
                <div class="about-content"  style="justify-content: center;" >
                    <h2 style="margin-top:2rem; color:teal; text-align: center" data-aos="zoom-in-down" data-aos-duration="1500">Charter of Unique Group</h2>
                    <div style="text-align: justify" data-aos="zoom-in-left" data-aos-duration="1000">
                        {!!$charters->details!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




