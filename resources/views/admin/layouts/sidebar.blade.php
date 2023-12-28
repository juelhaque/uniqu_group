<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #25245e">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{ asset($company_profile->company_logo) }}" alt="Logo" class="brand-image img-rounded elevation-3" style="opacity: .8">
        <span class="brand-text">Unique Group</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Sub Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sliders.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('messages.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('map.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Map</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('company-profile.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Company Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact_info.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>Contact Information</p>
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
