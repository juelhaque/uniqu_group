@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->news_event_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">News and Events</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>News Events</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<div class="container-fluid">
    <h4 class="pb-2 text-uppercase font-weight-bold text-center" style="font-size: 30px; padding-top:25px">Latest News & Events</h4>
    <div class="row" style="">
        @foreach ($news_events as $news_event)
            <div class="col-lg-6">
                <div class="row" style=" border-radius: 2px;">
                    <div class="row mb-4" style="box-shadow: 0 0 0rem rgba(0, 0, 0, 0);">
                        <div class=" col-md-6" data-aos="zoom-in-down" data-aos-duration="1000">
                            <img class="img-fluid " src="{{ asset($news_event->image) }}"
                                style="height: 237px; width: 100%; object-fit: cover; margin-top:25px">
                        </div>
                        <div class="col-md-6 flex-column  bg-white">
                            <div class=" py-4">
                                <div class="text-area">
                                    <div class="" data-aos="fade-down" data-aos-duration="1000">
                                        <a class="mr-2" style="color: #9300ff; font-weight: bold; font-size: 18px">
                                            <b>{{ $news_event->title }}</b></a>
                                    </div>
                                    <div class="pt-2" data-aos="fade-up" data-aos-duration="1000">
                                        <p style="color: darkcyan">Date: {{$news_event->date}}</p>
                                    </div>
                                    <div data-aos="fade-up" data-aos-duration="1000">
                                        <p class="my-2" style="color: #212529;">
                                            {!! Illuminate\Support\Str::limit($news_event->details, 220) !!}
                                            <a href="{{ route('frontend.news_event_details', $news_event->id) }}"
                                                class="pb-0 see-more"><span>   </span>See more</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>




@endsection
