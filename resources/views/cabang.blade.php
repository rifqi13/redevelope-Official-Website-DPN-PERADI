@extends('layouts.app')

@section('title', 'Informasi Cabang - PERADI')

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
                        <li class="breadcrumb-item active" aria-current="page">Informasi Cabang PERADI</li>
                    </ol>
                </nav>
                <h1>Informasi Cabang PERADI</h1>
                <p class="subtitle">Lokasi DPC Perhimpunan Advokat Indonesia di seluruh Indonesia</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill" style="background:var(--accent-gold);">
                    <i class="fas fa-map-pin me-2"></i> 100+ Cabang
                </span>
            </div>
        </div>
    </div>
</section>


<!-- ============================================
     MAP & TABLE
     ============================================ -->
<section class="map-section">
    <div class="container">
        <div class="row g-4">

            <!-- Kolom Kiri: Peta -->
            <div class="col-lg-12">
                <div id="map"></div>
            </div>

            <!-- Kolom Kanan: Daftar Cabang -->
            <div class="col-lg-12">
                <div class="table-cabang">
                    <h5 class="section-title"><i class="fas fa-list"></i> Daftar Cabang PERADI</h5>
                    
                    <div class="table-wrapper">
                        <table class="table table-hover" id="cabangTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Cabang</th>
                                    <th>Provinsi</th>
                                </tr>
                            </thead>
                            <tbody id="cabangList">
                                <!-- Diisi oleh JavaScript -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-3 text-center">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Klik marker di peta untuk melihat detail cabang
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




@endsection

@push('scripts')
  @vite('resources/js/maps-cabang.js')
@endpush
