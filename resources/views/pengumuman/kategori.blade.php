@extends('layouts.app')

@section('title', "Pengumuman " . $kategori->nama . " - PERADI")

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

                @if($beritaList->isEmpty())
    <div class="alert alert-danger">Belum ada pengumuman di kategori ini.</div>
@else
    <div class="announcement-grid">
        @foreach($beritaList as $berita)
            
            <div class="announcement-card" 
                 data-category="{{ strtolower($kategori->alias ?? '') }}" 
                 data-date="{{ date('Y-m-d', strtotime($berita->create_date)) }}">
                
                <div class="card-img-top" style="background: {{ 
                    (strtolower($kategori->alias ?? '') == 'ujian' || strtolower($kategori->alias ?? '') == 'info-ujian') 
                    ? 'linear-gradient(135deg, #0d6efd, #0a58ca)' 
                    : ((strtolower($kategori->alias ?? '') == 'pengangkatan-pengambilan-sumpah' || strtolower($kategori->alias ?? '') == 'sumpah') 
                        ? 'linear-gradient(135deg, #198754, #0d6e3e)' 
                        : 'linear-gradient(135deg, #6c757d, #495057)') 
                }};">
                    
                    <i class="{{ 
                        (strtolower($kategori->alias ?? '') == 'ujian' || strtolower($kategori->alias ?? '') == 'info-ujian') 
                        ? 'fas fa-pen-fancy' 
                        : ((strtolower($kategori->alias ?? '') == 'pengangkatan-pengambilan-sumpah' || strtolower($kategori->alias ?? '') == 'sumpah') 
                            ? 'fas fa-gavel' 
                            : 'fas fa-gavel') 
                    }} img-icon"></i>
                    
                    <span class="img-badge">
                        {{ 
                            (strtolower($kategori->alias ?? '') == 'ujian' || strtolower($kategori->alias ?? '') == 'info-ujian') 
                            ? 'Ujian' 
                            : ((strtolower($kategori->alias ?? '') == 'pengangkatan-pengambilan-sumpah' || strtolower($kategori->alias ?? '') == 'sumpah') 
                                ? 'Pengangkatan & Pengambilan Sumpah' 
                                : $kategori->nama) 
                        }}
                    </span>
                    
                    <span class="status-badge active">Aktif</span>
                </div>
                
                <div class="card-body" style="padding: 15px;">
                    <h5 style="margin-top: 0; font-size: 16px;">
                        <a href="{{ url('/pengumuman/' . $berita->alias) }}" style="text-decoration: none; color: #333; font-weight: bold;">
                            {{ $berita->nama }}
                        </a>
                    </h5>
                    <small style="color: #888;"> {{ date('d M Y', strtotime($berita->create_date)) }}</small>
                </div>
            </div>

        @endforeach
    </div>
@endif

                <!-- Pagination -->
                <nav class="mt-5">
                    {{ $beritaList->links() }}
                </nav>

            </div>

           
            
        </div>
    </div>
</section>


@endsection