@extends('frontend.layouts.app')

@section('content')


<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2>Managing Director's Message</h2>
            <ul>
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
            <div class="col-lg-6">
                <div class="about-wrap reveal">
                    <div class="about-content">
                        <h2>{{$messages->name}}</h2>
                        <h4>{{$messages->designation}}</h4>
                        <p>
                            {!!$messages->message!!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="reveal-img rainbow mt-lg-5">
                    <div class="about_img">
                        <div class="col_img" style="width: 100%">
                            <img src="{{asset($messages->image)}}" class="w-100"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->



@endsection
