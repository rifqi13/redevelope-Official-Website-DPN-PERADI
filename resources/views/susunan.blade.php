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
                        <li class="breadcrumb-item"><a href="#">Profil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Susunan Pengurus DPN</li>
                    </ol>
                </nav>
                <h1>PENGURUS DEWAN PIMPINAN NASIONAL</h1>
                <p class="subtitle">Perhimpunan Advokat Indonesia · Masa Jabatan 2020 – 2025</p>
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
                 KOLOM KIRI: DAFTAR PENGURUS
                 ========================================== -->
            <div class="col-lg-12">
                <div class="ketua-umum-wrapper">
                    <div class="ketua-umum-card">
                        <div class="avatar">OH</div>
                        <div class="name">Prof. Dr. Otto Hasibuan, S.H., M.M.</div>
                        <div class="position">Ketua Umum</div>
                    </div>
                </div>

                <!-- Pimpinan Utama -->
                <div class="leader-grid">
                    <!-- Ketua Umum -->
                    
                    <!-- Sekretaris Jenderal -->
                    <div class="leader-card">
                        <div class="leader-avatar">HD</div>
                        <div class="leader-name">Dr. H. Hermansyah Dulaimi, S.H., M.H.</div>
                        <div class="leader-position">Sekretaris Jenderal</div>
                    </div>
                    <!-- Ketua Harian -->
                    <div class="leader-card">
                        <div class="leader-avatar">DP</div>
                        <div class="leader-name">R. Dwiyanto Prihartono, S.H., M.H.</div>
                        <div class="leader-position">Ketua Harian / Wakil Ketua Umum</div>
                    </div>
                    <!-- Bendahara Umum -->
                    <div class="leader-card">
                        <div class="leader-avatar">NW</div>
                        <div class="leader-name">Dr. Nyana Wangsa, S.H., M.H.</div>
                        <div class="leader-position">Bendahara Umum</div>
                    </div>
                </div>

                <!-- KETUA UMUM DAN WAKIL KETUA UMUM -->
                <div class="section-title-wrapper">
                    <span class="section-title">Ketua Umum dan Wakil Ketua Umum</span>
                    
                    <span class="section-line"></span>
                </div>
                <div class="member-grid">
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Prof. Dr. Otto Hasibuan, S.H., M.M.</span><span class="role">Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">R. Dwiyanto Prihartono, S.H., M.H.</span><span class="role">Ketua Harian/Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. H. Achiel Suyanto S, S.H., M.H., MBA.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. H. Sutrisno, S.H., M.Hum.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. H. Sapriyanto Refa, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Zul Armain Aziz, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. H. Shalih Mangara Sitompul, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">H.E.A. Zaenal Marzuki, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Srimiguna, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Happy SP Sihombing, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Roelly Panggabean, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Soedeson Tandra, S.H., M.Hum.</span><span class="role">Wakil Ketua Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Hendrik Jehaman, S.H., M.H.</span><span class="role">Wakil Ketua Umum</span></div></div>
                </div>

                <!-- SEKRETARIS JENDERAL DAN WAKIL -->
                <div class="section-title-wrapper">
                    <span class="section-title">Sekretaris Jenderal dan Wakil Sekretaris Jenderal</span>
                    
                    <span class="section-line"></span>
                </div>
                <div class="member-grid">
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. H. Hermansyah Dulaimi, S.H., M.H.</span><span class="role">Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Viator Harlen Sinaga, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Bhismoko W. Nugroho, S.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">M.M.M. Herman Sitompul, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Nyoman Budi Adnyana, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. H. M. Jamil Misbach, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Zulfikar Sawang, S.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Yusril Sabri, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Hariyanto, S.H., M.Hum.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Prof. Dr. Hj. Nurmala S.H., M.H., CLA.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Jutek Bongso, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Andra Reinhard R. S., S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Johannes O. Lumban Tobing, S.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">John Sari Haloho, S.H., M.M.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Khairil Poloan, S.H., M.H.</span><span class="role">Wakil Sekretaris Jenderal</span></div></div>
                </div>

                <!-- BENDAHARA UMUM DAN WAKIL -->
                <div class="section-title-wrapper">
                    <span class="section-title">Bendahara Umum dan Wakil Bendahara Umum</span>
                    
                    <span class="section-line"></span>
                </div>
                <div class="member-grid">
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Nyana Wangsa, S.H., M.H.</span><span class="role">Bendahara Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">RA. Anitha D. J. Puspokusumo, S.H., M.H.</span><span class="role">Wakil Bendahara Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Rielen Pattiasina, B.Sc., S.H.</span><span class="role">Wakil Bendahara Umum</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Syamsuddin, S.H., M.H.</span><span class="role">Wakil Bendahara Umum</span></div></div>
                </div>

                <!-- BIDANG-BIDANG (Contoh 3 Bidang, sisanya bisa ditambahkan) -->
                <div class="section-title-wrapper">
                    <span class="section-title">Bidang Kajian Hukum dan Perundang-Undangan</span>
                    
                    <span class="section-line"></span>
                </div>
                <div class="member-grid">
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Nikolas Simanjuntak, S.H., M.H.</span><span class="role">Ketua</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Fahri Bachmid, S.H., M.H.</span><span class="role">Wakil Ketua</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Mustakim, S.H., M.H.</span><span class="role">Wakil Ketua</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Dr. Nicholay A. Bengngu, S.H., M.H., M.M.</span><span class="role">Sekretaris</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Venny Romatua Damanik, S.H., M.A.</span><span class="role">Wakil Sekretaris</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Ilham Guntur, S.H.</span><span class="role">Wakil Sekretaris</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Andi Ryza Fardiansyah, S.H.</span><span class="role">Wakil Sekretaris</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Johan Imanuel, S.H.</span><span class="role">Anggota</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Romulo H. Septiano A. Silaen, S.H., M.H.</span><span class="role">Anggota</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Priyanto, S.H., M.H.</span><span class="role">Anggota</span></div></div>
                    <div class="member-card"><div class="member-icon"><i class="fas fa-user-tie"></i></div><div class="member-info"><span class="name">Ibrahim Suryoatmodjo, S.H., M.Kn.</span><span class="role">Anggota</span></div></div>
                </div>

                <!-- KOORDINATOR WILAYAH -->
                <div class="section-title-wrapper">
                    <span class="section-title">Koordinator Wilayah</span>
                    
                    <span class="section-line"></span>
                </div>
                <div class="region-grid">
                    <div class="region-card"><div class="region-name">Sumatera Utara & NAD</div><div class="region-members"><span>H. Marasamin Ritonga, S.H., M.H.</span><span>Binsar J. Panggabean, S.H.</span><span>Ahcmad Sandry, S.H., M.Kn.</span><span>Tri Purnowidodo, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Sumatera Barat, Riau & Kepri</div><div class="region-members"><span>Bistok Nadeak, S.H.</span><span>Muharnis, S.H., M.H.</span><span>Iwat Endri, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Sumatera Selatan</div><div class="region-members"><span>H. Muhammad Antoni, S.H., M.H.</span><span>Dr. H. Darmadi Djufri, S.H., M.H., C.Med.</span><span>Muhammad Zulkifli Yasin, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Bengkulu</div><div class="region-members"><span>Edy Sugiarto, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Jambi</div><div class="region-members"><span>Suratno, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Lampung</div><div class="region-members"><span>M. Ridho, S.H., M.H.</span><span>Sukarmin, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Kalimantan Barat</div><div class="region-members"><span>Uspalino, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Kalimantan Selatan & Tengah</div><div class="region-members"><span>H. A. Rasyid Rahman, S.H.</span><span>H. Edi Sucipto, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Kalimantan Timur & Utara</div><div class="region-members"><span>Hj. Nur'ain, S.H., M.H.</span><span>H. Arifudin, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Banten</div><div class="region-members"><span>Fitriyanti, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Jawa Barat</div><div class="region-members"><span>Mochamad Rinal Siswadi Kusumah, S.H.</span><span>Hayun Shobri, S.H., M.H.</span><span>Priyo Jatmiko, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Jawa Tengah</div><div class="region-members"><span>Dr. H. D. Djunaedi, S.H., Sp.N., M.H.</span><span>Dr. Sunarto, S.H., M.H.</span><span>Andreas Haryanto, S.H., CN.</span><span>H. Deddy Suwadi, S.R., S.H.</span><span>Muh. Badrus Zaman, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Daerah Istimewa Yogyakarta</div><div class="region-members"><span>Muhammad Irsyad Thamrin, S.H., M.H.</span><span>Suyanto Siregar, S.H.</span><span>H. Tommi Harahap, S.H, M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Jawa Timur</div><div class="region-members"><span>Bambang Soetjipto, S.H., M.Hum.</span><span>Djuli Edy, S.H., M.H.</span><span>Jani Takarianto, S.H.</span><span>Hari Ananto, S.H., M.H.</span><span>Kukuh Pramono Budi, S.H.</span><span>Dian Aminudin, S.H.</span><span>Misnadi, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Bali</div><div class="region-members"><span>I Gede Putu Yudi Satria Wibawa, S.H.</span><span>Dr. Putu Suta Sadnyana, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Nusa Tenggara Barat</div><div class="region-members"><span>Dr. Asmuni, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Nusa Tenggara Timur</div><div class="region-members"><span>Philipus Fernandez, S.H.</span><span>Erlan Yusran, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Sulawesi Utara & Gorontalo</div><div class="region-members"><span>Piet Kangihad, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Sulawesi Tengah</div><div class="region-members"><span>Abdurrachman M. Kasim, S.H., M.H.</span><span>Dr. Muslim Mamulai, S.H., M.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Sulawesi Tenggara</div><div class="region-members"><span>Syahiruddin Latif, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Sulawesi Selatan & Barat</div><div class="region-members"><span>Thamrin A. Achmad, S.H.</span><span>Dr. Jamaluddin Rustam, S.H., M.H.</span><span>Syamsuwardi, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Papua Barat</div><div class="region-members"><span>Emilianus Jimmy Ell, S.H.</span><span>Muslim Lobubun, S.H., M.H.</span><span>Haris Nurlette, S.H., M.H.</span><span>M. Yasin Djamaludin, S.H.</span></div></div>
                    <div class="region-card"><div class="region-name">Papua</div><div class="region-members"><span>Albert Bolang, S.H., M.H.</span><span>Nur Aida Duwila, S.H.</span></div></div>
                </div>

                <!-- Catatan Kaki -->
                <div class="mt-4 p-3 bg-light rounded-3" style="border-left:4px solid var(--accent-gold);">
                    <p class="text-muted small mb-0">
                        <i class="fas fa-info-circle text-gold me-2"></i>
                        Data susunan pengurus ini berdasarkan keputusan DPN PERADI periode 2020–2025.
                        Untuk informasi lebih lengkap, silakan hubungi Sekretariat DPN PERADI.
                    </p>
                </div>

            </div>

            

        </div>
    </div>
</section>


@endsection