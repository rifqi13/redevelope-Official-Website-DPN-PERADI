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
                        <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
                    </ol>
                </nav>
                <h1>Kegiatan PERADI</h1>
                <p class="text-white-50 mb-0">Berbagai kegiatan dan program dari DPN dan Cabang PERADI seluruh Indonesia</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill">
                    <i class="fas fa-calendar-check me-2"></i> 24 Kegiatan
                </span>
            </div>
        </div>
    </div>
</section>



<!-- ============================================
     MAIN CONTENT
     ============================================ -->
<section class="pb-5 pt-4">
    <div class="container">
        <div class="row g-4">

            <!-- ==========================================
                 KOLOM KIRI: DAFTAR KEGIATAN
                 ========================================== -->
            <div class="col-lg-8">

                <!-- Filter -->
                <div class="mb-4">
                    <div class="filter-buttons">
                        <button class="filter-btn active" data-filter="all">Semua</button>
                        <button class="filter-btn" data-filter="dpn">Kegiatan DPN</button>
                        <button class="filter-btn" data-filter="cabang">Kegiatan Cabang</button>
                    </div>
                </div>

                <!-- ==========================================
                     KEGIATAN DPN
                     ========================================== -->
                <div class="section-header-custom" id="kegiatan-dpn">
                    <span class="section-title">Kegiatan DPN</span>
                    <span class="section-badge dpn">DPN</span>
                    <span class="section-count">(12 Kegiatan)</span>
                    <span class="section-line"></span>
                </div>

                <div class="row g-4 kegiatan-dpn">

                    <!-- Kegiatan DPN 1 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="dpn">
                            <img src="https://peradi.or.id/gambar/slider/Pengangkatan%20Advokat%20baru%20di%20PT%20Wilayah%20Palembang%20-%204%20Mei%202026.jpeg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge dpn">Kegiatan DPN</span>
                                <a href="#" class="kegiatan-title">Pengangkatan Advokat Baru di Wilayah PT Palembang</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 4 Mei 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> Pengadilan Tinggi Palembang
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Pengangkatan dan pengambilan sumpah advokat baru di wilayah hukum Pengadilan Tinggi Palembang.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 1.234 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kegiatan DPN 2 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="dpn">
                            <img src="https://peradi.or.id/gambar/slider/Pembukaan%20PKPA%20DPC%20Malang%20&%20Unisma%20Malang%20-%202%20Mei%202026.jpg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge dpn">Kegiatan DPN</span>
                                <a href="#" class="kegiatan-title">Pembukaan PKPA DPC Malang & UNISMA Malang</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 2 Mei 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> UNISMA Malang
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Pembukaan resmi Pendidikan Khusus Profesi Advokat di Malang bekerja sama dengan UNISMA.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 856 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kegiatan DPN 3 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="dpn">
                            <img src="https://peradi.or.id/gambar/slider/Penandatanganan%20MoU%20Peradi%20Sukadana%20dan%20Rutan%20Sukadana%20-%2027%20April%202026.jpeg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge dpn">Kegiatan DPN</span>
                                <a href="#" class="kegiatan-title">Penandatanganan MoU PERADI Sukadana</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 27 April 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> Rutan Sukadana
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Kerjasama PERADI dengan Rutan Sukadana dalam memberikan pendampingan hukum bagi warga binaan.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 432 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kegiatan DPN 4 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="dpn">
                            <img src="https://peradi.or.id/gambar/slider/RDP%20di%20DPR-RI%20Tentang%20UU%20Advokat%20-%2020%20April%202026.jpeg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge dpn">Kegiatan DPN</span>
                                <a href="#" class="kegiatan-title">RDP di DPR-RI Tentang UU Advokat</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 20 April 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> DPR-RI, Jakarta
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Rapat Dengar Pendapat Komisi III DPR-RI dengan PERADI membahas revisi Undang-Undang Advokat.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 2.103 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- ==========================================
                     KEGIATAN CABANG
                     ========================================== -->
                <div class="section-header-custom" id="kegiatan-cabang">
                    <span class="section-title">Kegiatan Cabang</span>
                    <span class="section-badge cabang">Cabang</span>
                    <span class="section-count">(12 Kegiatan)</span>
                    <span class="section-line"></span>
                </div>

                <div class="row g-4 kegiatan-cabang">

                    <!-- Kegiatan Cabang 1 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="cabang">
                            <img src="https://peradi.or.id/gambar/slider/Rapat%20Anggota%20Cabang%20DPC%20Kendal%20-%2017%20April%202026.jpeg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge cabang">Kegiatan Cabang</span>
                                <a href="#" class="kegiatan-title">Rapat Anggota Cabang DPC Kendal</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 17 April 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> Kendal, Jawa Tengah
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Rapat anggota cabang DPC Kendal membahas program kerja dan penguatan organisasi di tingkat cabang.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 287 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kegiatan Cabang 2 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="cabang">
                            <img src="https://peradi.or.id/gambar/slider/SLIDER_12-peradi-tower.jpg.jpeg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge cabang">Kegiatan Cabang</span>
                                <a href="#" class="kegiatan-title">Pelantikan Pengurus DPC Jakarta Selatan</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 10 April 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> PERADI Tower, Jakarta
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Pelantikan pengurus DPC Jakarta Selatan periode 2026-2031 yang dilaksanakan di PERADI Tower.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 567 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kegiatan Cabang 3 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="cabang">
                            <img src="https://img.antaranews.com/cache/1200x800/2025/08/11/1000514986.jpg.webp" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge cabang">Kegiatan Cabang</span>
                                <a href="#" class="kegiatan-title">Seminar Hukum DPC Surabaya</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 5 April 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> Surabaya, Jawa Timur
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Seminar hukum yang diselenggarakan DPC Surabaya dengan tema "Peran Advokat di Era Digital".</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 789 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kegiatan Cabang 4 -->
                    <div class="col-md-6">
                        <div class="kegiatan-card" data-category="cabang">
                            <img src="https://images.hukumonline.com/frontend/lt63af3ba3e0503/lt63af3ebb8964e.jpg" alt="Kegiatan" class="kegiatan-img">
                            <div class="kegiatan-body">
                                <span class="kegiatan-badge cabang">Kegiatan Cabang</span>
                                <a href="#" class="kegiatan-title">Bakti Sosial DPC Medan</a>
                                <div class="kegiatan-info">
                                    <div class="info-item">
                                        <i class="fas fa-calendar-alt"></i> 28 Maret 2026
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i> Medan, Sumatera Utara
                                    </div>
                                </div>
                                <p class="kegiatan-excerpt">Kegiatan bakti sosial DPC Medan memberikan bantuan hukum dan sembako kepada masyarakat kurang mampu.</p>
                                <div class="kegiatan-footer">
                                    <span class="meta"><i class="far fa-eye"></i> 345 views</span>
                                    <a href="#" class="read-more">Detail <i class="fas fa-arrow-right ms-1"></i></a>
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

                <!-- Widget: Cari Kegiatan -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-search"></i> Cari Kegiatan</h5>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" placeholder="Cari kegiatan...">
                        <button class="btn btn-warning" style="border-radius:8px; white-space:nowrap; font-weight:600;">Cari</button>
                    </div>
                </div>

                <!-- Widget: Kategori -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-tag"></i> Kategori</h5>
                    <ul class="list-unstyled">
                        <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-dark" style="font-weight:600;">Semua Kegiatan</a>
                            <span class="badge bg-primary rounded-pill">24</span>
                        </li>
                        <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-dark">Kegiatan DPN</a>
                            <span class="badge" style="background:var(--primary-blue); color:white; border-radius:50px;">12</span>
                        </li>
                        <li class="py-2 d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none text-dark">Kegiatan Cabang</a>
                            <span class="badge" style="background:var(--green-accent); color:white; border-radius:50px;">12</span>
                        </li>
                    </ul>
                </div>

                <!-- Widget: Kegiatan Terbaru -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-clock"></i> Terbaru</h5>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">04</span>
                            <span class="month">Mei</span>
                        </div>
                        <div>
                            <a href="#" class="ri-title">Pengangkatan Advokat PT Palembang</a>
                            <span class="ri-badge dpn">DPN</span>
                        </div>
                    </div>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">02</span>
                            <span class="month">Mei</span>
                        </div>
                        <div>
                            <a href="#" class="ri-title">Pembukaan PKPA DPC Malang</a>
                            <span class="ri-badge dpn">DPN</span>
                        </div>
                    </div>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">27</span>
                            <span class="month">Apr</span>
                        </div>
                        <div>
                            <a href="#" class="ri-title">MoU PERADI Sukadana</a>
                            <span class="ri-badge dpn">DPN</span>
                        </div>
                    </div>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">17</span>
                            <span class="month">Apr</span>
                        </div>
                        <div>
                            <a href="#" class="ri-title">Rapat Anggota DPC Kendal</a>
                            <span class="ri-badge cabang">Cabang</span>
                        </div>
                    </div>
                </div>

                <!-- Widget: Subscribe -->
                <div class="sidebar-widget" style="background: var(--primary-blue); border-color: var(--primary-blue);">
                    <h5 class="widget-title text-white border-bottom border-gold"><i class="fas fa-bell text-gold"></i> Notifikasi</h5>
                    <p class="text-white-50 small">Dapatkan informasi kegiatan terbaru dari PERADI melalui email.</p>
                    <div class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Email Anda" style="border-radius:8px;">
                        <button class="btn btn-warning" style="border-radius:8px; white-space:nowrap; font-weight:600;">Daftar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection