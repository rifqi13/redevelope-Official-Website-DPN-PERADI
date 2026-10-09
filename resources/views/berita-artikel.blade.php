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
                        <li class="breadcrumb-item active" aria-current="page">Berita & Artikel</li>
                    </ol>
                </nav>
                <h1>Kumpulan Berita & Artikel</h1>
                <p class="text-white-50 mb-0">Berbagai berita & artikel hukum seputar PERADI</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill">
                    <i class="fas fa-pen-fancy me-2"></i> 45 Artikel
                </span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     MAIN CONTENT - ARTIKEL LIST
     ============================================ -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- ==========================================
                 KOLOM KIRI: DAFTAR ARTIKEL
                 ========================================== -->
            <div class="col-lg-8">

                <!-- Filter Kategori -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-4">Semua</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Berita Hukum</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Analisis</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Opini</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Kegiatan</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Pengumuman</a>
                </div>

                <!-- Grid Artikel -->
                <div class="row g-4">

                    <!-- Artikel 1 -->
                    <div class="col-md-6">
                        <div class="article-card">
                            <img src="https://images.hukumonline.com/frontend/lt64213618718fa/lt642137a955863.jpg" alt="Artikel" class="article-img">
                            <div class="article-body">
                                <span class="article-category"><i class="fas fa-tag me-1"></i> Analisis Hukum</span>
                                <a href="detail-artikel.html" class="article-title">Dr. Sutrisno Minta KPPU Perketat Pengawasan Dugaan Monopoli Bisnis Digital</a>
                                <p class="article-excerpt">Ketua Umum PERADI menyoroti praktik monopoli di sektor bisnis digital yang merugikan konsumen dan pelaku usaha kecil.</p>
                                <div class="article-meta">
                                    <span><i class="far fa-calendar-alt"></i> 14 Oktober 2025</span>
                                    <span><i class="far fa-eye"></i> 1.234</span>
                                    <a href="detail-artikel.html" class="read-more">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel 2 -->
                    <div class="col-md-6">
                        <div class="article-card">
                            <img src="https://img.antaranews.com/cache/1200x800/2025/08/11/1000514986.jpg.webp" alt="Artikel" class="article-img">
                            <div class="article-body">
                                <span class="article-category"><i class="fas fa-tag me-1"></i> Kegiatan</span>
                                <a href="detail-artikel.html" class="article-title">PERADI - LAWASIA Belt and Road Initiative & Employment Law Conference 2025</a>
                                <p class="article-excerpt">Konferensi internasional yang membahas tentang inisiatif Belt and Road dan hukum ketenagakerjaan di kawasan Asia.</p>
                                <div class="article-meta">
                                    <span><i class="far fa-calendar-alt"></i> 12 Agustus 2025</span>
                                    <span><i class="far fa-eye"></i> 856</span>
                                    <a href="detail-artikel.html" class="read-more">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel 3 -->
                    <div class="col-md-6">
                        <div class="article-card">
                            <img src="https://jogja.polri.go.id/yogyakarta/file/Tanpa-Judul-139.jpeg" alt="Artikel" class="article-img">
                            <div class="article-body">
                                <span class="article-category"><i class="fas fa-tag me-1"></i> Opini</span>
                                <a href="detail-artikel.html" class="article-title">Menggugat Pemerintah untuk Melindungi Masyarakat Korban Jeratan Kartel Pinjol Ilegal</a>
                                <p class="article-excerpt">Advokat PERADI menyoroti maraknya pinjaman online ilegal yang menjerat masyarakat dengan bunga tinggi dan praktik penagihan tidak manusiawi.</p>
                                <div class="article-meta">
                                    <span><i class="far fa-calendar-alt"></i> 10 Agustus 2025</span>
                                    <span><i class="far fa-eye"></i> 2.101</span>
                                    <a href="detail-artikel.html" class="read-more">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel 4 -->
                    <div class="col-md-6">
                        <div class="article-card">
                            <img src="https://innews.co.id/wp-content/uploads/2024/07/IMG_20230529_1853012_copy_470x350.jpg" alt="Artikel" class="article-img">
                            <div class="article-body">
                                <span class="article-category"><i class="fas fa-tag me-1"></i> Berita Hukum</span>
                                <a href="detail-artikel.html" class="article-title">PERADI Minta Polisi Usut Tuntas Kasus Penembakan Advokat di Bone</a>
                                <p class="article-excerpt">DPN PERADI mengecam keras aksi penembakan terhadap advokat di Bone dan meminta aparat kepolisian untuk mengusut tuntas kasus ini.</p>
                                <div class="article-meta">
                                    <span><i class="far fa-calendar-alt"></i> 5 Agustus 2025</span>
                                    <span><i class="far fa-eye"></i> 3.456</span>
                                    <a href="detail-artikel.html" class="read-more">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel 5 -->
                    <div class="col-md-6">
                        <div class="article-card">
                            <img src="https://images.hukumonline.com/frontend/lt63af3ba3e0503/lt63af3ebb8964e.jpg" alt="Artikel" class="article-img">
                            <div class="article-body">
                                <span class="article-category"><i class="fas fa-tag me-1"></i> Analisis Hukum</span>
                                <a href="detail-artikel.html" class="article-title">Perpu Cipta Kerja Kebijakan yang Destruktif atas Supremasi Konstitusi</a>
                                <p class="article-excerpt">Pengamat hukum dari PERADI menilai Perpu Cipta Kerja berpotensi merusak supremasi konstitusi dan hak-hak pekerja.</p>
                                <div class="article-meta">
                                    <span><i class="far fa-calendar-alt"></i> 28 Juli 2025</span>
                                    <span><i class="far fa-eye"></i> 967</span>
                                    <a href="detail-artikel.html" class="read-more">Baca <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel 6 -->
                    <div class="col-md-6">
                        <div class="article-card">
                            <img src="https://suarakarya.co.id/wp-content/uploads/2024/02/IMG-20240205-WA0005-1536x1222.jpg" alt="Artikel" class="article-img">
                            <div class="article-body">
                                <span class="article-category"><i class="fas fa-tag me-1"></i> Pendidikan</span>
                                <a href="detail-artikel.html" class="article-title">PERADI Gandeng UT Buka Pendidikan Khusus Profesi Advokat</a>
                                <p class="article-excerpt">Kerjasama PERADI dengan Universitas Terbuka untuk menyelenggarakan program pendidikan khusus profesi advokat bagi para calon advokat.</p>
                                <div class="article-meta">
                                    <span><i class="far fa-calendar-alt"></i> 20 Juli 2025</span>
                                    <span><i class="far fa-eye"></i> 1.789</span>
                                    <a href="detail-artikel.html" class="read-more">Baca <i class="fas fa-arrow-right ms-1"></i></a>
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
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
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

                <!-- Widget: Pencarian -->
                <div class="sidebar-widget widget-search">
                    <h5 class="widget-title"><i class="fas fa-search"></i> Cari Artikel</h5>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" placeholder="Cari artikel...">
                        <button class="btn btn-search">Cari</button>
                    </div>
                </div>

                <!-- Widget: Kategori -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-folder"></i> Kategori</h5>
                    <ul class="category-list">
                        <li><a href="#">Berita Hukum <span class="count">12</span></a></li>
                        <li><a href="#">Analisis Hukum <span class="count">8</span></a></li>
                        <li><a href="#">Opini <span class="count">10</span></a></li>
                        <li><a href="#">Kegiatan <span class="count">9</span></a></li>
                        <li><a href="#">Pengumuman <span class="count">6</span></a></li>
                    </ul>
                </div>

                <!-- Widget: Artikel Terbaru -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-clock"></i> Terbaru</h5>
                    <div class="recent-post">
                        <img src="https://images.hukumonline.com/frontend/lt64213618718fa/lt642137a955863.jpg" alt="Thumb" class="rp-img">
                        <div>
                            <a href="detail-artikel.html" class="rp-title">Dr. Sutrisno Minta KPPU Perketat Pengawasan Bisnis Digital</a>
                            <div class="rp-date"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025</div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <img src="https://img.antaranews.com/cache/1200x800/2025/08/11/1000514986.jpg.webp" alt="Thumb" class="rp-img">
                        <div>
                            <a href="detail-artikel.html" class="rp-title">PERADI - LAWASIA Conference 2025 di Jakarta</a>
                            <div class="rp-date"><i class="far fa-calendar-alt me-1"></i> 12 Agustus 2025</div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <img src="https://jogja.polri.go.id/yogyakarta/file/Tanpa-Judul-139.jpeg" alt="Thumb" class="rp-img">
                        <div>
                            <a href="detail-artikel.html" class="rp-title">Menggugat Pemerintah Atas Kasus Pinjol Ilegal</a>
                            <div class="rp-date"><i class="far fa-calendar-alt me-1"></i> 10 Agustus 2025</div>
                        </div>
                    </div>
                </div>

                <!-- Widget: Tag Cloud -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-tags"></i> Tag Populer</h5>
                    <div class="tag-cloud">
                        <a href="#" class="tag">Hukum</a>
                        <a href="#" class="tag">Advokat</a>
                        <a href="#" class="tag">Konstitusi</a>
                        <a href="#" class="tag">Hak Asasi</a>
                        <a href="#" class="tag">Bisnis</a>
                        <a href="#" class="tag">Digital</a>
                        <a href="#" class="tag">Monopoli</a>
                        <a href="#" class="tag">Ketenagakerjaan</a>
                        <a href="#" class="tag">Pinjol</a>
                        <a href="#" class="tag">Perpu</a>
                    </div>
                </div>

                <!-- Widget: Newsletter -->
                <div class="sidebar-widget" style="background: var(--primary-blue); border-color: var(--primary-blue);">
                    <h5 class="widget-title text-white border-bottom border-gold"><i class="fas fa-envelope text-gold"></i> Newsletter</h5>
                    <p class="text-white-50 small">Dapatkan informasi terbaru dari PERADI melalui email.</p>
                    <div class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Email Anda" style="border-radius:8px;">
                        <button class="btn btn-warning" style="border-radius:8px; white-space:nowrap;">Subscribe</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection