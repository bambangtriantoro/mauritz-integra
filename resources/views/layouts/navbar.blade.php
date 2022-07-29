{{-- Navbar --}}
<div class="navbar-header bg-custom text-light">
    <div class="container">
        <div class="datetime">
            <small><i class='bx bx-calendar me-1'></i></small> <span id="datetime" class="datetime"></span>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/maurindotekniksolusi" target="_blank"><i
                    class='bx bxl-facebook-circle'></i></a>
            <a href="https://www.instagram.com/mauritzintegra/" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a href="https://www.tiktok.com/@mauritzintegra" target="_blank"><i class='bx bxl-tiktok'></i></i></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/asset/image/logo/logo2.jpeg" width="40" alt="mauritz integra logo">
            Maurindo <span>Teknik</span> Solusi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'about' ? 'active' : '' }}" href="/about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'service' ? 'active' : '' }}" href="/service">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'shop' ? 'active' : '' }}" href="/shop">Toko</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $page == 'shop' ? 'active' : '' }}" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/shop">Service 1</a></li>
                        <li><a class="dropdown-item" href="#">Service 2</a></li>
                        <li><a class="dropdown-item" href="#">Service 3</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item {{ $page == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Kontak</a>
                </li>
                <li class="nav-item {{ $page == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Partner Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
