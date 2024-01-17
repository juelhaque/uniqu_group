@extends('frontend.layouts.app')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-17">
        <div class="container">
            <div class="page-title-content">
                <h2 data-aos="fade-right" data-aos-duration="2000">About Unique Group</h2>
                <ul data-aos="fade-left" data-aos-duration="2000">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in-down" data-aos-duration="1600">
                    <div class="mt-lg-5">
                        <div class="about_img">
                            <div class="">
                                <img src="{{ asset($about_us->about_image) }}" class="w-100" alt="" style="border-radius: 8px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="about-wrap">
                        <div class="about-content" style="text-align: justify">
                            <h2 data-aos="fade-left" data-aos-duration="1500">{{ $about_us->title }}</h2>
                            <div data-aos="fade-right" data-aos-duration="1500">{!! $about_us->about_description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Counter Area -->
    <section class="counter-area pt-4 pb-0">
        <!-- data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" -->
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
                <div class="col-md-2 col-6" data-aos="fade-right" data-aos-duration="1500">
                    <div class="single-counter">
                        <i class="flaticon-team"></i>
                        <h2>
                            <span class="odometer" data-count="{{ $achievments->company_data }}">00</span>
                            <span class="target">+ {{ $achievments->company }}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-2 col-12" data-aos="zoom-in" data-aos-duration="1800">
                    <div class="single-counter">
                        <img src="{{ asset($company_profile->company_logo) }}" class="img-fluid" alt="">
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
                <div class="col-md-3 col-6" data-aos="fade-left" data-aos-duration="1000">
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

    <!-- Start Partners Area -->
    <div class="partners-area py-4">
        <!-- data-aos="fade-left" -->
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

    <!-- Send Business Queries Area -->
    <section class="appointment-area py-4">
        <div class="container">
            <!-- data-aos="flip-up" -->
            <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
                <h2 class="text-block">Send Business Queries</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- data-aos="flip-up" -->
                    <div class="contact-wrap" data-aos="fade-right" data-aos-duration="2000">
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
                    <div class="appointment-content" data-aos="zoom-in-down" data-aos-duration="1500">
                        <img src="{{ asset($business_query->about_banner) }}" class="img-fluid" alt="" style="border-radius: 8px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Send Business Queries Area -->

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
