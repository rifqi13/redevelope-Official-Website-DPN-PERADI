@extends('layouts.app')

@section('title', 'Pengumuman - PERADI')

@section('content')


<!-- ============================================
     PAGE HEADER
     ============================================ -->
<section class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Seminar & Pelatihan</li>
                    </ol>
                </nav>
                <h1>Seminar & Pelatihan</h1>
                <p class="text-white-50 mb-0">Program pengembangan profesional advokat dan pendidikan hukum berkelanjutan</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill">
                    <i class="fas fa-calendar-check me-2"></i> 12 Acara Mendatang
                </span>
            </div>
        </div>
    </div>
</section>



<!-- ============================================
     MAIN CONTENT
     ============================================ -->
<section class="pb-5 py-4">
    <div class="container">
        <div class="row g-4">

            <!-- ==========================================
                 KOLOM KIRI: DAFTAR SEMINAR
                 ========================================== -->
            <div class="col-lg-8">

                <!-- Filter & Search -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-4">Semua</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Seminar Nasional</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Seminar Internasional</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Pelatihan</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Sertifikasi</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Webinar</a>
                </div>

                <!-- Grid Seminar -->
                <div class="row g-4">

                    <!-- Seminar 1 -->
                    <div class="col-md-6">
                        <div class="seminar-card-list">
                            <img src="659092985_18153954010455610_3958484355976891626_n.webp" alt="Seminar" class="seminar-img">
                            <div class="seminar-body">
                                <span class="seminar-badge badge-hybrid">Hybrid</span>
                                <a href="#" class="seminar-title">Peranan Advokat dalam Penegakan Hukum Berdasarkan KUHAP Baru</a>
                                <div class="seminar-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>Sabtu, 11 April 2026</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>14.30 – 17.30 WIB</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Hybrid Zoom - Auditorium UNISSULA, Semarang</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Narasumber: Dr. H. Abdul Kholiq, SH., MH.</span>
                                    </div>
                                </div>
                                <div class="seminar-footer">
                                    <span class="price">Gratis <small style="font-weight:400;color:#999;">(Terbatas)</small></span>
                                    <a href="#" class="btn-detail">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seminar 2 -->
                    <div class="col-md-6">
                        <div class="seminar-card-list">
                            <img src="menyongsong-uu-pidana-nasional.jpg" alt="Seminar" class="seminar-img">
                            <div class="seminar-body">
                                <span class="seminar-badge badge-online">Online</span>
                                <a href="#" class="seminar-title">Menyongsong KUHP Nasional: Dampak Terhadap Praktik Advokat</a>
                                <div class="seminar-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>Jumat, 28 November 2025</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>13.30 – 17.00 WIB</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Zoom Meeting</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Narasumber: Prof. Dr. Eddy O.S. Hiariej, SH., MH.</span>
                                    </div>
                                </div>
                                <div class="seminar-footer">
                                    <span class="price">Gratis</span>
                                    <a href="#" class="btn-detail">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seminar 3 -->
                    <div class="col-md-6">
                        <div class="seminar-card-list">
                            <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t39.30808-6/500238097_1132325478923071_1037966569123413338_n.jpg" alt="Pelatihan" class="seminar-img">
                            <div class="seminar-body">
                                <span class="seminar-badge badge-offline">Offline</span>
                                <a href="#" class="seminar-title">Pelatihan & Sertifikasi Auditor Hukum</a>
                                <div class="seminar-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>29 Okt - 2 Nov 2025</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>08.30 – 16.30 WIB</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>PERADI Tower, Jakarta</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Narasumber: Tim Justitia Training Center</span>
                                    </div>
                                </div>
                                <div class="seminar-footer">
                                    <span class="price">Rp 2.500.000</span>
                                    <a href="#" class="btn-detail">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seminar 4 -->
                    <div class="col-md-6">
                        <div class="seminar-card-list">
                            <img src="657170871_18129870982543495_717056310815872240_n.jpg" alt="Seminar" class="seminar-img">
                            <div class="seminar-body">
                                <span class="seminar-badge badge-hybrid">Hybrid</span>
                                <a href="#" class="seminar-title">International Seminar - ICC YAAF & PERADI YLC</a>
                                <div class="seminar-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>Selasa, 19 Agustus 2025</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>08.30 – 13.00 WIB</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>PERADI Tower, Jakarta & Zoom</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Narasumber: International Speakers</span>
                                    </div>
                                </div>
                                <div class="seminar-footer">
                                    <span class="price">Gratis</span>
                                    <a href="#" class="btn-detail">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seminar 5 -->
                    <div class="col-md-6">
                        <div class="seminar-card-list">
                            <img src="519500033_18365601004176437_6401315024319886844_n.jpg" alt="Conference" class="seminar-img">
                            <div class="seminar-body">
                                <span class="seminar-badge badge-offline">Offline</span>
                                <a href="#" class="seminar-title">Belt and Road Initiative & Employment Conference 2025</a>
                                <div class="seminar-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>10-11 Agustus 2025</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>08.00 – 17.30 WIB</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Grand Hyatt, Jakarta</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Narasumber: Pakar Hukum Internasional</span>
                                    </div>
                                </div>
                                <div class="seminar-footer">
                                    <span class="price">Rp 3.500.000</span>
                                    <a href="#" class="btn-detail">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seminar 6 -->
                    <div class="col-md-6">
                        <div class="seminar-card-list">
                            <img src="https://instagram.fcgk6-2.fna.fbcdn.net/v/t51.82787-15/625043082_18143505097464274_5020749067356667205_n.webp" alt="Pelatihan" class="seminar-img">
                            <div class="seminar-body">
                                <span class="seminar-badge badge-online">Online</span>
                                <a href="#" class="seminar-title">Pelatihan & Sertifikasi Mediator DPN PERADI</a>
                                <div class="seminar-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span>08-11 Januari 2025</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-clock"></i>
                                        <span>07.30 – 17.00 WIB</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Zoom Meeting</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-user-tie"></i>
                                        <span>Narasumber: Tim PERPAHI</span>
                                    </div>
                                </div>
                                <div class="seminar-footer">
                                    <span class="price">Rp 1.800.000</span>
                                    <a href="#" class="btn-detail">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    <ul class="pagination pagination-custom justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- ==========================================
                 KOLOM KANAN: SIDEBAR
                 ========================================== -->
            <div class="col-lg-4">

                <!-- Widget: Filter -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-sliders-h"></i> Filter Acara</h5>
                    <form>
                        <div class="filter-group mb-3">
                            <label>Kategori</label>
                            <select class="form-select">
                                <option>Semua Kategori</option>
                                <option>Seminar Nasional</option>
                                <option>Seminar Internasional</option>
                                <option>Pelatihan</option>
                                <option>Sertifikasi</option>
                                <option>Webinar</option>
                            </select>
                        </div>
                        <div class="filter-group mb-3">
                            <label>Mode</label>
                            <select class="form-select">
                                <option>Semua Mode</option>
                                <option>Offline</option>
                                <option>Online</option>
                                <option>Hybrid</option>
                            </select>
                        </div>
                        <div class="filter-group mb-3">
                            <label>Bulan</label>
                            <select class="form-select">
                                <option>Semua Bulan</option>
                                <option>Januari 2026</option>
                                <option>Februari 2026</option>
                                <option>Maret 2026</option>
                                <option>April 2026</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-filter">Terapkan Filter</button>
                    </form>
                </div>

                <!-- Widget: Acara Mendatang -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-clock"></i> Acara Mendatang</h5>
                    <div class="upcoming-item">
                        <div class="date-box">
                            <span class="day">11</span>
                            <span class="month">Apr</span>
                        </div>
                        <div>
                            <a href="#" class="upcoming-title">KUHAP Baru & Peran Advokat</a>
                            <div class="upcoming-location"><i class="fas fa-map-marker-alt me-1"></i> Hybrid - Semarang</div>
                        </div>
                    </div>
                    <div class="upcoming-item">
                        <div class="date-box">
                            <span class="day">28</span>
                            <span class="month">Nov</span>
                        </div>
                        <div>
                            <a href="#" class="upcoming-title">Menyongsong KUHP Nasional</a>
                            <div class="upcoming-location"><i class="fas fa-video me-1"></i> Online Zoom</div>
                        </div>
                    </div>
                    <div class="upcoming-item">
                        <div class="date-box">
                            <span class="day">29</span>
                            <span class="month">Okt</span>
                        </div>
                        <div>
                            <a href="#" class="upcoming-title">Sertifikasi Auditor Hukum</a>
                            <div class="upcoming-location"><i class="fas fa-map-marker-alt me-1"></i> PERADI Tower</div>
                        </div>
                    </div>
                    <div class="upcoming-item">
                        <div class="date-box">
                            <span class="day">19</span>
                            <span class="month">Agu</span>
                        </div>
                        <div>
                            <a href="#" class="upcoming-title">ICC YAAF International Seminar</a>
                            <div class="upcoming-location"><i class="fas fa-map-marker-alt me-1"></i> Hybrid - Jakarta</div>
                        </div>
                    </div>
                </div>

                <!-- Widget: Newsletter -->
                <div class="sidebar-widget" style="background: var(--primary-blue); border-color: var(--primary-blue);">
                    <h5 class="widget-title text-white border-bottom border-gold"><i class="fas fa-bell text-gold"></i> Notifikasi Acara</h5>
                    <p class="text-white-50 small">Dapatkan pemberitahuan tentang seminar dan pelatihan terbaru.</p>
                    <div class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Email Anda" style="border-radius:8px;">
                        <button class="btn btn-warning" style="border-radius:8px; white-space:nowrap; font-weight:600;">Daftar</button>
                    </div>
                </div>

                <!-- Widget: Mitra Kerjasama -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-handshake"></i> Mitra Kerjasama</h5>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Logo_Universitas_Indonesia.svg/1200px-Logo_Universitas_Indonesia.svg.png" alt="UI" style="height:40px; object-fit:contain; opacity:0.7;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Logo_Universitas_Gadjah_Mada.svg/1200px-Logo_Universitas_Gadjah_Mada.svg.png" alt="UGM" style="height:40px; object-fit:contain; opacity:0.7;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Logo_Universitas_Hasanuddin.svg/1200px-Logo_Universitas_Hasanuddin.svg.png" alt="UNHAS" style="height:40px; object-fit:contain; opacity:0.7;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Logo_Universitas_Diponegoro.svg/1200px-Logo_Universitas_Diponegoro.svg.png" alt="UNDIP" style="height:40px; object-fit:contain; opacity:0.7;">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection