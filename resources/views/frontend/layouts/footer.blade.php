<!-- Start Footer Top Area -->
<footer class="footer-top-area py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 col-sm-12">
                <div class="single-widget" data-aos="flip-right" data-aos-duration="1500">
                    <a href="{{ route('frontend.home') }}">
                        <img src="{{asset($company_profile->company_logo)}}" width="120" alt="Image">
                    </a>
                    <p style="text-align: center">
                        {!! Illuminate\Support\Str::limit($welcome_notes->about_description, 350) !!}
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-6 col-sm-6">
                <div class="single-widget contact" data-aos="fade-up" data-aos-duration="1500">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>
                            <i class="flaticon-call"></i>
                            <span>Hotline:</span>
                            <a href="tel:880-1700000000">
                                {{$company_profile->phone}}
                            </a>
                        </li>
                        <li>
                            <i class="flaticon-envelope"></i>
                            <span>Email:</span>
                            <a
                                href="mailto:info@uniquegroupbd.com"><span class="__cf_email__"
                                    data-cfemail="6e060b0202012e1f080716400d0103">{{$company_profile->email}}</span>
                            </a>
                        </li>
                        <li>
                            <i class="flaticon-maps-and-flags"></i>
                            <span>Address:</span>
                            {{$company_profile->address}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-6 col-sm-6" style="padding-left: 3rem">
                <div class="single-widget" data-aos="fade-up" data-aos-duration="1500">
                    <h3>Service Links</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="flaticon-right-chevron"></i>
                                Sheraton Dhaka
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-right-chevron"></i>
                                The Westin Dhaka
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-right-chevron"></i>
                                HANSA
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-right-chevron"></i>
                                Sheraton Dhaka
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-right-chevron"></i>
                                The Westin Dhaka
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-right-chevron"></i>
                                HANSA
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-12 col-sm-12">
                <div class="single-widget" data-aos="fade-up" data-aos-duration="1500">
                    <h3>Social Link</h3>
                    <div class="social-area">
                        <ul>
                            <li>
                                <a href="{{$company_profile->facebook}}" target="__blank"><i class="bx bxl-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{$company_profile->twitter}}" target="__blank"><i class="bx bxl-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{$company_profile->linkedin}}" target="__blank"><i class="bx bxl-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="{{$company_profile->youtube}}" target="__blank"><i class="bx bxl-youtube"></i></a>
                            </li>
                            <li>
                                <a href="{{$company_profile->instagram}}" target="__blank"><i class="bx bxl-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area footer-bottom-electronics-area">
    <div class="container">
        <div class="copy-right d-flex justify-content-between">
            <p>
                Copyright <i class="bx bx-copyright"></i>{{date('Y')}} <b>Unique Group</b>, All Right Reserved
            </p>
            <p>
                Designed & Develop By :
                <a href="https://linktechbd.com/" target="_blank">Link-up Technology Ltd.</a>
            </p>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->
