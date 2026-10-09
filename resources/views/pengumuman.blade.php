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
                        <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                    </ol>
                </nav>
                <h1>PENGUMUMAN</h1>
                <p class="text-white-50 mb-0">Informasi resmi dan pengumuman penting dari DPN PERADI</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill" style="background:var(--accent-gold);">
                    <i class="fas fa-bullhorn me-2"></i> 12 Pengumuman
                </span>
            </div>
        </div>
    </div>
</section>


<section class="py-4">
    <div class="container">
        <div class="row g-4">

            <!-- ==========================================
                 KOLOM KIRI: DAFTAR PENGUMUMAN
                 ========================================== -->
            <div class="col-lg-12">

                <!-- Filter & Search (sama seperti artikel) -->
                <div class="filter-section">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                    <button class="filter-btn" data-filter="penting">Penting</button>
                    <button class="filter-btn" data-filter="pengangkatan">Pengangkatan</button>
                    <button class="filter-btn" data-filter="ujian">Ujian</button>
                    <button class="filter-btn" data-filter="informasi">Informasi</button>
                    <button class="filter-btn" data-filter="kegiatan">Kegiatan</button>

                    <div class="search-box">
                        <input type="text" id="searchAnnouncement" placeholder="Cari pengumuman..." onkeyup="searchAnnouncement()">
                        <button class="btn-search" onclick="searchAnnouncement()"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <!-- Grid Pengumuman (sama seperti grid artikel) -->
                <div class="announcement-grid" id="announcementGrid">

                    <!-- Pengumuman 1 -->
                    <div class="announcement-card" data-category="penting" data-date="2026-06-15">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #dc3545, #a71d2a);">
                            <i class="fas fa-exclamation-triangle img-icon"></i>
                            <span class="img-badge badge-important">Penting</span>
                            <span class="status-badge active">Aktif</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">PENGUMUMAN UJIAN PROFESI ADVOKAT TAHUN 2026</a>
                            <p class="card-excerpt">Pendaftaran ujian profesi advokat tahun 2026 telah dibuka. Informasi lengkap mengenai jadwal, persyaratan, dan tata cara pendaftaran dapat diakses melalui portal resmi PERADI.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 15 Jun 2026</span>
                                    <span><i class="far fa-eye"></i> 1.234</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pengumuman 2 -->
                    <div class="announcement-card" data-category="pengangkatan" data-date="2026-06-10">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #198754, #0d6e3e);">
                            <i class="fas fa-gavel img-icon"></i>
                            <span class="img-badge badge-success">Pengangkatan</span>
                            <span class="status-badge active">Aktif</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">PENGANGKATAN ADVOKAT DI WILAYAH PT PALEMBANG</a>
                            <p class="card-excerpt">Pengangkatan dan pengambilan sumpah advokat baru di wilayah hukum Pengadilan Tinggi Palembang akan dilaksanakan pada tanggal 4 Mei 2026.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 10 Jun 2026</span>
                                    <span><i class="far fa-eye"></i> 856</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pengumuman 3 -->
                    <div class="announcement-card" data-category="ujian" data-date="2026-06-08">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #0d6efd, #0a58ca);">
                            <i class="fas fa-pen-fancy img-icon"></i>
                            <span class="img-badge badge-info">Ujian</span>
                            <span class="status-badge active">Aktif</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">PENGUMUMAN PENGANGKATAN ADVOKAT DI WILAYAH PT BANDUNG</a>
                            <p class="card-excerpt">Pengangkatan advokat di wilayah hukum Pengadilan Tinggi Bandung akan dilaksanakan pada bulan Mei 2026. Pendaftaran dibuka hingga 30 April 2026.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 8 Jun 2026</span>
                                    <span><i class="far fa-eye"></i> 654</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pengumuman 4 -->
                    <div class="announcement-card" data-category="informasi" data-date="2026-06-05">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #fd7e14, #d46a0f);">
                            <i class="fas fa-info-circle img-icon"></i>
                            <span class="img-badge badge-warning">Informasi</span>
                            <span class="status-badge upcoming">Akan Datang</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">PENGUMUMAN PENGANGKATAN ADVOKAT DI WILAYAH PT JAKARTA</a>
                            <p class="card-excerpt">Informasi mengenai jadwal pengangkatan advokat di wilayah hukum Pengadilan Tinggi Jakarta akan segera diumumkan. Pantau terus informasi terbaru.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 5 Jun 2026</span>
                                    <span><i class="far fa-eye"></i> 432</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pengumuman 5 -->
                    <div class="announcement-card" data-category="kegiatan" data-date="2026-06-01">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #198754, #0d6e3e);">
                            <i class="fas fa-calendar-check img-icon"></i>
                            <span class="img-badge badge-success">Kegiatan</span>
                            <span class="status-badge expired">Berakhir</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">PEMBUKAAN PKPA DPC MALANG & UNISMA MALANG</a>
                            <p class="card-excerpt">Pendidikan Khusus Profesi Advokat (PKPA) telah dibuka di Malang bekerja sama dengan UNISMA Malang. Pendaftaran telah ditutup pada 30 Mei 2026.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 1 Jun 2026</span>
                                    <span><i class="far fa-eye"></i> 321</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pengumuman 6 -->
                    <div class="announcement-card" data-category="penting" data-date="2026-05-28">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #dc3545, #a71d2a);">
                            <i class="fas fa-handshake img-icon"></i>
                            <span class="img-badge badge-important">Penting</span>
                            <span class="status-badge active">Aktif</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">PENANDATANGANAN MOU PERADI SUKADANA DAN RUTAN SUKADANA</a>
                            <p class="card-excerpt">Kerjasama antara PERADI Sukadana dan Rutan Sukadana dalam memberikan pendampingan hukum bagi warga binaan telah resmi ditandatangani.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 28 Mei 2026</span>
                                    <span><i class="far fa-eye"></i> 287</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pengumuman 7 -->
                    <div class="announcement-card" data-category="pengangkatan" data-date="2026-05-20">
                        <div class="card-img-top" style="background: linear-gradient(135deg, #0d6efd, #0a58ca);">
                            <i class="fas fa-users img-icon"></i>
                            <span class="img-badge badge-info">Pengangkatan</span>
                            <span class="status-badge expired">Berakhir</span>
                        </div>
                        <div class="card-body">
                            <a href="detail-pengumuman.html" class="card-title">RAPAT ANGGOTA CABANG DPC KENDAL</a>
                            <p class="card-excerpt">Rapat anggota cabang DPC Kendal telah dilaksanakan untuk membahas program kerja dan penguatan organisasi di tingkat cabang.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span><i class="far fa-calendar-alt"></i> 20 Mei 2026</span>
                                    <span><i class="far fa-eye"></i> 198</span>
                                </div>
                                <a href="detail-pengumuman.html" class="btn-read">Baca <i class="fas fa-arrow-right ms-1"></i></a>
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

           
            
        </div>
    </div>
</section>


@endsection