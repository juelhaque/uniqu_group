@extends('frontend.layouts.app')

@section('content')
    <div class="sow-slider-base" style="display: none">
        <ul class="sow-slider-images"
            data-settings="{&quot;pagination&quot;:true,&quot;speed&quot;:1000,&quot;timeout&quot;:2000,&quot;paused&quot;:false,&quot;pause_on_hover&quot;:false,&quot;swipe&quot;:true,&quot;nav_always_show_desktop&quot;:&quot;&quot;,&quot;nav_always_show_mobile&quot;:true,&quot;breakpoint&quot;:&quot;780px&quot;,&quot;unmute&quot;:false,&quot;anchor&quot;:null}"
            data-anchor-id="">
            <li class="sow-slider-image  sow-slider-image-cover"
                style="visibility: visible;;background-image: url(https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Beijing.jpg);cursor: pointer;"
                data-url="{&quot;url&quot;:&quot;https:\/\/example.com\/&quot;,&quot;new_window&quot;:true}">
                <a href="https://www.youtube.com/embed/xCOH-pYCvdk" target="_blank" rel="noopener noreferrer">

                    <img width="1253" height="589"
                        src="https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Beijing.jpg"
                        class="sow-slider-background-image skip-lazy" alt="Image Not Found" decoding="async" loading="eager"
                        style=""
                        srcset="https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Beijing.jpg 1253w" /></a>
            </li>
            <li class="sow-slider-image  sow-slider-image-cover"
                style="visibility: hidden;;background-image: url(https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Paris.jpg);cursor: pointer;"
                data-url="{&quot;url&quot;:&quot;https:\/\/example.com\/&quot;,&quot;new_window&quot;:true}">
                <a href="https://www.youtube.com/embed/a56TprHbFgU" target="_blank" rel="noopener noreferrer">

                    <img width="1253" height="589" src="https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Paris.jpg"
                        class="sow-slider-background-image skip-lazy" alt="Image Not Found" decoding="async" loading="eager"
                        style="" srcset="https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Paris.jpg 1253w"
                        sizes="(max-width: 1253px) 100vw, 1253px" /></a>
            </li>
            <li class="sow-slider-image  sow-slider-image-cover"
                style="visibility: hidden;;background-image: url(https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Zurich.jpg);cursor: pointer;"
                data-url="{&quot;url&quot;:&quot;https:\/\/example.com\/&quot;,&quot;new_window&quot;:true}">
                <a href="https://www.youtube.com/embed/vTyBsVOXzsw" target="_blank" rel="noopener noreferrer">

                    <img width="1253" height="589"
                        src="https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Zurich.jpg"
                        class="sow-slider-background-image skip-lazy" alt="Image Not Found" decoding="async" loading="eager"
                        style="" srcset="https://cdn.jsdelivr.net/gh/linuxguist/sowslider@main/Zurich.jpg 1253w"
                        sizes="(max-width: 1253px) 100vw, 1253px" /></a>
            </li>
        </ul>
        <ol class="sow-slider-pagination">
            <li><a href="#" data-goto="0" aria-label="display slide 1"></a></li>
            <li><a href="#" data-goto="1" aria-label="display slide 2"></a></li>
            <li><a href="#" data-goto="2" aria-label="display slide 3"></a></li>
        </ol>

        <div class="sow-slide-nav sow-slide-nav-next">
            <a href="#" data-goto="next" aria-label="next slide" data-action="next">
                <em class="sow-sld-icon-medium-right"></em>
            </a>
        </div>

        <div class="sow-slide-nav sow-slide-nav-prev">
            <a href="#" data-goto="previous" aria-label="previous slide" data-action="prev">
                <em class="sow-sld-icon-medium-left"></em>
            </a>
        </div>
    </div>
    </div>
    </div>
    <div id="panel-w642c4eb13cc95-0-0-1"
        class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" data-index="1">
        <div class="hero-strip panel-widget-style panel-widget-style-for-w642c4eb13cc95-0-0-1"></div>
    </div>
    </div>
    </div>
    </div>

    <!-- Start About Area -->
    <section class="about-area pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-wrap reveal">
                        <div class="about-content">
                            <h2>Welcome To Unique Group</h2>
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

                        <div class="row">
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
                        </div>
                        <!-- <a href="about.html" class="default-btn">
                                Read More
                            </a> -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="reveal-img rainbow mt-lg-5">
                        <div class="about_img">
                            <div class="col_img">
                                <img src="{{ asset('front_assets') }}/img/about/about.jpg" class="w-100" alt="">
                            </div>
                            <div class="col_img">
                                <img src="{{ asset('front_assets') }}/img/about/about1.jpg" class="w-100"
                                    alt="">
                            </div>
                            <div class="col_img">
                                <img src="{{ asset('front_assets') }}/img/about/about2.jpg" class="w-100"
                                    alt="">
                            </div>
                            <div class="col_img">
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



    <!-- Start At A Glance Area -->
    <section class="repair-area-two repair-area-four pt-5 pb-3 jarallax">
        <!-- data-aos="fade-right" -->
        <div class="container" data-aos="zoom-in-down">
            <div class="section-title white-title">
                <h2>Business Sector of Unique Group</h2>
            </div>

            <!-- <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/hotel.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Hotel & Hospatility</h3>
                                    <p>Unique Hotel & Resorts</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1"
                                style="background-image: url({{ asset('front_assets') }}/img/At-glance/real_estate.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Real Estate</h3>
                                    <p>Borak Real Estate Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/manpower.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Human Resource Development & Export</h3>
                                    <p></p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/power.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Energy & Power</h3>
                                    <p>Unique Meghnaghat Power Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/facility.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Facility Management</h3>
                                    <p>Hansa Management Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/readymix.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Ready Mix Concrete</h3>
                                    <p>Borak Ready Mix Concrete</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/ceramic.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Auto Bricks</h3>
                                    <p>Unique Ceramics Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/health.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Health Care</h3>
                                    <p>Gulshan Clinic Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/news.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Newspaper</h3>
                                    <p>The Daily Amader Shomoy</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/land.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Economic Zone</h3>
                                    <p>Sonargaon Economic Zone Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/travels.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Tours & Travels</h3>
                                    <p>Unique Tours & Travels</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/arial.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Agro & Dairy Farm</h3>
                                    <p>Arial Agro Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/education.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Education & Training</h3>
                                    <p>Update College, Institute, & BPI</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/share.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Stock Brokerage</h3>
                                    <p>Unique Share Management Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/ict.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Technology</h3>
                                    <p>MySys and Uninet Global Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-repair">
                            <div class="repair-img bg-1" style="background-image: url({{ asset('front_assets') }}/img/At-glance/banglatel.jpg);">
                                <div class="icon">
                                </div>
                                <div class="repair-content">
                                    <h3>Networking</h3>
                                    <p>Bangla Tel Ltd.</p>
                                    <a href="">
                                        <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->
        </div>

        <div class="container-fluid ps-0 pe-0">
            <div class="clients-slider owl-carousel owl-theme">
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/hotel.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/arial.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/banglatel.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/ceramic.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/education.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/facility.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/health.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/ict.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/land.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
            </div>

            <div class="clients-slider1 owl-carousel owl-theme">
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/manpower.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/news.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/power.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/readymix.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/real_estate.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/share.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/travels.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/ict.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
                <div class="m-2">
                    <div class="card work-hover">
                        <a href="" target="_blank">
                            <img src="{{ asset('front_assets') }}/img/At-glance/land.jpg" class="work-image"
                                alt="clients">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End At A Glance Area -->

    <!-- Start Counter Area -->
    <section class="counter-area pt-4 pb-0">
        <!-- data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" -->
        <div class="container-fluid" data-aos="zoom-in-down">
            <div class="row">
                <div class="col-md-2 col-6">
                    <div class="single-counter">
                        <i class="flaticon-smile"></i>
                        <h2>
                            <span class="odometer" data-count="1">00</span>
                            <span class="target">Group</span>
                        </h2>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="single-counter">
                        <i class="flaticon-team"></i>
                        <h2>
                            <span class="odometer" data-count="20">00</span>
                            <span class="target">+ Company</span>
                        </h2>
                        <!-- <p>Completed Works</p> -->
                    </div>
                </div>

                <div class="col-md-2 col-12">
                    <div class="single-counter">
                        <!-- <i class="flaticon-team"></i> -->
                        <h2>
                            <img src="{{ asset('front_assets') }}/img/logo.gif" class="img-fluid" alt="">
                        </h2>
                        <!-- <p>Completed Works</p> -->
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <i class="flaticon-trophy"></i>
                        <h2>
                            <span class="odometer" data-count="20">00</span>
                            <span class="traget">+ Business Associates</span>
                        </h2>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="single-counter">
                        <i class="flaticon-file"></i>
                        <h2>
                            <span class="odometer" data-count="3,500">00</span>
                            <span class="target">+ Total Employees</span>
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


    <!-- Start News Area -->
    <section class="news-area py-4">
        <!-- data-aos="flip-left" -->
        <div class="container-fluid" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="section-title">
                <h2>Unique Hotel & Resorts Ltd.</h2>
            </div>

            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="cards">
                        <div class="cards_item">
                            <div class="card" tabindex="0">
                                <div class="card_image">
                                    <a href="">
                                        <img src="{{ asset('front_assets') }}/img/hotel/TheWestin.jpg"
                                            class="img-fluid w-100" alt="">
                                    </a>
                                </div>
                                <div class="card_content">
                                    <div class="card_text">
                                        <span class="note">The Westin Dhaka</span>
                                        <p>
                                            Wonderful way to relax, revive, and experience renewal at The Westin Dhaka
                                            – a 5 Star Premium Business Hotel in Gulshan, Dhaka, Bangladesh.
                                        </p>

                                        <a href="" class="read-more text-white">
                                            Read More
                                            <i class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 mb-4">
                    <div class="cards">
                        <div class="cards_item">
                            <div class="card" tabindex="0">
                                <div class="card_image">
                                    <a href="">
                                        <img src="{{ asset('front_assets') }}/img/hotel/sheraton.jpg"
                                            class="img-fluid w-100" alt="">
                                    </a>
                                </div>
                                <div class="card_content">
                                    <div class="card_text">
                                        <span class="note">Sheraton Dhaka</span>
                                        <p>
                                            Sheraton Dhaka offers 5-star accommodation and service. It features a roof top
                                            pool, pampering spa treatments and a 24-hour fitness.
                                        </p>

                                        <a href="" class="read-more text-white">
                                            Read More
                                            <i class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 mb-4">
                    <div class="cards">
                        <div class="cards_item">
                            <div class="card" tabindex="0">
                                <div class="card_image">
                                    <a href="">
                                        <img src="{{ asset('front_assets') }}/img/hotel/hansa.jpg"
                                            class="img-fluid w-100" alt="">
                                    </a>
                                </div>
                                <div class="card_content">
                                    <div class="card_text">
                                        <span class="note">HANSA</span>
                                        <p>
                                            HANSA - A Premium Residence owned by Unique Hotel & Resorts Limited,the
                                            leading Hospitality Management Company Hotel.
                                        </p>

                                        <a href="" class="read-more text-white">
                                            Read More
                                            <i class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="cards">
                        <div class="cards_item">
                            <div class="card" tabindex="0">
                                <div class="card_image">
                                    <a href="">
                                        <img src="{{ asset('front_assets') }}/img/hotel/sheraton.jpg"
                                            class="img-fluid w-100" alt="">
                                    </a>
                                </div>
                                <div class="card_content">
                                    <div class="card_text">
                                        <span class="note">Sheraton Dhaka</span>
                                        <p>
                                            Sheraton Dhaka offers 5-star accommodation and service. It features a roof top
                                            pool, pampering spa treatments and a 24-hour fitness.
                                        </p>

                                        <a href="" class="read-more text-white">
                                            Read More
                                            <i class="bx bx-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-news">
                            <a href="">
                                <img src="{{ asset('front_assets') }}/img/hotel/hansa.jpg" alt="Image">
                            </a>
                            <div class="news-content">

                                <a href="">
                                    <h3>HANSA</h3>
                                </a>

                                <p>
                                    HANSA - A Premium Residence owned by Unique Hotel & Resorts Limited,the
                                    leading Hospitality Management Company.
                                </p>

                                <a href="" class="read-more">
                                    Read More
                                    <i class="bx bx-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>
    <!-- End News Area -->


    <!-- Send Business Queries Area -->
    <section class="appointment-area py-4">
        <div class="container">
            <!-- data-aos="flip-up" -->
            <div class="section-title">
                <h2 class="text-block">Send Business Queries</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- data-aos="flip-up" -->
                    <div class="contact-wrap" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <h3>Make An Appointment</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="3" required
                                            data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn page-btn">
                                        Send Query
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appointment-content" data-aos="zoom-in">
                        <img src="{{ asset('front_assets') }}/img/query/business_query7.jpg" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('front_assets') }}/img/home-two/appoinment-img.png" alt="Image">
        </div>
    </section>
    <!-- End Send Business Queries Area -->
@endsection
