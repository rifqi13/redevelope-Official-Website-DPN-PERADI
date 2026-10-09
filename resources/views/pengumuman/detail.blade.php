@extends('layouts.app')

@section('title', "Pengumuman " . $berita->nama . " - PERADI")

@section('meta_description', Str::limit(strip_tags($berita->lengkap), 150))

@section('content')




<style>
    ol.custom-roman {
        list-style: none;
        counter-reset: roman-counter;
        padding-left: 0;
    }
    ol.custom-roman li {
        counter-increment: roman-counter;
        padding-left: 30px;
        position: relative;
        margin-bottom: 10px;
    }
    ol.custom-roman li::before {
        content: "(" counter(roman-counter, lower-roman) ")";
        position: absolute;
        left: 0;
        font-weight: 600;
        
    }
</style>
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
                        <li class="breadcrumb-item"><a href="pengumuman.html">Pengumuman</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pengumuman</li>
                    </ol>
                </nav>
                <h1>Detail Pengumuman</h1>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                
            </div>
        </div>
    </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="row g-4">

            <!-- ==========================================
                 KOLOM KIRI: DETAIL PENGUMUMAN
                 ========================================== -->
            <div class="col-lg-8">

                <div class="detail-container">

                    <!-- Header -->
                    <div class="announcement-header">
                        
                        <h1 style="line-height:1;font-size:1.8em" class="text-center">{{ $berita->nama }}</h1>
                        
                        <div class="meta-info floatcenter">
                            <span><i class="far fa-calendar-alt"></i> {{ date('d M Y', strtotime($berita->create_date)) }}</span>
                            <span><i class="far fa-clock"></i> {{ date('H:i', strtotime($berita->create_date)) }} WIB</span>
                            <span><i class="far fa-user"></i> Admin PERADI</span>
                            <span><i class="far fa-eye"></i> {{ number_format($berita->jml_view, 0, ',', '.') }} dilihat</span>
                            <span><i class="far fa-edit"></i> Diperbarui: {{ date('d M Y', strtotime($berita->update_date)) }}</span>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="announcement-body" style="line-height: 1.8; text-align: justify;text-justify: inter-word;">

                        {!! $berita->lengkap !!}

                    </div>

                    <!-- Footer -->
                    <div class="announcement-footer">
                        <div class="lampiran-dokumen" style="background: #f9f9f9; padding: 20px; border-radius: 5px;">
                            <!-- ==========================================
                                FILE DOWNLOAD
                                ========================================== -->
                            <h4>Unduh Dokumen Terkait</h4>
                            <p>Dokumen-dokumen pendukung terkait pengumuman ini dapat diunduh melalui tautan di bawah ini:</p>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover download-table">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">No</th>
                                            <th style="width:50%;">Nama Dokumen</th>
                                            <th style="width:25%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($berita->files->isEmpty())
                                            <p style="color: #888; font-style: italic;">Tidak ada file lampiran untuk berita ini.</p>
                                        @else
                                        @foreach($berita->files as $file)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <i class="fas fa-file-pdf text-danger me-2"></i>
                                                {{ $file->nama }}
                                            </td>
                                            <td>
                                                <a href="{{ asset('storage/berita/' . $file->beritafile) }}" class="btn btn-sm btn-primary" style="background:var(--primary-blue); border:none;">
                                                    <i class="fas fa-download me-1"></i> Unduh
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            
                            
                        </div>
                    </div>

                </div>

                <!-- ==========================================
                     RELATED ANNOUNCEMENTS
                     ========================================== -->
                <div class="related-announcements">
                    <h3 class="section-title"><i class="fas fa-bullhorn"></i> Pengumuman Lainnya</h3>
                    <div class="row g-3">

                        <div class="col-md-4">
                            <div class="related-card">
                                <div class="rel-body">
                                    <span class="rel-badge" style="background:#198754; color:white;">Pengangkatan</span>
                                    <a href="detail-pengumuman.html" class="rel-title">Pengangkatan Advokat di Wilayah PT Palembang</a>
                                    <div class="rel-date"><i class="far fa-calendar-alt"></i> 10 Juni 2026</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="related-card">
                                <div class="rel-body">
                                    <span class="rel-badge" style="background:#0d6efd; color:white;">Ujian</span>
                                    <a href="detail-pengumuman.html" class="rel-title">Pengangkatan Advokat di Wilayah PT Bandung</a>
                                    <div class="rel-date"><i class="far fa-calendar-alt"></i> 8 Juni 2026</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="related-card">
                                <div class="rel-body">
                                    <span class="rel-badge" style="background:#fd7e14; color:white;">Informasi</span>
                                    <a href="detail-pengumuman.html" class="rel-title">Pengangkatan Advokat di Wilayah PT Jakarta</a>
                                    <div class="rel-date"><i class="far fa-calendar-alt"></i> 5 Juni 2026</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- ==========================================
                 KOLOM KANAN: SIDEBAR
                 ========================================== -->
            <div class="col-lg-4">

                <!-- Widget: Info Cepat -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-info-circle"></i> Info Cepat</h5>
                    <div class="quick-info-item">
                        <span class="label"><i class="far fa-calendar-alt"></i> Dibuka</span>
                        <span class="value">15 Juni 2026</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label"><i class="far fa-calendar-alt"></i> Ditutup</span>
                        <span class="value">15 Juli 2026</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label"><i class="fas fa-clock"></i> Waktu</span>
                        <span class="value">14:30 WIB</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label"><i class="fas fa-map-marker-alt"></i> Lokasi</span>
                        <span class="value">6 Kota</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label"><i class="fas fa-ticket-alt"></i> Biaya</span>
                        <span class="value" style="color:var(--accent-gold);">Rp 2.500.000</span>
                    </div>
                    <div class="quick-info-item" style="border-bottom:none;">
                        <span class="label"><i class="fas fa-user"></i> Status</span>
                        <span class="value" style="color:#198754;">Aktif</span>
                    </div>
                </div>

                <!-- Widget: Dokumen -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-file-pdf"></i> Dokumen</h5>
                    <div class="d-flex flex-column gap-2">
                        <a href="#" class="btn btn-primary w-100 rounded-pill" style="background:var(--primary-blue); border:none; font-weight:600;">
                            <i class="fas fa-file-pdf me-2"></i> Panduan Pendaftaran
                        </a>
                        <a href="#" class="btn btn-outline-secondary w-100 rounded-pill" style="border-color:#ddd; color:#666; font-weight:600;">
                            <i class="fas fa-file-alt me-2"></i> Formulir Pendaftaran
                        </a>
                        <a href="#" class="btn btn-outline-secondary w-100 rounded-pill" style="border-color:#ddd; color:#666; font-weight:600;">
                            <i class="fas fa-file-pdf me-2"></i> Syarat & Ketentuan
                        </a>
                    </div>
                </div>

                <!-- Widget: Pengumuman Terbaru -->
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-clock"></i> Terbaru</h5>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">15</span>
                            <span class="month">Jun</span>
                        </div>
                        <div>
                            <a href="detail-pengumuman.html" class="ri-title">Ujian Profesi Advokat 2026</a>
                        </div>
                    </div>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">10</span>
                            <span class="month">Jun</span>
                        </div>
                        <div>
                            <a href="detail-pengumuman.html" class="ri-title">Pengangkatan Advokat PT Palembang</a>
                        </div>
                    </div>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">08</span>
                            <span class="month">Jun</span>
                        </div>
                        <div>
                            <a href="detail-pengumuman.html" class="ri-title">Pengangkatan Advokat PT Bandung</a>
                        </div>
                    </div>
                    <div class="recent-item">
                        <div class="ri-date">
                            <span class="day">05</span>
                            <span class="month">Jun</span>
                        </div>
                        <div>
                            <a href="detail-pengumuman.html" class="ri-title">Pengangkatan Advokat PT Jakarta</a>
                        </div>
                    </div>
                </div>

                <!-- Widget: Subscribe -->
                <div class="sidebar-widget" style="background: var(--primary-blue); border-color: var(--primary-blue);">
                    <h5 class="widget-title text-white border-bottom border-gold"><i class="fas fa-bell text-gold"></i> Notifikasi</h5>
                    <p class="text-white-50 small">Dapatkan pemberitahuan pengumuman terbaru langsung ke email Anda.</p>
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