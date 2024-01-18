@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">News and Events Details</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li><a href="{{route('frontend.news_events')}}">News & Events</a></li>
                <li>{{$news_events->title}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<div class="container-fluid" style="margin-bottom: 25px">
    <div class="row" style="margin-left: 0.1rem; margin-right: 0.1rem;">
        <div class="col-md-12" style="height: auto">
            <div style="margin-top: 30px;" data-aos="zoom-in-up" data-aos-duration="1000">
                <img src="{{ asset($news_events->image) }}" alt="" class=""
                style="width: 42%; height:auto; margin-right:20px; object-fit:contain;float:left;">
            </div>
            <h2 class="text-start pl-2">{{ $news_events->title }}</h2>
            <h6 class="text-start "><span>Date: </span>{{ $news_events->date }}</h6>
            <div class="" style="text-align:justify">
                <p style="color: rgb(41, 40, 40); float: left;">{!! $news_events->details !!}</p>
            </div>
        </div>
    </div>
</div>


@endsection
