@extends('frontend.layouts.app')

@push('frontCss')
<style>

</style>
@endpush


@section('content')
    <!-- Start Slider Area Five -->
    <section class="slider-area-five">
        <div class="slider-wrap-five owl-carousel owl-theme">
            @foreach ($sliders as $slider)
                <div class="slider-item slider-item-bg-7" style="background-image: url({{ asset($slider->image) }}); background-size: 100% 100%;">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="slider-text one">
                                    <h1>{{ $slider->title }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End Slider Area Five -->


    <!-- Start Welcome Note Area -->
    <section class="about-area pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-wrap">
                        <div class="about-content" style="text-align: justify" data-aos="fade-right" data-aos-duration="1500">
                            <h2>{{ $welcome_notes->welcome_note }}</h2>
                            <p>{!! $welcome_notes->about_description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rainbow mt-lg-5">
                        <div class="about_img">
                            <div class="col_img" data-aos="fade-down-right" data-aos-duration="1000">
                                <img src="{{ asset($welcome_notes->about_image) }}" class="w-100" alt="">
                            </div>
                            <div class="col_img" data-aos="fade-down-left" data-aos-duration="1000">
                                <img src="{{ asset($welcome_notes->about_image2) }}" class="w-100" alt="">
                            </div>
                            <div class="col_img" data-aos="fade-up-right" data-aos-duration="1000">
                                <img src="{{ asset($welcome_notes->about_image3) }}" class="w-100" alt="">
                            </div>
                            <div class="col_img" data-aos="fade-up-left" data-aos-duration="1000">
                                <img src="{{ asset($welcome_notes->about_image4) }}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Note Area -->


    <!-- Start Our Management Area -->
    <section class="our-team-area pt-4">
        <div class="container-fluid">
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2 class="text-white">Our Management</h2>
            </div>
            <div class="row">
                @foreach ($managements as $management)
                    <div class="col-md-3 col-6">
                        <div class="single-team" data-aos="zoom-out-down" data-aos-duration="1500">
                            <img src="{{ asset($management->image) }}" class="w-100 img-fluid" alt="Image">
                            <ul data-aos="fade-left" data-aos-duration="1500">
                                <li><a target="__blank" href="{{ $management->facebook }}"><i
                                            class='bx bxl-facebook'></i></a></li>
                                <li><a target="__blank" href="{{ $management->twitter }}"><i
                                            class='bx bxl-twitter'></i></a></li>
                                <li><a target="__blank" href="{{ $management->linkdin }}"><i
                                            class='bx bxl-linkedin'></i></a></li>
                            </ul>
                            <h3 class="text-white" data-aos="fade-right" data-aos-duration="1500">{{ $management->name }}</h3>
                            <span class="text-white" data-aos="fade-left" data-aos-duration="1500">{{ $management->designation }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Management Area -->


    <!-- Start Business concern Area -->
    <section class="repair-area-two repair-area-four pt-5 pb-3 jarallax">
        <div class="container" data-aos="zoom-in-down" data-aos-duration="1000">
            <div class="section-title white-title">
                <h2>Business Concern of Unique Group</h2>
            </div>
        </div>
        {{-- data-aos="fade-down" data-aos-duration="1000" --}}
        <div class="container-fluid ps-0 pe-0">
            <div class="clients-slider owl-carousel owl-theme" >
                @foreach ($business_companies as $item)
                    <div class="m-2">
                        <div class="card work-hover">
                            <a href="{{route('frontend.business_entities',['id' => $item->id])}}">
                                <img src="{{ asset($item->logo) }}" class="work-image" alt="clients" style="height: 77px;">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- data-aos="fade-up" data-aos-duration="1000" --}}
            {{-- <div class="clients-slider1 owl-carousel owl-theme">
                @foreach ($partnar as $item)
                    <div class="m-2">
                        <div class="card work-hover">
                            <a href="">
                                <img src="{{ asset($item->image) }}" class="work-image" alt="clients">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section>
    <!-- End Business concern Area -->


    <!-- Start Hotel & Resorts Area -->
    <section class="news-area py-4">
        <!-- data-aos="flip-left" -->
        <div class="container-fluid">
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2>Unique Hotel & Resorts Ltd.</h2>
            </div>
            <div class="row">
                @foreach ($hotel_resorts as $item)
                    <div class="col-md-3 col-6 mb-4" data-aos="zoom-in-up" data-aos-duration="1500">
                        <div class="cards">
                            <div class="cards_item">
                                <div class="card" tabindex="0" style="height: 460px; width: 100%">
                                    <div class="card_image">
                                        <a href="{{route('frontend.hotel_resort_details', $item->id)}}">
                                            <img src="{{ asset($item->image) }}" class="img-fluid w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="card_content" data-aos="zoom-out-down" data-aos-duration="1500">
                                        <div class="card_text">
                                            <span class="note">{{ $item->title }}</span>
                                            <p>{!! \Illuminate\Support\Str::limit( $item->details , 120, $end='...') !!}</p>
                                            <a href="{{route('frontend.hotel_resort_details', $item->id)}}" class="read-more text-white">Read More<i
                                                    class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Hotel & Resorts Area -->


    <!-- Video Gallery Area -->
    <section class="video_gallery_section py-4 jarallax">
        <!-- data-aos="fade-right" -->
        <div class="container-fluid">
            <div class="section-title white-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2>Video Gallery</h2>
            </div>

            <div class="row">
                @foreach ($videos->take(1) as $item)
                    <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1500">
                        <div class="single_video">
                            <iframe width="100%" height="375" src="{{ asset($item->video) }}"
                                title="ANNOVI REVERBERI CORPORATE VIDEO" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-6 col-12">
                    <div class="row">
                        @foreach ($videos->skip(1)->take(4) as $item)
                            <div class="col-md-6 col-6 mb-2" data-aos="fade-left" data-aos-duration="1500">
                                <div class="right_video">
                                    <iframe width="100%" height="180" src="{{ asset($item->video) }}"
                                        title="Garofoli Group - Video Company Profile [ENG]" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Gallery Area -->


    <!-- Start Counter Area -->
    <section class="counter-area pt-4 pb-0">
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
                <div class="col-md-3 col-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="single-counter">
                        <i class="flaticon-trophy"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $achievments->business_data }}">00</span>
                            <span class="traget">+ {{ $achievments->business }}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-2 col-12" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="single-counter">
                        <img src="{{ asset($company_profile->company_logo) }}" class="img-fluid" alt="">
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
                <div class="col-md-3 col-6" data-aos="fade-left" data-aos-duration="1500">
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


    <!-- Photo Gallery Area -->
    <section class="photo_gallery_section pt-4 pb-3">
        <!-- data-aos="fade-right" -->
        <div class="container-fluid">
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2>Photo Gallery</h2>
            </div>
            <div class="row">
                @foreach ($images as $item)
                    <div class="col-md-3 col-6 mb-4" data-aos="zoom-in-down" data-aos-duration="1500">
                        <div class="gallery_ing">
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


    <!-- Start Partners Area -->
    <div class="partners-area py-4">
        <!-- data-aos="fade-left" -->
        <div class="container-fluid">
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2 class="text-white">Business Associates</h2>
            </div>
            <div class="partners-wrap owl-theme owl-carousel" data-aos="fade-up" data-aos-duration="1500">
                @foreach ($partnars as $partnar)
                    <div class="partners-item">
                        <a href="#"><img style="height: 86px" src="{{ asset($partnar->image) }}" alt="Image"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Partners Area -->


    <!-- Send Business Queries Area -->
    <section class="appointment-area py-4">
        <div class="container">
            <!-- data-aos="flip-up" -->
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2 class="text-block">Send Business Queries</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-wrap" data-aos="zoom-in" data-aos-duration="1500">
                        <h3>Make An Appointment</h3>
                        <div id="msgSubmit">
                            <span  class="h3 text-center text-success hidden"></span>
                        </div>
                        <form onsubmit="messageSend(event)" id="formContact">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            data-error="Please enter your name" placeholder="Your Name">
                                        <span style="color:red;text-align:left;" class="error name"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            data-error="Please enter your email" placeholder="Your Email">
                                        <span style="color:red;text-align:left;" class="error email"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone"
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone">
                                        <span style="color:red;text-align:left;" class="error phone"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control"
                                            data-error="Please enter your subject" placeholder="Your Subject">
                                        <span style="color:red;text-align:left;" class="error subject"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="3"
                                            data-error="Write your message" placeholder="Your Message"></textarea>
                                        <span style="color:red;text-align:left;" class="error message"></span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn page-btn">
                                        Send Query
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-content" data-aos="zoom-in" data-aos-duration="1500">
                        <img src="{{ asset($business_query->about_banner) }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="shape" data-aos="flip-right" data-aos-duration="1500">
            <img src="{{ asset('front_assets') }}/img/home-two/appoinment-img.png" alt="Image">
        </div> --}}
    </section>
    <!-- End Send Business Queries Area -->


    <!-- Start Map Info Area -->
    <section class="map-info-area py-4">
        <div class="container-fluid" style="height: 500px">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="row corporate-info">
                        <div class="col-12" style="text-align: center; ">
                            <img src="{{asset($company_profile->company_logo)}}" alt="Image" data-aos="zoom-in-down" data-aos-duration="2000">
                        </div>
                        <div class="col-12" style="text-align: center; ">
                            <img style="width: 100%; height: 400px;" src="{{asset($maps->image)}}" alt="Image" data-aos="zoom-in-down" data-aos-duration="2000">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6" data-aos="zoom-in-right" data-aos-duration="2000">
                    <div class="corporate-map">
                        <iframe src="{{ asset($maps->map) }}" width="100%" style="border:0; height: 500px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Info Area -->
@endsection

@push('webjs')
    <script>
        function messageSend(event) {
            event.preventDefault();
            var formData = new FormData(event.target);
            $.ajax({
                url: "/queries/store",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $("#formContact").find(".error").text("");
                },
                success: res => {
                    $("#formContact").trigger("reset");
                    // alert(res.message);
                    $("#msgSubmit").show().html(`<span class="h3 text-center text-success hidden">${res.message}</span>`);

                    window.setTimeout(function() {
                        $("#msgSubmit").slideUp(1000, function(){});
                    }, 2000);
                },

                error: err => {
                    $.each(err.responseJSON.errors, (index, value) => {
                        $("#formContact").find("." + index).text(value[0])
                    })
                }
            })
        }

    </script>
@endpush
