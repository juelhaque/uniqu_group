@extends('frontend.layouts.app')

@section('content')
<div class="page-title-area bg-17" style="background-image: url({{$banner->managment_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-down" data-aos-duration="1000">Our Management</h2>
            <ul data-aos="fade-up" data-aos-duration="1000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Our Management</li>
            </ul>
        </div>
    </div>
</div>


<!-- Start Mission Area -->
<section class="about-area pb-5" style="background: snow">
    <div class="container">
        <div class="row">            
            @foreach ($management as $item)
                @if($loop->index % 2 > 0)
                <div class="col-lg-3" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="mt-lg-5">
                        <div class="about_img">
                            <div class="col_img" style="width: 100%">
                                <img src="{{ asset($item->image) }}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" data-aos="fade-left" data-aos-duration="1000">
                    <div class="about-wrap">
                        <div class="about-content" style="padding-top:3.5rem">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->designation}}</h5>
                            <p>{!!$item->speech!!}</p>
                        </div>
                    </div>
                </div>               
                @else     
                <div class="col-lg-9" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-wrap">
                        <div class="about-content" style="padding-top:3.5rem">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->designation}}</h5>
                            <p>{!!$item->speech!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="zoom-in-down" data-aos-duration="1000">
                    <div class="mt-lg-5">
                        <div class="about_img">
                            <div class="col_img" style="width: 100%">
                                <img src="{{ asset($item->image) }}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach            
        </div>
    </div>
</section>

<script>
    function myFunction() {
        location.reload();
    }
</script>

@endsection
