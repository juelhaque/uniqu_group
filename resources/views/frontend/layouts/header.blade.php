<!-- Start Heder Area -->
<header class="header-area fixed-top">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-content-left" data-aos="fade-left" data-aos-duration="1500">
                        <p>{{$company_profile->about_title}}, Bangladesh</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="header-content-right">
                        <li data-aos="fade-right" data-aos-duration="1500">
                            <a
                                href="mailto:info@uniquegroupbd.com">
                                <i class="bx bx-envelope"></i>
                                Email: <span class="__cf_email__"
                                    data-cfemail="8ee7e0e8e1ceffe8e7f6a0ede1e3">{{$company_profile->email}}</span>
                            </a>
                        </li>

                        <li data-aos="fade-right" data-aos-duration="1200">
                            <a href="tel:880-1700000000">
                                <i class="bx bx-phone-call"></i>
                                Call Us For Inquiry: {{$company_profile->phone}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Navbar Area -->
    <div class="nav-area">
        <div class="navbar-area">
            
            <div class="mobile-nav">
                <a href="{{ route('frontend.home') }}" class="logo d-flex">
                    <img src="{{asset($company_profile->company_logo)}}" alt="Logo">
                    <h4>Unique Group</h4>
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand d-flex" href="{{ route('frontend.home') }}">
                            <img src="{{asset($company_profile->company_logo)}}" alt="Logo" data-aos="flip-right" data-aos-duration="1500">
                            <h4 data-aos="fade-left" data-aos-duration="1500">Unique Group</h4>
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1000">
                                    <a href="{{ route('frontend.home') }}" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1100">
                                    <a href="#" class="nav-link dropdown-toggle">About<i class="bx bx-plus"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('frontend.about')}}" class="nav-link">About Unique Group</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('message')}}" class="nav-link">Managing Director's Message</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('frontend.charters')}}" class="nav-link">Charter of Unique Group</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('frontend.missions')}}" class="nav-link">Mission & Vision</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('frontend.terms_conditions')}}" class="nav-link">Terms Conditions</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('governance')}}" class="nav-link">Corporate Governance</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('managment')}}" class="nav-link">Our Management</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('culture')}}" class="nav-link">Our Culture</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.sprit')}}" class="nav-link">Spirit Of Unique Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('frontend.social_responsibilites')}}" class="nav-link">Corporate Social Responsibilites</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1200">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Business Entities
                                        <i class="bx bx-plus"></i>
                                    </a>
                                    <ul class="dropdown-menu business_entities">
                                        @foreach ($business_companies as $item)
                                        <li class="nav-item">
                                            <a href="{{route('frontend.business_entities',['id' => $item->id])}}" class="nav-link">{{$item->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1300">
                                    <a href="{{route('frontend.photo')}}" class="nav-link">Gallery</a>
                                </li>

                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1400">
                                    <a href="{{route('frontend.news_events')}}" class="nav-link">News & Event</a>
                                </li>

                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1500">
                                    <a href="{{route('frontend.career')}}" class="nav-link">Career</a>
                                </li>

                                <li class="nav-item" data-aos="fade-right" data-aos-duration="1600">
                                    <a href="{{route('frontend.contact')}}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Heder Area -->
