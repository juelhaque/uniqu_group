@extends('frontend.layouts.app')

@section('content')


<section class="col-lg-12">

    <div class="banner">
        <img src="{{asset('uploads/banner/1122323864.jpg')}}" style="width: 100%;height:500px">
    </div>
</section>


   <!-- Start About Area -->
   <section class="about-area pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-wrap reveal">
                    <div class="about-content">
                        <h2>Director Name</h2>
                        <h4>Director Designation</h4>
                        <p>
                            Unique Group (UG) is one of the largest conglomerate and foremost diversified
                            business entities in Bangladesh. Its journey started in early 1980’s,
                            and over the years, it has diversified into many new businesses sectors
                            in order to meet the needs of the stakeholders, while contributing
                            significantly to the economy. UG has developed a unique business model of
                            creating synergized companies that enjoy the best of entrepreneurial
                            independence and Group-wide synergies.
                        </p>


                    </div>

                    {{-- <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="single-about">
                                <i class="flaticon-computer"></i>
                                <h3>Accessories</h3>
                                <p>Stock Brokerage House, Ceramics Industry, Educational Institutions, Agro,
                                    Media & Publications
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="single-about">
                                <i class="flaticon-innovation"></i>
                                <h3>Analysis</h3>
                                <p>Sector, Private Economic Zone, Bank, Insurance, Non-Banking Financial Sector
                                    Media & Publications</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- <a href="about.html" class="default-btn">
                            Read More
                        </a> -->
                </div>
            </div>

            <div class="col-lg-6">
                <div class="reveal-img rainbow mt-lg-5">
                    <div class="about_img">

                        <div class="col_img" style="width: 100%">
                            <img src="{{ asset('front_assets') }}/img/about/about3.jpg" class="w-100"
                                alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->


 <!-- Start Partners Area -->
 <div class="partners-area py-4">
    <!-- data-aos="fade-left" -->
    <div class="container-fluid" data-aos="zoom-in-down">
        <div class="section-title">
            <h2 class="text-white">Our Partners</h2>
        </div>
        <div class="partners-wrap owl-theme owl-carousel">
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
