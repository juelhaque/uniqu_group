@extends('frontend.layouts.app')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-17" style="background-image: url({{$banner->career_banner}}); text-shadow: 3px 3px #000000;">
    <div class="container">
        <div class="page-title-content">
            <h2 data-aos="fade-right" data-aos-duration="2000">Career</h2>
            <ul data-aos="fade-left" data-aos-duration="2000">
                <li><a href="{{ route('frontend.home') }}">Home</a></li>
                <li>Career</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<section class="appointment-area py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-wrap" data-aos="fade-right" data-aos-duration="2000">
                    <div id="msgSubmit">
                        <span  class="h3 text-center text-success hidden"></span>
                    </div>
                    <form onsubmit="messageSend(event)" id="formApplication">
                        <div class="row">

                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="position" id="position" class="form-control"
                                        data-error="Please enter your position" placeholder="Your position">
                                    <span style="color:red;text-align:left;" class="error position"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="company" id="company" class="form-control"
                                        data-error="Please enter your company/Department" placeholder="company/Department">
                                    <span style="color:red;text-align:left;" class="error company"></span>
                                </div>
                            </div>

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
                                    <input type="file" name="file" id="file">
                                    <span style="color:red;text-align:left;" class="error file"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-3">
                                <button type="submit" class="default-btn page-btn">
                                    Apply Now
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-wrap">
                    <div class="about-content" style="text-align: justify">
                        <h2 data-aos="fade-left" data-aos-duration="1500">{{$careers->title}}</h2>
                        <div data-aos="fade-right" data-aos-duration="1500">{!!$careers->description!!}</div>
                        <div data-aos="fade-up" data-aos-duration="1500">Interested candidates please send your CV to : <a href="mailto:hr@uniquegroupbd.com"><span style="color: red"> hr@uniquegroupbd.com</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('webjs')
    <script>
        function messageSend(event) {
            event.preventDefault();
            var formData = new FormData(event.target);
            $.ajax({
                url: "/apply/store",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: () => {
                    $("#formApplication").find(".error").text("");
                },
                success: res => {
                    $("#formApplication").trigger("reset");
                    // alert(res.message);
                    $("#msgSubmit").show().html(`<span class="h3 text-center text-success hidden">${res.message}</span>`);

                    window.setTimeout(function() {
                        $("#msgSubmit").slideUp(1000, function(){});
                    }, 2000);
                },
                error: err => {
                    $.each(err.responseJSON.errors, (index, value) => {
                        $("#formApplication").find("." + index).text(value[0])
                    })
                }
            })
        }

    </script>
@endpush
