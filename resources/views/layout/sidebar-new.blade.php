<aside id="sidebar" class="sidebar" style="background-color: #A0D8B3; border-radius: 20px;">
    <ul class="sidebar-nav" id="sidebar-nav" style="border-radius: 20px;">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/') }}">
                <i class="bi bi-grid" style="color: #55828B;"></i>
                <span style="color: #55828B;">Dashboard</span>
            </a>
        </li>
        @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/profile') }}">
                    <i class="bi bi-person" style="color: #55828B;"></i>
                    <span style="color: #55828B;">Profil Saya</span>
                </a>
            </li>
            <li class="nav-heading" style="color: #55828B;">Aktifitas</li>
            @if (Auth::user()->level === 'Administrator')
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-database" style="color: #55828B;"></i>
                        <span style="color: #55828B;">Data Lelang</span>
                        <i class="bi bi-chevron-down ms-auto" style="color: #55828B;"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse sidebar-nav" data-bs-parent="#sidebar-nav">
                        <li>
                            <a class="nav-link" href="{{ url('/masyarakat') }}">
                                <i class="bi bi-circle" style="color: #55828B;"></i>
                                <span style="color: #55828B;">Data Masyarakat</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/petugas') }}">
                                <i class="bi bi-circle" style="color: #55828B;"></i>
                                <span style="color: #55828B;">Data Petugas</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/barang') }}">
                                <i class="bi bi-circle" style="color: #55828B;"></i>
                                <span style="color: #55828B;">Data Barang</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/laporan') }}">
                        <i class="bi bi-clipboard-data" style="color: #55828B;"></i>
                        <span style="color: #55828B;">Print Laporan</span>
                    </a>
                </li>
            @elseif (Auth::user()->level === 'Petugas')
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-database" style="color: #55828B;"></i>
                        <span style="color: #55828B;">Data Lelang</span>
                        <i class="bi bi-chevron-down ms-auto" style="color: #55828B;"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse sidebar-nav" data-bs-parent="#sidebar-nav">
                        <li>
                            <a class="nav-link" href="{{ url('/masyarakat') }}">
                                <i class="bi bi-circle" style="color: #55828B;"></i>
                                <span style="color: #55828B;">Data Masyarakat</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/barang') }}">
                                <i class="bi bi-circle" style="color: #55828B;"></i>
                                <span style="color: #55828B;">Data Barang</span>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('/lelang') }}">
                            <i class="bi bi-bar-chart" style="color: #55828B;"></i>
                            <span style="color: #55828B;">Aktivasi Lelang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('/laporan') }}">
                            <i class="bi bi-clipboard-data" style="color: #55828B;"></i>
                            <span style="color: #55828B;">Print Laporan</span>
                        </a>
                    </li>
                </li>
            @elseif (Auth::user()->level === 'Masyarakat')
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/gallery') }}">
                        <i class="bi bi-cart" style="color: #55828B;"></i>
                        <span style="color: #55828B;">Gallery Lelang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('/profile') }}">
                        <i class="bi bi-clock-history" style="color: #55828B;"></i>
                        <span style="color: #55828B;">Histori Lelang</span>
                    </a>
                </li>
            @endif
            <li class="nav-heading" style="color: #55828B;">Others</li>
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/gallery') }}">
                    <i class="bi bi-cart" style="color: #55828B;"></i>
                    <span style="color: #55828B;">Gallery Lelang</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/about') }}">
                <i class="bi bi-question-circle" style="color: #55828B;"></i>
                <span style="color: #55828B;">About</span>
            </a>
        </li>
        @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/logout') }}">
                    <i class="bi bi-box-arrow-right" style="color: #55828B;"></i>
                    <span style="color: #55828B;">Log Out</span>
                </a>
            </li>
        @endif
    </ul>
</aside>