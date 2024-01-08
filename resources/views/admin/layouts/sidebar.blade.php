<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #25245e">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset($company_profile->company_logo) }}" alt="Logo" class="brand-image img-rounded elevation-3"
            style="opacity: .8">
        <span class="brand-text">Unique Group</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('company-profile.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Company Profile</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('contact_info.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Contact Information</p>
                    </a>
                </li> --}}


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="padding-right: 2rem">
                        <li class="nav-item">
                            <a href="{{ route('director-massage.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Message</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mission.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-rocket"></i>
                                <p>Mission</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('vision.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-eye"></i>
                                <p>Vision</p>
                            </a>

                </li>

                <li class="nav-item">
                    <a href="{{ route('governence.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-eye-slash"></i>
                        <p>Governence</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('culture.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-seedling"></i>
                        <p>Culture</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('sprit.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-bomb"></i>
                        <p>Company Sprit</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('social.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-leaf"></i>
                        <p> Social Responsibility</p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ route('charter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-chart-pie"></i>
                        <p> Company Charter</p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ route('value.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-hand-holding-heart"></i>
                        <p>We Value</p>
                    </a>
                </li>
            </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('banner.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-flag"></i>
                    <p>Banners</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sliders.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Slider</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('managment.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-users"></i>
                    <p>Managment</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('partners.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-handshake"></i>
                    <p>Partners</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('business.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-business-time"></i>
                    <p>Business Sector</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('hotel.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-hotel"></i>
                    <p>Hotel & Resort</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('photo.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-image"></i>
                    <p>Photos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('video.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-video"></i>
                    <p>Videos</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('map.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-map-marker-alt"></i>
                    <p>Map</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('social.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-newspaper"></i>
                    <p>News $ Event</p>
                </a>
            </li>
            @if (Auth::user()->role == 0)
                <li class="nav-item {{ Route::is('user.index') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
            @endif
            </ul>
        </nav>
    </div>
</aside>
