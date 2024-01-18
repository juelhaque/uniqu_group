@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Contact Us</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

 <!-- Start Contact Info Area -->
 <section class="facility-area home_contact facility-area-four py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6" data-aos="fade-right" data-aos-duration="1600">
                <div class="single-facility bg-teal">
                    <img src="{{ asset('front_assets') }}/img/img-icon/1.png" alt="Image">
                    <h3>Corporate Office:</h3>
                    <p>{{ $company_profile->address }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6" data-aos="zoom-in" data-aos-duration="1800">
                <div class="single-facility middle_card">
                    <img src="{{ asset('front_assets') }}/img/img-icon/4.png" alt="Image">
                    <h3>Let's Talk:</h3>
                    <p>{{ $company_profile->phone }}</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6" data-aos="fade-left" data-aos-duration="1600">
                <div class="single-facility bg-teal">
                    <img src="{{ asset('front_assets') }}/img/img-icon/2.png" alt="Image">
                    <h3>Email Us:</h3>
                    <p>{{ $company_profile->email }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Send Business Queries Area -->
<section class="appointment-area py-4">
    <div class="container">
        <!-- data-aos="flip-up" -->
        <div class="section-title" data-aos="zoom-in-down" data-aos-duration="1500">
            <h2 class="text-block">Send Business Queries</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
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
                    <img src="{{ asset($business_query->about_banner) }}" class="img-fluid" alt="" style="border-radius: 8px; height: 434px">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Send Business Queries Area -->

<!-- Start Map Info Area -->
<section class="map-info-area py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="corporate-info">
                    <img style="height: 400px" src="{{asset($hotel_resort->image)}}" alt="Image" data-aos="zoom-in-down" data-aos-duration="2000">
                    <div class="address" data-aos="fade-right" data-aos-duration="2000">
                        <h2>Unique Group <span>(Corporate Office)</span></h2>
                        <p>{{ $company_profile->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-6" data-aos="zoom-in-left" data-aos-duration="2000">
                <div class="corporate-map">
                    <iframe style="height: 520px" src="{{ asset($maps->map) }}" width="100%" style="border:0;" allowfullscreen=""
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
