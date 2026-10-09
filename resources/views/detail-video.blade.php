@extends('layouts.app')

@section('title', "Video " . $video->nama . " - PERADI")

@section('meta_description', Str::limit(strip_tags($video->deskripsi), 150))

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
                        <li class="breadcrumb-item active" aria-current="page">Detail Video</li>
                    </ol>
                </nav>
                <h1>Detail Video</h1>
                <p class="text-white-50 mb-0">Kumpulan video kegiatan, seminar, dan informasi seputar PERADI</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     MAIN CONTENT
     ============================================ -->
<section class="py-4">
    <div class="container">
        <div class="row g-4">

            <!-- ==========================================
                 KOLOM KIRI: VIDEO GRID
                 ========================================== -->
            <div class="col-lg-12">

                <!-- Featured Video -->
                <div class="featured-video">
                    
                    <script type="text/javascript" src="//cdn.jsdelivr.net/afterglow/latest/afterglow.min.js"></script>
			        <video class="afterglow" id="myvideo" style="width:100%;height:550px" data-youtube-id="{{ $video->video }}"></video>
                   

                </div>


                <div class="video-info">
                    <h1 class="video-title">{{ $video->nama }}</h1>

                    <div class="video-meta">
                        <span><i class="fas fa-calendar-alt"></i> 15 Maret 2025</span>
                        <span><i class="fas fa-eye"></i> 1.234 views</span>
                        <span><i class="fas fa-thumbs-up"></i> 89 suka</span>
                        <span><i class="fas fa-clock"></i> 45:20 menit</span>
                        <span><i class="fas fa-tag"></i> Seminar Nasional</span>
                    </div>

                    <div class="video-desc">
                        {!! $video->keterangan !!}
                    </div>

                    <div class="video-tags">
                        <a href="#" class="tag">#PERADI</a>
                        <a href="#" class="tag">#SeminarNasional</a>
                        <a href="#" class="tag">#HukumDigital</a>
                        <a href="#" class="tag">#PenegakanHukum</a>
                        <a href="#" class="tag">#Advokat</a>
                    </div>

                    
                </div>



             <div class="related-videos">
                    <h3 class="section-title"><i class="fas fa-play-circle"></i> Video Lainnya</h3>
                    <div class="row g-3">   

                <!-- Filter -->
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-4">Semua</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Seminar</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Pelatihan</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Kegiatan</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Dokumentasi</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-4">Wawancara</a>
                </div>

                <!-- Video Grid -->
                <div class="video-grid-detail">


                    @foreach($video_lain as $vl)  
                    <div class="video-card-detail">
                        <div class="video-thumb">
                            <a href="{{ url('/video/' . $vl->alias) }}">
                                <img src="{{ asset($vl->thumb) }}" alt="{{ $vl->nama }}">
                                <div class="play-overlay">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <span class="video-badge recent">Terbaru</span>
                            </a>
                        </div>
                        <div class="video-body">
                            <a href="{{ url('/video/' . $vl->alias) }}" class="video-title">{{ $vl->nama }}</a>
                            <p class="video-desc"></p>
                            <div class="video-meta">
                                <div class="views">
                                    <span><i class="fas fa-eye"></i> 856</span>
                                    <span><i class="fas fa-calendar-alt"></i> {{ date('d M Y', strtotime($vl->create_date)) }}</span>
                                </div>
                                <a href="{{ url('/video/' . $vl->alias) }}" class="btn-watch">Tonton</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    {{ $video_lain->links() }}
                </nav>

            </div>

             </div>
              </div>

            
        </div>
    </div>
</section>


@endsection