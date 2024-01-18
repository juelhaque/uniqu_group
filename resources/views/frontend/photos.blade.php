@extends('frontend.layouts.app')

@section('content')


<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Photo Gallery</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Photos</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->


<!-- Photo Gallery Area -->
<section class="photo_gallery_section pt-4 pb-3">
    <!-- data-aos="fade-right" -->
    <div class="container-fluid">
        <div class="section-title" data-aos="fade-down" data-aos-duration="2000">
            <h2>Photo Gallery</h2>
        </div>

        <div class="row">
            @foreach ($images as $item)
                <div class="col-md-3 col-6 mb-4">
                    <div class="gallery_ing" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <a href="{{ asset($item->image) }}" class="w-100" data-lightbox="img">
                            <img src="{{ asset($item->image) }}" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Photo Gallery Area -->



@endsection
