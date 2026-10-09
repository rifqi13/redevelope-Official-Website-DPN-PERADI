<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Resmi DPN PERADI')</title>
    <meta name="description" content="@yield('meta_description', 'Website Resmi DPN PERADI - Perhimpunan Advokat Indonesia')">
    <meta name="keywords" content="advokat, hukum, peradi, pro bono, bantuan hukum">
    <meta name="author" content="DPN PERADI">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="@yield('title', 'Website Resmi DPN PERADI')">
    <meta property="og:description" content="@yield('meta_description', 'Website Resmi DPN PERADI - Perhimpunan Advokat Indonesia')">
    <meta property="og:image" content="{{ asset('assets/img/og-image-share.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

                
</head>
<body>

<header class="py-4 bg-white border-bottom d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand">
            <img src="https://peradi.or.id/gambar/LOGO-NEW POLOS - Copy.png" width="220" alt="Logo PERADI">
        </a>
        
        <div class="d-flex align-items-center gap-3">
            
            
            <div class="d-flex align-items-center gap-4">
                <button class="btn btn-link text-dark p-0 search-trigger" onclick="openSearch()" title="Cari informasi">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-search fs-5"></i>
                        <span class="fw-medium d-none d-xl-inline"></span>
                    </div>
                </button>
            </div>

            <div class="d-flex align-items-center">
                <a href="#" class="btn-sosmed facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="btn-sosmed twitterx"><i class="bi bi-twitter-x"></i></a>
				<a href="#" class="btn-sosmed instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="btn-sosmed youtube"><i class="bi bi-youtube"></i></a>
				<a href="#" class="btn-sosmed tiktok"><i class="bi bi-tiktok"></i></a>
            </div>
            
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-0">
    <div class="container">
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto gap-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="bi bi-house-door me-1"></i> Beranda</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="{{ route('profil.sejarah') }}">Sejarah DPN PERADI</a></li>
                        <li><a class="dropdown-item hover-bg2" href="{{ route('profil.susunan') }}">Dewan Pimpinan Nasional</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Pusat Bantuan Hukum</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Young Lawyers Committee</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peraturan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="{{ route('peraturan.undang-undang') }}">Undang-undang No. 18 Tahun 2003</a></li>
                        <li><a class="dropdown-item hover-bg2" href="{{ route('peraturan.kode-etik') }}">Kode Etik Advokat</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Anggaran Dasar</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Anggaran Rumah Tangga</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Peraturan Magang</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Peraturan Perpindahan Domisili Anggota</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">PKPA</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="{{ route('profil.pkpa-seluruh-indonesia') }}">PKPA Seluruh Indonesia</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">UPA</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="{{ url('pengumuman/kategori/info-ujian') }}">Pengumuman</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pengangkatan Advokat</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="#">Magang</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Pengangkatan & Pengambilan Sumpah</a></li>
                        <li><a class="dropdown-item hover-bg2" href="{{ url('/pengumuman/pengumuman-persyaratan-pengangkatan--dan-pengambilan-sumpah-atau-janji-advokat-di-wilayah-pengadilan-tinggi-di-seluruh-indonesia-tahun-2023') }}">Syarat Pengangkatan & Pengambilan Sumpah</a></li>
                        <li><a class="dropdown-item hover-bg2" href="{{ url('pengumuman/kategori/pengangkatan-pengambilan-sumpah') }}">Pengumuman</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dewan Kehormatan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="#">Dewan Kehormatan Pusat</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Dewan Kehormatan Daerah</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Peraturan Pelaksanaan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Komisi Pengawas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="#">Komisi Pengawas Pusat</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Komisi Pengawas Daerah</a></li>
                        <li><a class="dropdown-item hover-bg2" href="#">Peraturan Pelaksanaan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Internasional</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item hover-bg2" href="{{ url('pengumuman/kategori/ujian-profesi-advokat-asing') }}">Pengumuman</a></li>
                        <li><a class="dropdown-item hover-bg2" href="{{ url('/pengumuman/formulir-permohonan-certificate-of-good-standing') }}">Certificate Of Good Standing (COGS)</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Navbar Mobile View -->
<!-- Header Mobile Ala Kemendag (Dua Baris) -->
<header class="bg-white d-lg-none shadow-sm sticky-top">
    <!-- Baris 1: Logo & Search -->
    <div class="container py-3 d-flex justify-content-between align-items-center border-bottom">
        <a href="#">
            <img src="https://peradi.or.id/gambar/LOGO-NEW POLOS - Copy.png" width="130" alt="Logo PERADI">
        </a>
        <button class="btn btn-link text-dark p-0 text-decoration-none d-flex align-items-center gap-1 shadow-none" onclick="openSearch()">
            <i class="bi bi-search fs-5"></i>
            <span class="small fw-bold">Search</span>
        </button>
    </div>

    <!-- Baris 2: Hamburger & Medsos -->
    <div class="container py-2 d-flex justify-content-between align-items-center">
        <!-- Tombol Hamburger yang memicu Offcanvas -->
        <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list fs-1 text-dark"></i>
        </button>

        <!-- Medsos Icons (Sesuai image_0e9cfc.jpg) -->
            <div class="d-flex align-items-center">
                <a href="#" class="btn-sosmed facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="btn-sosmed twitterx"><i class="bi bi-twitter-x"></i></a>
				<a href="#" class="btn-sosmed instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="btn-sosmed youtube"><i class="bi bi-youtube"></i></a>
				<a href="#" class="btn-sosmed tiktok"><i class="bi bi-tiktok"></i></a>
            </div>
    </div>
</header>

<!-- Offcanvas Menu Mobile (Slide dari Kanan/Kiri) -->
<div class="offcanvas offcanvas-start w-75" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header border-bottom">
        <div class="text-center w-100">
            <img src="https://peradi.or.id/gambar/LOGO-NEW POLOS - Copy.png" width="180" alt="Logo" class="mb-2">
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body p-0">
        <!-- Fitur Pilih Bahasa di Mobile -->
        <div class="p-3 border-bottom bg-light">
            <i class="bi bi-translate me-2"></i> <small class="fw-bold">PILIH BAHASA</small>
        </div>

        <ul class="list-group list-group-flush">
            <!-- Menu Beranda -->
            <li class="list-group-item border-0 py-3">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                    <div class="mobile-icon-box bg-dark text-white rounded-circle me-3">
                        <i class="bi bi-house-door-fill"></i>
                    </div>
                    <span class="fw-bold small text-uppercase">Beranda</span>
                </a>
            </li>

            <!-- Menu Dropdown: Tentang -->
            <li class="list-group-item border-0 py-2">
                <div class="accordion accordion-flush" id="accTentang">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed px-0 bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTentang">
                                <div class="d-flex align-items-center">
                                    <div class="mobile-icon-box bg-primary text-white rounded-circle me-3">
                                        <i class="bi bi-info-circle-fill"></i>
                                    </div>
                                    <span class="fw-bold small text-uppercase">Tentang</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTentang" class="accordion-collapse collapse" data-bs-parent="#accTentang">
                            <div class="accordion-body ps-5 py-2">
                                <ul class="list-unstyled">
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-muted small">Profil Ketua Umum</a></li>
                                    <li class="mb-3"><a href="#" class="text-decoration-none text-muted small">Struktur Organisasi</a></li>
                                    <li class="mb-1"><a href="#" class="text-decoration-none text-muted small">Makna Logo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Menu Berita -->
            <li class="list-group-item border-0 py-3">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                    <div class="mobile-icon-box bg-primary text-white rounded-circle me-3">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <span class="fw-bold small text-uppercase">Berita</span>
                </a>
            </li>
            
            <!-- Tambahkan menu lainnya dengan pola yang sama -->
        </ul>
    </div>
</div>


<div id="searchOverlay" class="search-overlay">
    <button type="button" class="btn-close-overlay" onclick="closeSearch()">
        <i class="bi bi-x-lg"></i>
    </button>
    <div class="search-content">
        <h1 class="text-uppercase display-1 fw-bold search-bg-text">Pencarian</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <form action="#" method="GET" class="search-form-wrapper">
                        <input type="text" class="search-input col-md-11" placeholder="Masukkan pencarian..." autofocus>
                        <button type="submit" class="search-submit-btn">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@yield('content')

@stack('scripts')


    <!-- Remove the container if you want to extend the Footer to full width. -->
<footer class="text-white text-center text-lg-start" style="background: #46b7de;">

    <div class="container py-5">
        <div class="row g-4">
            <!-- Kolom 1: Informasi Kontak -->
            <div class="col-lg-4 col-md-12 mb-4">
                <h5 class="text-uppercase fw-bold mb-4 border-bottom border-warning d-inline-block pb-1">Kontak Peradi</h5>
                
                <div class="contact-list">
                    <!-- Alamat -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <strong>Sekretariat Nasional DPN PERADI</strong><br>
                            <span class="text-warning fw-bold">PERADI TOWER</span><br>
                            Jl. Jend. Achmad Yani No.116, Jakarta Timur 13120
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <a href="mailto:info@peradi.or.id" class="text-white text-decoration-none">info@peradi.or.id</a>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            +62 21 3883 6000
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Pendaftaran & Informasi -->
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <h5 class="text-uppercase fw-bold mb-4 border-bottom border-warning d-inline-block pb-1">Pendaftaran Ujian Advokat</h5>
                <p class="footer-text mb-4">
                    Untuk calon advokat, silakan akses informasi resmi mengenai ujian profesi melalui tautan di bawah ini:
                </p>
                <a href="https://pupaperadi.or.id" target="_blank" class="btn btn-warning fw-bold px-4 rounded-pill shadow-sm">
                    Daftar Ujian Advokat
                </a>
                
                
            </div>

            <!-- Kolom 3: Aplikasi Keanggotaan -->
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <h5 class="text-uppercase fw-bold mb-4 border-bottom border-warning d-inline-block pb-1">Aplikasi Keanggotaan</h5>
                <p class="footer-text mb-3">
                    Unduh aplikasi resmi ANGGOTA PERADI untuk kemudahan Data Ulang, Cetak Ulang Kartu, Kartu Hilang & Pindah Domisli.
                </p>
                <div class="d-flex justify-content-center justify-content-lg-start gap-2 mb-4">
                    <a target="_blank" href="https://apps.apple.com/id/app/anggota-peradi/id6758582258?l=id" class="app-btn">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store">
                    </a>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.pupanka.anggotaperadi&hl=id" class="app-btn">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Play Store">
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
        <span class="small">Copyright © 2026, <strong>Perhimpunan Advokat Indonesia</strong>. All rights reserved.</span>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/afterglow/1.x/afterglow.min.js"></script>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>





</body>
</html>