@extends('frontend.layouts.app')

@section('content')

<section class="col-lg-12">

    <div class="banner">
        <img src="{{asset('uploads/banner/1122323864.jpg')}}" style="width: 100%;height:500px">
    </div>
</section>

<div class="container" style="margin-top: 5rem;margin-bottom:5rem">

    <div class="row d-flex" >
        <div class="col-md-3 d-flex" style="justify-content: center">

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-handshake fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Integrity </h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>
        </div>
        <div class="col-md-3 d-flex" style="justify-content: center">

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-users-gear fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">On Time Service </h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>
        </div>
        <div class="col-md-3 d-flex" >

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-bullseye fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Results Oriented </h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>

        </div>
        <div class="col-md-3 d-flex" style="justify-content: center">

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-hands fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Trust</h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>
        </div>
    </div>

    <div class="row d-flex" style="margin-top: 2rem;margin-bottom:2rem">
        <div class="col-md-3 d-flex" style="justify-content: center">

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-users fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Teamwork </h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>
        </div>
        <div class="col-md-3 d-flex" style="justify-content: center">

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-arrows-rotate fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Adaptability </h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>
        </div>
        <div class="col-md-3 d-flex" >

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-shield fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Responsibility</h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>

        </div>
        <div class="col-md-3 d-flex" style="justify-content: center">

            <div class="media-block" >
                <div class="icon" style="text-align: center">
                    <i class="fa-solid fa-universal-access fa-5x" style="color: slateblue"></i>
                    <div class="title" >
                        <h4 style="color: teal;margin-top:1.5rem">Leadership </h4>
                    </div>
                </div>
                    <div class="details" >
                        <p style=" display: block; text-align: center;">Our intention is to do the right things, even wh no one is watching. </p>
                    </div>


            </div>
        </div>
    </div>
</div>

 <!-- Start Partners Area -->
 <div class="partners-area py-4">
    <!-- data-aos="fade-left" -->
    <div class="container-fluid" data-aos="zoom-in-down">
        <div class="section-title">
            <h2 class="text-white">Our Partners</h2>
        </div>
        <div class="partners-wrap owl-theme owl-carousel" style="margin-bottom: 2rem">
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/arial.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/brmc.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/business_post.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/cli.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/ebl.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/gcl.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/hansa.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/hansa_management.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/mysis.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/news.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/sezl.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/sheraton.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/u_ceramic.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/u_eastern.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/ugl.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/uhrl.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/umm.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/update_college.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/update_institute.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/usm.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/utt.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/uvtc.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/westin.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/world_trade.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/borak.jpg" alt="Image">
                </a>
            </div>
            <div class="partners-item">
                <a href="#">
                    <img src="{{ asset('front_assets') }}/img/partner/bpi.jpg" alt="Image">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Partners Area -->
  @endsection
