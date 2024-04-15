<header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #A0D8B3;">
    <div class="d-flex align-items-center justify-content-between container">
        <div class="d-flex align-items-center">
            <i style="color: #55828B" class="bi bi-list toggle-sidebar-btn me-2"></i>
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('img/brand-logo-new-2.png') }}" alt="Ci Lelang Logo">
                <span style="color: #55828B" class="d-none d-lg-block">Ci Lelang</span>
            </a>
        </div>
    </div>

    @if (Auth::check())
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        @if (Auth::user()->level === 'Administrator')
                            <img src="{{ asset('img/avatar-admin.png') }}" alt="Profile" class="rounded-circle" style="border: 2px solid #F2B5D4;">
                        @elseif (Auth::user()->level === 'Petugas')
                            <img src="{{ asset('img/avatar-petugas.png') }}" alt="Profile" class="rounded-circle" style="border: 2px solid #F2B5D4;">
                        @elseif (Auth::user()->level === 'Masyarakat')
                            <img src="{{ asset('img/avatar-masyarakat.png') }}" alt="Profile" class="rounded-circle" style="border: 2px solid #F2B5D4;">
                        @endif
                        <span class="d-none d-md-block dropdown-toggle ps-2" style="color: #55828B;">{{ Auth::user()->nama }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="background-color: #A0D8B3;">
                        <li class="dropdown-header">
                            <h6 style="color: #55828B;">{{ Auth::user()->nama }}</h6>
                            <span style="color: #55828B;">{{ Auth::user()->level }}</span>
                        </li>
                        <li><hr class="dropdown-divider" style="border-color: #F2B5D4;"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/profile') }}" style="color: #55828B;">
                                <i class="bi bi-person" style="color: #55828B;"></i>
                                <span>Profil Saya</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider" style="border-color: #F2B5D4;"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}" style="color: #55828B;">
                                <i class="bi bi-box-arrow-right" style="color: #55828B;"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    @else
    <nav class="header-nav ms-auto">
        <div class="d-flex align-items-center">
            <div class="d-flex justify-content-end me-3">
                <a href="{{ url('/login') }}" class="btn text-white btn-sm mt-1 me-2" style="background-color: #55828B; border-radius:15px">Log In</a>
                <a href="{{ url('/register') }}" class="btn text-white btn-sm mt-1" style="background-color: #55828B; border-radius:15px">Sign Up</a>
            </div>
        </div>
    </nav>
    @endif
</header>