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
                        <li class="breadcrumb-item"><a href="pengumuman.html">PKPA</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PKPA Seluruh Indonesia</li>
                    </ol>
                </nav>
                <h1>PKPA Seluruh Indonesia</h1>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill" style="background:var(--accent-gold);">
                    <i class="fas fa-calendar-alt me-2"></i> 15 Juni 2026
                </span>
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
            <div class="col-lg-12">

                <div class="detail-container">

                   

                    <!-- Body -->
                    <div class="announcement-body" style="line-height: 1.8; text-align: justify;text-justify: inter-word;">


                        <div class="elfsight-app-600d2ec3-43b1-40ef-a35d-82a89c758830" data-elfsight-app-lazy></div>

                         @push('scripts')
                        <script src="https://elfsightcdn.com/platform.js" async></script>
                        @endpush

                    </div>

                </div>

                

            </div>

            
        </div>
    </div>
</section>


@endsection