@extends('layouts.app')

@section('title', 'Beranda - PERADI')

@section('content')


<div id="mainSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
    
    <div class="static-social-icons">
    <a href="{{ url('/pengumuman/pengumuman-data-ulang-anggota-perhimpunan-_-advokat-indonesia-tahun-2024') }}">
        <i class="bi bi-database-fill-add"></i>
        <span>PENDATAAN ANGGOTA</span>
    </a>
    <a href="#">
        <i class="bi bi-mortarboard-fill"></i>
        <span>PENDIDIKAN BERKELANJUTAN</span>
    </a>
    <a href="{{ route('profil.cabang') }}">
        <i class="bi bi-globe-central-south-asia"></i>
        <span>INFO CABANG</span>
    </a>
    <a href="#">
        <i class="bi bi-clipboard2-plus-fill"></i>
        <span>PENGADUAN DEWAN KEHORMATAN</span>
    </a>
    <a href="#">
        <i class="bi bi-incognito"></i>
        <span>PENGADUAN KOMWAS</span>
    </a>
    <a href="#">
        <i class="bi bi-shield-shaded"></i>
        <span>PUSAT BANTUAN HUKUM</span>
    </a>
    <a href="#">
        <i class="bi bi-briefcase"></i>
        <span>YOUNG LAWYERS</span>
    </a>
    <a href="berita.html">
        <i class="bi bi-newspaper"></i>
        <span>BERITA</span>
    </a>
    <a href="artikel.html">
        <i class="bi bi-paperclip"></i>
        <span>ARTIKEL</span>
    </a>
    <a href="{{ route('kegiatan.index') }}">
        <i class="bi bi-bank"></i>
        <span>KEGIATAN PERADI</span>
    </a>
</div>

    <div class="carousel-inner">
        
        
                @foreach($sliders as $key => $slide)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="6000">
                <img src="{{ asset('images/slider/' . $slide->gambar) }}" alt="{{ $slide->judul }}">
                <div class="carousel-caption">
                    <h2>{{ $slide->keterangan }}</h2>
                    <p>8 Juni 2026</p>
                </div>
            </div>
        @endforeach

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>



<section class="grey-section">
        <div class="container">
            <div class="section-header">
                <div class="section-title">PENGUMUMAN</div>
                <div class="slider-controls">
                    <button class="slider-btn" onclick="scrollContainer('news-scroll3', -300)"><i class="fas fa-chevron-left"></i></button>
                    <button class="slider-btn" onclick="scrollContainer('news-scroll3', 300)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="horizontal-scroll" id="news-scroll3">
                
            @foreach($beritaTerbaru as $berita)    
                <div class="card berita shadow-sm border-0">
                    <div class="card-body">
                        <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                        <h4 class="card-title">{{ $berita->nama }}</h4>
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> {{ date('d M Y', strtotime($berita->create_date)) }}  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <a href="{{ url('/pengumuman/' . $berita->alias) }}" class="btn btn-sm btn-primary w-100 mt-3 rounded-pill shadow-sm fw-bold">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach    
                
                
            </div>
            <div style="margin-top: 20px;">
                <a href="{{ route('pengumuman.index') }}" class="btn btn-outline-primary btn-more">PENGUMUMAN SELENGKAPNYA <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

		
		
<section class="grey-section">
        <div class="container">
            <div class="section-header">
                <div class="section-title">KEGIATAN</div>
                <div class="slider-controls">
                    <button class="slider-btn" onclick="scrollContainer('keg-scroll', -300)"><i class="fas fa-chevron-left"></i></button>
                    <button class="slider-btn" onclick="scrollContainer('keg-scroll', 300)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="horizontal-scroll" id="keg-scroll">
                
                <div class="card berita shadow-sm border-0">
                    <img src="https://trendingindo.com/wp-content/uploads/2025/12/IMG-20251213-WA0037.jpg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Kumpulan Berita Perayaan Natal PERADI 2025 & Penggalangan Donasi Bencana Sumatera (12 Desember 2025 | NT Tower, Jakarta)</h4>
                        <a href="#" class="btn-sm btn btn-outline-info btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>

                <div class="card berita shadow-sm border-0">
                    <img src="https://images.hukumonline.com/frontend/lt64213618718fa/lt642137a955863.jpg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Dr. Sutrisno Minta KPPU Perketat Pengawasan Dugaan Monopoli Bisnis Digital</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>

                <div class="card berita shadow-sm border-0">
                    <img src="https://jogja.polri.go.id/yogyakarta/file/Tanpa-Judul-139.jpeg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Menggugat Pemerintah untuk Melindungi Masyarakat Korban Jeratan Kartel Pinjol Ilegal</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>


                <div class="card berita shadow-sm border-0">
                    <img src="https://img.antaranews.com/cache/1200x800/2025/08/11/1000514986.jpg.webp" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Kumpulan Berita PERADI - LAWASIA Belt and Road Initiative & Employment Law Conference 2025 (10-11 Agustus 2025 | Grand Hyatt Jakarta)</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://innews.co.id/wp-content/uploads/2024/07/IMG_20230529_1853012_copy_470x350.jpg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">PERADI Minta Polisi Usut Tuntas Kasus Penembakan Advokat di Bone</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>
				<div class="card berita shadow-sm border-0">
                    <img src="https://images.hukumonline.com/frontend/lt63af3ba3e0503/lt63af3ebb8964e.jpg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Perpu Cipta Kerja Kebijakan yang Destruktif atas Supremasi Konstitusi</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://suarakarya.co.id/wp-content/uploads/2024/02/IMG-20240205-WA0005-1536x1222.jpg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Kumpulan Pemberitaan PERADI Gandeng UT Buka Pendidikan Khusus Profesi Advokat</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://images.hukumonline.com/frontend/lt57235d55c4cf8/lt57235e1a4ac57.jpg" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">His name is also effort (Namanya juga usaha)</h4>
                        <a href="#" class="btn-sm btn btn-outline-primary btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2016/07/21/c4d5ab87-2d98-4c39-9591-16a25458f307_169.jpg?w=700" alt="News">
                    <span class="badge bg-success text-light position-absolute top-0 end-0 m-2 shadow-sm">Berita</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">PTTUN Jakarta Menangkan Peradi Kepengurusan Otto Hasibuan!</h4>
                        <a href="#" class="btn-sm btn btn-outline-info btn-more w-100 mt-3 rounded-pill shadow-sm fw-bold">Lihat Kegiatan</a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <a href="{{ route('kegiatan.index') }}" class="btn btn-outline-primary btn-more">KEGIATAN SELENGKAPNYA <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

<section class="grey-section">
        <div class="container">
            <div class="section-header">
                <div class="section-title">BERITA & ARTIKEL</div>
                <div class="slider-controls">
                    <button class="slider-btn" onclick="scrollContainer('art-scroll', -300)"><i class="fas fa-chevron-left"></i></button>
                    <button class="slider-btn" onclick="scrollContainer('art-scroll', 300)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="horizontal-scroll" id="art-scroll">
                
                <div class="card berita shadow-sm border-0">
                    <img src="https://trendingindo.com/wp-content/uploads/2025/12/IMG-20251213-WA0037.jpg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Kumpulan Berita Perayaan Natal PERADI 2025 & Penggalangan Donasi Bencana Sumatera (12 Desember 2025 | NT Tower, Jakarta)</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>

                <div class="card berita shadow-sm border-0">
                    <img src="https://images.hukumonline.com/frontend/lt64213618718fa/lt642137a955863.jpg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Dr. Sutrisno Minta KPPU Perketat Pengawasan Dugaan Monopoli Bisnis Digital</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>

                <div class="card berita shadow-sm border-0">
                    <img src="https://jogja.polri.go.id/yogyakarta/file/Tanpa-Judul-139.jpeg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Menggugat Pemerintah untuk Melindungi Masyarakat Korban Jeratan Kartel Pinjol Ilegal</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>


                <div class="card berita shadow-sm border-0">
                    <img src="https://img.antaranews.com/cache/1200x800/2025/08/11/1000514986.jpg.webp" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Kumpulan Berita PERADI - LAWASIA Belt and Road Initiative & Employment Law Conference 2025 (10-11 Agustus 2025 | Grand Hyatt Jakarta)</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://innews.co.id/wp-content/uploads/2024/07/IMG_20230529_1853012_copy_470x350.jpg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">PERADI Minta Polisi Usut Tuntas Kasus Penembakan Advokat di Bone</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>
				<div class="card berita shadow-sm border-0">
                    <img src="https://images.hukumonline.com/frontend/lt63af3ba3e0503/lt63af3ebb8964e.jpg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Perpu Cipta Kerja Kebijakan yang Destruktif atas Supremasi Konstitusi</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://suarakarya.co.id/wp-content/uploads/2024/02/IMG-20240205-WA0005-1536x1222.jpg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">Kumpulan Pemberitaan PERADI Gandeng UT Buka Pendidikan Khusus Profesi Advokat</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://images.hukumonline.com/frontend/lt57235d55c4cf8/lt57235e1a4ac57.jpg" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">His name is also effort (Namanya juga usaha)</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>
                <div class="card berita shadow-sm border-0">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2016/07/21/c4d5ab87-2d98-4c39-9591-16a25458f307_169.jpg?w=700" alt="News">
                    <span class="badge bg-danger text-light position-absolute top-0 end-0 m-2 shadow-sm">Artikel</span>
                    <div class="card-body">
                        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> 14 Oktober 2025  |  <i class="fa fa-eye me-1"></i> 200 Dilihat</small>
                        <h4 class="card-title">PTTUN Jakarta Menangkan Peradi Kepengurusan Otto Hasibuan!</h4>
                        <a href="#" class="card-link">Baca Selengkapnya ></a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <a href="{{ route('berita-artikel.index') }}" class="btn btn-outline-primary btn-more">ARTIKEL SELENGKAPNYA <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>


        <section class="section-padding" style="padding: 40px 0;">
        <div class="container">
            <div class="section-header">
                <div class="section-title">SEMINAR & PELATIHAN</div>
                <div class="slider-controls">
                    <button class="slider-btn" onclick="scrollContainer('seminar-scroll', -250)"><i class="fas fa-chevron-left"></i></button>
                    <button class="slider-btn" onclick="scrollContainer('seminar-scroll', 250)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="horizontal-scroll" id="seminar-scroll">
                
                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="659092985_18153954010455610_3958484355976891626_n.webp" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 shadow-sm">Seminar Nasional</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Peranan Advokat dalam Penegakan Hukum dan Keadilan Berdasarkan KUHAP Baru</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Sabtu, 11 April 2026</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">14.30 – 17.30 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Hybrid Zoom - Auditorium UNISSULA, Semarang</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>


                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="menyongsong-uu-pidana-nasional.jpg" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 shadow-sm">Diskusi Publik & Sosialisasi</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">“Menyongsong Berlakunya Kitab Undang-Undang Hukum Pidana Nasional: Penerapan dan Dampaknya Terhadap Praktik Advokat”</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Jumat, 28 November 2025</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">13.30 – 17.00 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Hybrid Zoom - PERADI Tower, Jakarta (Lantai 3)</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t39.30808-6/500238097_1132325478923071_1037966569123413338_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=13d280&_nc_ohc=jStroXzQaVYQ7kNvwF6izqU&_nc_oc=AdolKxjx7ZEJ6wNE5nBwxhZzuVMpI5x0TmjiRlBK0pQKyRuHTjYL3lC7Ps1niKBL0Dk&_nc_zt=23&_nc_ht=scontent.fcgk6-2.fna&_nc_gid=HpIc7RC7T-i96psBpePaAw&_nc_ss=7b2a8&oh=00_Af4CjPsh4TezjGocV1cp9Ll809KD59jH33UxR2yKLVUObA&oe=6A077E4D" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-primary text-light position-absolute top-0 end-0 m-2 shadow-sm">Pelatihan & Sertifikasi</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Pelatihan dan Sertifikasi Auditor Hukum Kerjasama DPN PERADI dengan Justitia Training Center</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">29 Okt - 2 Nov 2025</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">08.30 s.d. 16.30 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Online Zoom</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="657170871_18129870982543495_717056310815872240_n.jpg" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-info text-dark position-absolute top-0 end-0 m-2 shadow-sm">Seminar Internasional</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">International Seminar, ICC YAAF & PERADI YLC  - Could Arbitration Be the Answer to Your Next Dispute?</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Selasa, 19 Agustus 2025</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">08.30 - 13.00 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Hybrid Zoom - PERADI Tower, Jakarta (Lantai 3)</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="519500033_18365601004176437_6401315024319886844_n.jpg" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-info text-dark position-absolute top-0 end-0 m-2 shadow-sm">Conference</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Belt and Road Initiative & Employment Conference 2025</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">10-11 Agustus 2025</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">08.00 – 17.30 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Grand Hyatt, Jakarta</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="https://instagram.fcgk6-2.fna.fbcdn.net/v/t51.82787-15/625043082_18143505097464274_5020749067356667205_n.webp?_nc_cat=110&ig_cache_key=MzU0MTYxMjUzMjg2MTU0Mzg5OA%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjE0NDB4MTQ0MC5zZHIuQzMifQ%3D%3D&_nc_ohc=y83lbMM-2mEQ7kNvwEC4uUc&_nc_oc=AdpvE86KZjRiWMQE5Oi6rZyHxRb5Lyo1YpH8rZgBk4L8Ca2xJWw5Q9PXwCeR-7QGwR8&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=instagram.fcgk6-2.fna&_nc_gid=0G8cv6WVBvB-FsOgoHueew&_nc_ss=7a22e&oh=00_Af1lqmOQdtkAonYk_3xdS04J1D2fzZYqQElexJIA7ocwjw&oe=69F62D2C" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-primary text-light position-absolute top-0 end-0 m-2 shadow-sm">Pelatihan & Sertifikasi</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Pelatihan & Sertifikasi Mediator DPN PERADI Bekerjasama dengan PERPAHI</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">08-11 Januari 2025</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">07.30 – 17.00 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Online Zoom</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t39.30808-6/485777519_2945625165615081_6799196363307956192_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=7b2446&_nc_ohc=7FAsy2AA7wkQ7kNvwEbMwG7&_nc_oc=AdoUyCErWyLkFxGH-xJXvd1bwKjvut2hHe3zBItwXGI34NXlCvg0Vw3q_N07V8ZrOQs&_nc_zt=23&_nc_ht=scontent.fcgk6-2.fna&_nc_gid=-HHDK88TCEVlcBxmPT24eg&_nc_ss=7b2a8&oh=00_Af4vHTo7jCddMAyTuJN7M7VzJ2_f9rHKHnfHci7qa-BVZA&oe=6A0876C3" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-info text-dark position-absolute top-0 end-0 m-2 shadow-sm">Seminar Internasional</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Cross-Border Debt Restructuring and Insolvency: Indonesia and Malaysia's Perspectives</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Jumat, 2 Februari 2023</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">09:30 – 12.00 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Seknas PERADI - Grand Slipi Tower Lt. 11</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="https://instagram.fcgk6-3.fna.fbcdn.net/v/t51.82787-15/623879305_18071777366138200_1166224105920911124_n.webp?_nc_cat=100&ig_cache_key=MzAxODEzNzkyNzY5MjMzMjY3MQ%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjEwMjR4MTI4MC5zZHIuQzMifQ%3D%3D&_nc_ohc=4Svxh7O4vDEQ7kNvwForm-L&_nc_oc=AdotcjvzvbcnxtYSuPiUTT9EDAgBAKZncL045UYsY4O2tJ1-3pPkbYFjkNDCO2DTES4&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=instagram.fcgk6-3.fna&_nc_gid=eVK87JWbEneUayhepbemIA&_nc_ss=7a22e&oh=00_Af3IhLEB3i1qtEuE6Zf14SlsR6B94l1AA2a0kTAQU_jWAA&oe=69F6006D" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 shadow-sm">Seminar Nasional</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Proteksi Diri dari Predator Seksual - dalam Rangka Sosialisasi UU No. 12 Tahun 2022</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Sabtu, 11 April 2026</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">13.00 WIB sd selesai</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Hybrid Zoom - Graha William Soerjajaya, UKI, Jakarta</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t39.30808-6/484941348_2940915029419428_3503089244799224310_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=7b2446&_nc_ohc=j6CayaLLtkUQ7kNvwHgq_YQ&_nc_oc=AdovrZmeLz_cUtcU6yRPVyo3aTdyWHy4T03PjJacGiw1uRiECz-OEtxJyPZlUCdhujE&_nc_zt=23&_nc_ht=scontent.fcgk6-2.fna&_nc_gid=WHsMRrGmf5aCj1iIaWpF5g&_nc_ss=7b2a8&oh=00_Af7RkBXBbuIG2pAvd2grUCG4jr8NgyzKesJ3DvEGhvx6bQ&oe=6A087F94" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 shadow-sm">Seminar Nasional</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">Darurat Peradaban Hukum - Sejauh Mana Kewenangan Presiden Terhadap Lembaga Yudikatif</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Sabtu, 19 Oktober 2022</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">09.00 – 13.00 WIB</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Hybrid Zoom - Pendopo UNKRIS, Semarang</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>

                <div class="card seminar-card shadow-sm border-0">
                    <div class="position-relative img-portrait-wrapper">
                        <img src="https://instagram.fcgk6-2.fna.fbcdn.net/v/t51.82787-15/641217321_18577918252022227_8382675232605944770_n.webp?_nc_cat=101&ig_cache_key=MjkxMDEzMTEzODQwMTgzNDkxNg%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjk1NHgxMTkyLnNkci5DMyJ9&_nc_ohc=uOxhRT3UD_AQ7kNvwHkYdNf&_nc_oc=AdpS5dV49yaJd5-bLxBkKivE_DTarODSWF5DhlHQRNrhc_OYtQdW0KthPt8VnpZWM6o&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=instagram.fcgk6-2.fna&_nc_gid=CcX2hvGPB2tpMa9IrDJbQA&_nc_ss=7a22e&oh=00_Af36vhE-g0fSXbGE17qfoKVM8wNQj2eLna2QwhYjx6R92w&oe=69F633BB" class="card-img-top" alt="Flyer Portrait">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 shadow-sm">Webinar</span>
                    </div>
                    <div class="card-body p-3">
                        <h6 class="fw-bold mb-3 text-dark seminar-title">KEKAYAAN INTELEKTUAL - Perekaman Merek dan Hak Cipta pada Bea Cukai dalam Mencegah Peredaran Barang Palsu di Indonesia Beserta Penyelesaian Sengketanya</h6>
                        
                        <div class="info-list mb-3">
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-calendar-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Kamis, 25 Agustus 2026</span>
                            </div>
                            <div class="d-flex align-items-start mb-2 text-muted">
                                <i class="far fa-clock mt-1 me-2 text-primary"></i>
                                <span class="small">13.00 WIB sd. Selesai</span>
                            </div>
                            <div class="d-flex align-items-start text-muted">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-primary"></i>
                                <span class="small">Online Zoom</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between text-muted mb-3 pt-2" style="font-size: 0.7rem; border-top: 1px dashed #ddd;">
                            <span><i class="far fa-user me-1"></i> Admin</span>
                            <span><i class="far fa-eye me-1"></i> 1.2k views</span>
                        </div>

                        <a href="#" class="btn btn-sm btn-warning w-100 rounded-pill shadow-sm fw-bold">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <a href="{{ route('seminar-pelatihan.index') }}" class="btn btn-outline-primary btn-more">SEMINAR & PELATIHAN SELENGKAPNYA <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <section style="padding: 40px 0;">
        <div class="container">
            <div class="section-header">
                <div class="section-title">GALLERY VIDEO</div>
                
            </div>
            <div class="horizontal-scroll">  

            @foreach($video as $v)    
                <a href="{{ url('/video/' . $v->alias) }}" class="video-card-link text-decoration-none" alt="{{ $v->title }}">
                    <div class="card video-card" style="background-image: url('{{ asset($v->thumb) }}');">
                        <div class="video-overlay"></div>
                        
                        <div class="video-content">
                            <i class="fas fa-play-circle play-icon"></i>
                        </div>
                    </div>
                </a>
            @endforeach    

            </div>
        </div>
    </section>


@endsection