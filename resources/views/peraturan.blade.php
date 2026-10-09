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
                        <li class="breadcrumb-item active" aria-current="page">Kode Etik Advokat</li>
                    </ol>
                </nav>
                <h1>Kode Etik Advokat</h1>
                <p class="text-white-50 mb-0">Pedoman moral dan perilaku bagi profesi advokat di Indonesia</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-gold text-dark px-4 py-2 rounded-pill">
                    <i class="fas fa-calendar-alt me-2"></i> Ditetapkan: 23 Mei 2002
                </span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     MAIN CONTENT
     ============================================ -->
<section class="py-4">
    <div class="container">
        <div class="main-layout">

            <!-- ==========================================
                 SIDEBAR KIRI: DAFTAR ISI (STICKY)
                 ========================================== -->
            <aside class="toc-sidebar" id="tocSidebar">
                <div class="toc-title">
                    <i class="fas fa-list-ul"></i> Daftar Isi
                    <span class="badge bg-gold text-dark ms-auto" style="font-size:0.6rem;">13 Bab</span>
                </div>
                <ul class="toc-list">
                    <li><a href="#pembukaan" class="active"><span class="num">•</span> Pembukaan</a></li>
                    <li><a href="#bab1"><span class="num">BAB I</span> Ketentuan Umum</a></li>
                    <li><a href="#bab2"><span class="num">BAB II</span> Kepribadian Advokat</a></li>
                    <li><a href="#bab3"><span class="num">BABIII</span> Hubungan dengan Klien</a></li>
                    <li><a href="#bab4"><span class="num">BAB IV</span> Teman Sejawat</a></li>
                    <li><a href="#bab5"><span class="num">BAB V</span> Sejawat Asing</a></li>
                    <li><a href="#bab6"><span class="num">BAB VI</span> Menangani Perkara</a></li>
                    <li><a href="#bab7"><span class="num">BAB VII</span> Ketentuan Lain</a></li>
                    <li><a href="#bab8"><span class="num">BAB VIII</span> Pelaksanaan</a></li>
                    <li><a href="#bab9"><span class="num">BAB IX</span> Dewan Kehormatan</a></li>
                    <li><a href="#bab10"><span class="num">BAB X</span> Kode Etik & Dewan Kehormatan</a></li>
                    <li><a href="#bab11"><span class="num">BAB XI</span> Aturan Peralihan</a></li>
                    <li><a href="#bab12"><span class="num">BAB XII</span> Penutup</a></li>
                    <li><a href="#tandatangan"><span class="num">•</span> Tanda Tangan</a></li>
                </ul>
            </aside>

            <!-- ==========================================
                 KONTEN UTAMA
                 ========================================== -->
            <div class="content-main">

                <div class="etik-content">

                    <!-- PEMBUKAAN -->
                    <div class="pasal-wrapper" id="pembukaan">
                        <div class="pasal-title">
                            PEMBUKAAN
                        </div>
                        <div class="pasal-body">
                            <p>Bahwa semestinya organisasi profesi memiliki Kode Etik yang membebankan kewajiban dan sekaligus memberikan perlindungan hukum kepada setiap anggotanya dalam menjalankan profesinya.</p>
                            <p>Advokat sebagai profesi terhormat (<em>officium nobile</em>) yang dalam menjalankan profesinya berada dibawah perlindungan hukum, undang-undang dan Kode Etik, memiliki kebebasan yang didasarkan kepada kehormatan dan kepribadian Advokat yang berpegang teguh kepada <strong>Kemandirian, Kejujuran, Kerahasiaan dan Keterbukaan</strong>.</p>
                            <p>Bahwa profesi Advokat adalah selaku penegak hukum yang sejajar dengan instansi penegak hukum lainnya, oleh karena itu satu sama lainnya harus saling menghargai antara teman sejawat dan juga antara para penegak hukum lainnya.</p>
                            <div class="highlight-box">
                                <i class="fas fa-quote-left text-gold me-2"></i>
                                Setiap Advokat harus menjaga citra dan martabat kehormatan profesi, serta setia dan menjunjung tinggi Kode Etik dan Sumpah Profesi.
                            </div>
                            <p>Dengan demikian Kode Etik Advokat Indonesia adalah sebagai <strong>hukum tertinggi</strong> dalam menjalankan profesi, yang menjamin dan melindungi namun membebankan kewajiban kepada setiap Advokat untuk jujur dan bertanggung jawab dalam menjalankan profesinya baik kepada klien, pengadilan, negara atau masyarakat dan terutama kepada dirinya sendiri.</p>
                        </div>
                    </div>

                    <!-- BAB I -->
                    <div class="pasal-wrapper" id="bab1">
                        <div class="pasal-title">
                            BAB I
                            <span class="badge-pasal">Ketentuan Umum</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 1</h4>
                            <p>Yang dimaksud dengan:</p>
                            <ul>
                                <li><strong>Advokat</strong> adalah orang yang berpraktek memberi jasa hukum, baik didalam maupun diluar pengadilan yang memenuhi persyaratan berdasarkan undang-undang yang berlaku, baik sebagai Advokat, Pengacara, Penasehat Hukum, Pengacara praktek ataupun sebagai konsultan hukum.</li>
                                <li><strong>Klien</strong> adalah orang, badan hukum atau lembaga lain yang menerima jasa dan atau bantuan hukum dari Advokat.</li>
                                <li><strong>Teman sejawat</strong> adalah orang atau mereka yang menjalankan praktek hukum sebagai Advokat sesuai dengan ketentuan perundang-undangan yang berlaku.</li>
                                <li><strong>Teman sejawat asing</strong> adalah Advokat yang bukan berkewarganegaraan Indonesia yang menjalankan praktek hukum di Indonesia sesuai dengan ketentuan perundang-undangan yang berlaku.</li>
                                <li><strong>Dewan kehormatan</strong> adalah lembaga atau badan yang dibentuk oleh organisasi profesi advokat yang berfungsi dan berkewenangan mengawasi pelaksanaan kode etik Advokat sebagaimana semestinya oleh Advokat dan berhak menerima dan memeriksa pengaduan terhadap seorang Advokat yang dianggap melanggar Kode Etik Advokat.</li>
                                <li><strong>Honorarium</strong> adalah pembayaran kepada Advokat sebagai imbalan jasa Advokat berdasarkan kesepakatan dan atau perjanjian dengan kliennya.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB II -->
                    <div class="pasal-wrapper" id="bab2">
                        <div class="pasal-title">
                            BAB II
                            <span class="badge-pasal">Kepribadian Advokat</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 2</h4>
                            <p>Advokat Indonesia adalah warga negara Indonesia yang bertakwa kepada Tuhan Yang Maha Esa, bersikap satria, jujur dalam mempertahankan keadilan dan kebenaran dilandasi moral yang tinggi, luhur dan mulia, dan yang dalam melaksanakan tugasnya menjunjung tinggi hukum, Undang-undang Dasar Republik Indonesia, Kode Etik Advokat serta sumpah jabatannya.</p>

                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue); margin-top:20px;">Pasal 3</h4>
                            <ul>
                                <li>Advokat dapat menolak untuk memberi nasihat dan bantuan hukum kepada setiap orang yang memerlukan jasa dan atau bantuan hukum dengan pertimbangan oleh karena tidak sesuai dengan keahliannya dan bertentangan dengan hati nuraninya, tetapi tidak dapat menolak dengan alasan karena perbedaan agama, kepercayaan, suku, keturunan, jenis kelamin, keyakinan politik dan kedudukan sosialnya.</li>
                                <li>Advokat dalam melakukan tugasnya tidak bertujuan semata-mata untuk memperoleh imbalan materi tetapi lebih mengutamakan tegaknya Hukum, Kebenaran dan Keadilan.</li>
                                <li>Advokat dalam menjalankan profesinya adalah bebas dan mandiri serta tidak dipengaruhi oleh siapapun dan wajib memperjuangkan hak-hak azasi manusia dalam Negara Hukum Indonesia.</li>
                                <li>Advokat wajib memelihara rasa solidaritas diantara teman sejawat.</li>
                                <li>Advokat wajib memberikan bantuan dan pembelaan hukum kepada teman sejawat yang diduga atau didakwa dalam suatu perkara pidana atas permintaannya atau karena penunjukan organisasi profesi.</li>
                                <li>Advokat tidak dibenarkan untuk melakukan pekerjaan lain yang dapat merugikan kebebasan, derajat dan martabat Advokat.</li>
                                <li>Advokat harus senantiasa menjunjung tinggi profesi Advokat sebagai profesi terhormat (<em>officium nobile</em>).</li>
                                <li>Advokat dalam menjalankan profesinya harus bersikap sopan terhadap semua pihak namun wajib mempertahankan hak dan martabat advokat.</li>
                                <li>Seorang Advokat yang kemudian diangkat untuk menduduki suatu jabatan Negara (Eksekutif, Legislatif dan judikatif) tidak dibenarkan untuk berpraktek sebagai Advokat dan tidak diperkenankan namanya dicantumkan atau dipergunakan oleh siapapun atau oleh kantor manapun dalam suatu perkara yang sedang diproses/berjalan selama ia menduduki jabatan tersebut.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB III -->
                    <div class="pasal-wrapper" id="bab3">
                        <div class="pasal-title">
                            BAB III
                            <span class="badge-pasal">Hubungan dengan Klien</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 4</h4>
                            <ul>
                                <li>Advokat dalam perkara-perkara perdata harus mengutamakan penyelesaian dengan jalan damai.</li>
                                <li>Advokat tidak dibenarkan memberikan keterangan yang dapat menyesatkan klien mengenai perkara yang sedang diurusnya.</li>
                                <li>Advokat tidak dibenarkan menjamin kepada kliennya bahwa perkara yang ditanganinya akan menang.</li>
                                <li>Dalam menentukan besarnya honorarium Advokat wajib mempertimbangkan kemampuan klien.</li>
                                <li>Advokat tidak dibenarkan membebani klien dengan biaya-biaya yang tidak perlu.</li>
                                <li>Advokat dalam mengurus perkara cuma-cuma harus memberikan perhatian yang sama seperti terhadap perkara untuk mana ia menerima uang jasa.</li>
                                <li>Advokat harus menolak mengurus perkara yang menurut keyakinannya tidak ada dasar hukumnya.</li>
                                <li>Advokat wajib memegang rahasia jabatan tentang hal-hal yang diberitahukan oleh klien secara kepercayaan dan wajib tetap menjaga rahasia itu setelah berakhirnya hubungan antara Advokat dan klien itu.</li>
                                <li>Advokat tidak dibenarkan melepaskan tugas yang dibebankan kepadanya pada saat yang tidak menguntungkan posisi klien atau pada saat tugas itu akan dapat menimbulkan kerugian yang tidak dapat diperbaiki lagi bagi klien yang bersangkutan.</li>
                                <li>Advokat yang mengurus kepentingan bersama dari dua pihak atau lebih harus mengundurkan diri sepenuhnya dari pengurusan kepentingan-kepentingan tersebut, apabila dikemudian hari timbul pertentangan kepentingan antara pihak-pihak yang bersangkutan.</li>
                                <li>Hak retensi Advokat terhadap klien diakui sepanjang tidak akan menimbulkan kerugian kepentingan klien.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB IV -->
                    <div class="pasal-wrapper" id="bab4">
                        <div class="pasal-title">
                            BAB IV
                            <span class="badge-pasal">Hubungan dengan Teman Sejawat</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 5</h4>
                            <ul>
                                <li>Hubungan antara teman sejawat Advokat harus dilandasi sikap saling menghormati, saling menghargai dan saling mempercayai.</li>
                                <li>Advokat jika membicarakan teman sejawat atau jika berhadapan satu sama lain dalam sidang pengadilan, hendaknya tidak menggunakan kata-kata yang tidak sopan baik secara lisan maupun tertulis.</li>
                                <li>Keberatan-keberatan terhadap tindakan teman sejawat yang dianggap bertentangan dengan Kode Etik Advokat harus diajukan kepada Dewan Kehormatan untuk diperiksa dan tidak dibenarkan untuk disiarkan melalui media massa atau cara lain.</li>
                                <li>Advokat tidak diperkenankan menarik atau merebut seorang klien dari teman sejawat.</li>
                                <li>Apabila klien hendak mengganti Advokat, maka Advokat yang baru hanya dapat menerima perkara itu setelah menerima bukti pencabutan pemberian kuasa kepada Advokat semula dan berkewajiban mengingatkan klien untuk memenuhi kewajibannya apabila masih ada terhadap Advokat semula.</li>
                                <li>Apabila suatu perkara kemudian diserahkan oleh klien terhadap Advokat yang baru, maka Advokat semula wajib memberikan kepadanya semua surat dan keterangan yang penting untuk mengurus perkara itu, dengan memperhatikan hak retensi Advokat terhadap klien tersebut.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB V -->
                    <div class="pasal-wrapper" id="bab5">
                        <div class="pasal-title">
                            BAB V
                            <span class="badge-pasal">Tentang Sejawat Asing</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 6</h4>
                            <p>Advokat asing yang berdasarkan peraturan perundang-undangan yang berlaku menjalankan profesinya di Indonesia tunduk kepada serta wajib mentaati Kode Etik ini.</p>
                        </div>
                    </div>

                    <!-- BAB VI -->
                    <div class="pasal-wrapper" id="bab6">
                        <div class="pasal-title">
                            BAB VI
                            <span class="badge-pasal">Cara Bertindak Menangani Perkara</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 7</h4>
                            <ul>
                                <li>Surat-surat yang dikirim oleh Advokat kepada teman sejawatnya dalam suatu perkara dapat ditunjukkan kepada hakim apabila dianggap perlu kecuali surat-surat yang bersangkutan dibuat dengan membubuhi catatan "Sans Prejudice".</li>
                                <li>Isi pembicaraan atau korespondensi dalam rangka upaya perdamaian antar Advokat akan tetapi tidak berhasil, tidak dibenarkan untuk digunakan sebagai bukti dimuka pengadilan.</li>
                                <li>Dalam perkara perdata yang sedang berjalan, Advokat hanya dapat menghubungi hakim apabila bersama-sama dengan Advokat pihak lawan, dan apabila ia menyampaikan surat, termasuk surat yang bersifat "ad informandum" maka hendaknya seketika itu tembusan dari surat tersebut wajib diserahkan atau dikirimkan pula kepada Advokat pihak lawan.</li>
                                <li>Dalam perkara pidana yang sedang berjalan, Advokat hanya dapat menghubungi hakim apabila bersama-sama dengan jaksa penuntut umum.</li>
                                <li>Advokat tidak dibenarkan mengajari dan atau mempengaruhi saksi-saksi yang diajukan oleh pihak lawan dalam perkara perdata atau oleh jaksa penuntut umum dalam perkara pidana.</li>
                                <li>Apabila Advokat mengetahui, bahwa seseorang telah menunjuk Advokat mengenai suatu perkara tertentu, maka hubungan dengan orang itu mengenai perkara tertentu tersebut hanya boleh dilakukan melalui Advokat tersebut.</li>
                                <li>Advokat bebas mengeluarkan pernyataan-pernyataan atau pendapat yang dikemukakan dalam sidang pengadilan dalam rangka pembelaan dalam suatu perkara yang menjadi tanggung jawabnya baik dalam sidang terbuka maupun dalam sidang tertutup yang dikemukakan secara proporsional dan tidak berkelebihan dan untuk itu memiliki imunitas hukum baik perdata maupun pidana.</li>
                                <li>Advokat mempunyai kewajiban untuk memberikan bantuan hukum secara cuma-Cuma (pro deo) bagi orang yang tidak mampu.</li>
                                <li>Advokat wajib menyampaikan pemberitahuan tentang putusan pengadilan mengenai perkara yang ia tangani kepada kliennya pada waktunya.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB VII -->
                    <div class="pasal-wrapper" id="bab7">
                        <div class="pasal-title">
                            BAB VII
                            <span class="badge-pasal">Ketentuan-Ketentuan Lain Tentang Kode Etik</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 8</h4>
                            <ul>
                                <li>Profesi Advokat adalah profesi yang mulia dan terhormat (officium nobile), dan karenanya dalam menjalankan profesi selaku penegak hukum di pengadilan sejajar dengan Jaksa dan Hakim, yang dalam melaksanakan profesinya berada dibawah perlindungan hukum, undang-undang dan Kode Etik ini.</li>
                                <li>Pemasangan iklan semata-mata untuk menarik perhatian orang adalah dilarang termasuk pemasangan papan nama dengan ukuran dan/atau bentuk yang berlebih-lebihan.</li>
                                <li>Kantor Advokat atau cabangnya tidak dibenarkan diadakan di suatu tempat yang dapat merugikan kedudukan dan martabat Advokat.</li>
                                <li>Advokat tidak dibenarkan mengizinkan orang yang bukan Advokat mencantumkan namanya sebagai Advokat di papan nama kantor Advokat atau mengizinkan orang yang bukan Advokat tersebut untuk memperkenalkan dirinya sebagai Advokat.</li>
                                <li>Advokat tidak dibenarkan mengizinkan karyawan-karyawannya yang tidak berkualifikasi untuk mengurus perkara atau memberi nasehat hukum kepada klien dengan lisan atau dengan tulisan.</li>
                                <li>Advokat tidak dibenarkan melalui media massa mencari publitas bagi dirinya dan atau untuk menarik perhatian masyarakat mengenai tindakan-tindakannya sebagai Advokat mengenai perkara yang sedang atau telah ditanganinya, kecuali apabila keterangan-keterangan yang ia berikan itu bertujuan untuk menegakkan prinsip-prinsip hukum yang wajib diperjuangkan oleh setiap Advokat.</li>
                                <li>Advokat dapat mengundurkan diri dari perkara yang akan dan atau diurusnya apabila timbul perbedaan dan tidak dicapai kesepakatan tentang cara penanganan perkara dengan kliennya.</li>
                                <li>Advokat yang sebelumnya pernah menjabat sebagai Hakim atau Panitera dari suatu lembaga peradilan, tidak dibenarkan untuk memegang atau menangani perkara yang diperiksa pengadilan tempatnya terakhir bekerja selama 3 (tiga) tahun semenjak ia berhenti dari pengadilan tersebut.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB VIII -->
                    <div class="pasal-wrapper" id="bab8">
                        <div class="pasal-title">
                            BAB VIII
                            <span class="badge-pasal">Pelaksanaan Kode Etik</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 9</h4>
                            <ul>
                                <li>Setiap Advokat wajib tunduk dan mematuhi Kode Etik Advokat ini.</li>
                                <li>Pengawasan atas pelaksanaan Kode Etik Advokat ini dilakukan oleh Dewan Kehormatan.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- BAB IX -->
                    <div class="pasal-wrapper" id="bab9">
                        <div class="pasal-title">
                            BAB IX
                            <span class="badge-pasal">Dewan Kehormatan</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 10</h4>
                            <ul>
                                <li>Dewan Kehormatan berwenang memeriksa dan mengadili perkara pelanggaran Kode Etik yang dilakukan oleh Advokat.</li>
                                <li>Pemeriksaan suatu pengaduan dapat dilakukan melalui dua tingkat, yaitu: Tingkat Dewan Kehormatan Cabang/Daerah dan Tingkat Dewan Kehormatan Pusat.</li>
                                <li>Dewan Kehormatan Cabang/daerah memeriksa pengaduan pada tingkat pertama dan Dewan Kehormatan Pusat pada tingkat terakhir.</li>
                                <li>Segala biaya yang dikeluarkan dibebankan kepada: Dewan Pimpinan Cabang/Daerah, Dewan Pimpinan Pusat, atau Pengadu/Teradu.</li>
                            </ul>
                            <p class="mt-3"><em>Untuk ketentuan selengkapnya tentang Dewan Kehormatan (Pasal 11-20), silakan merujuk pada dokumen resmi Kode Etik Advokat Indonesia.</em></p>
                        </div>
                    </div>

                    <!-- BAB X -->
                    <div class="pasal-wrapper" id="bab10">
                        <div class="pasal-title">
                            BAB X
                            <span class="badge-pasal">Kode Etik &amp; Dewan Kehormatan</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 21</h4>
                            <p>Kode Etik ini adalah peraturan tentang Kode Etik dan Ketentuan Tentang Dewan Kehormatan bagi mereka yang menjalankan profesi Advokat, sebagai satu-satunya Peraturan Kode Etik yang diberlakukan dan berlaku di Indonesia.</p>
                        </div>
                    </div>

                    <!-- BAB XI -->
                    <div class="pasal-wrapper" id="bab11">
                        <div class="pasal-title">
                            BAB XI
                            <span class="badge-pasal">Aturan Peralihan</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 22</h4>
                            <ul>
                                <li>Kode Etik ini dibuat dan diprakarsai oleh Komite Kerja Advokat Indonesia, yang disahkan dan ditetapkan oleh Ikatan Advokat Indonesia (IKADIN), Asosiasi Advokat Indonesia (AAI), Ikatan Penasehat Hukum Indonesia (IPHI), Himpunan Advokat & Pengacara Indonesia (HAPI), Serikat Pengacara Indonesia (SPI), Asosiasi Konsultan Hukum Indonesia (AKHI) dan Himpunan Konsultan Hukum Pasar Modal (HKHPM) yang dinyatakan berlaku bagi setiap orang yang menjalankan profesi Advokat di Indonesia tanpa terkecuali.</li>
                                <li>Setiap Advokat wajib menjadi anggota dari salah satu organisasi profesi tersebut dalam ayat 1 pasal ini.</li>
                                <li>Komite Kerja Advokat Indonesia mewakili organisasi-organisasi profesi tersebut dalam ayat 1 pasal ini sesuai dengan Pernyataan Bersama tertanggal 11 Februari 2002 dalam hubungan kepentingan profesi Advokat dengan lembaga-lembaga Negara dan pemerintah.</li>
                                <li>Organisasi-organisasi profesi tersebut dalam ayat 1 pasal ini akan membentuk Dewan kehormatan sebagai Dewan Kehormatan Bersama, yang struktur akan disesuaikan dengan Kode Etik Advokat ini.</li>
                            </ul>
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue); margin-top:20px;">Pasal 23</h4>
                            <p>Perkara-perkara pelanggaran kode etik yang belum diperiksa dan belum diputus atau belum berkekuatan hukum yang tetap atau dalam pemeriksaan tingkat banding akan diperiksa dan diputus berdasarkan Kode Etik Advokat ini.</p>
                        </div>
                    </div>

                    <!-- BAB XII -->
                    <div class="pasal-wrapper" id="bab12">
                        <div class="pasal-title">
                            BAB XII
                            <span class="badge-pasal">Penutup</span>
                        </div>
                        <div class="pasal-body">
                            <h4 class="fw-bold" style="font-size:1.1rem; color:var(--primary-blue);">Pasal 24</h4>
                            <p>Kode Etik Advokat ini berlaku sejak tanggal ditetapkan, yaitu sejak tanggal 23 Mei 2002.</p>
                        </div>
                    </div>

                    <!-- TANDA TANGAN -->
                    <div class="signature-section" id="tandatangan">
                        <div class="sign-title">Ditetapkan di Jakarta pada tanggal 23 Mei 2002</div>
                        <div class="signature-grid">
                            <div class="signature-item">
                                <div class="org-name">IKATAN ADVOKAT INDONESIA (IKADIN)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">H. Sudjono, S.H.</div>
                                <div class="sign-title">Ketua Umum</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Otto Hasibuan, S.H. MM</div>
                                <div class="sign-title">Sekretaris Jenderal</div>
                            </div>
                            <div class="signature-item">
                                <div class="org-name">ASOSIASI ADVOKAT INDONESIA (AAI)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Denny Kailimang, S.H.</div>
                                <div class="sign-title">Ketua Umum</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Teddy Soemantry, S.H.</div>
                                <div class="sign-title">Sekretaris Jenderal</div>
                            </div>
                            <div class="signature-item">
                                <div class="org-name">IKATAN PENASIHAT HUKUM INDONESIA (IPHI)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">H. Indra Sahnun Lubis, S.H.</div>
                                <div class="sign-title">Ketua Umum</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">E. Suherman Kartadinata, S.H.</div>
                                <div class="sign-title">Sekretaris Jenderal</div>
                            </div>
                            <div class="signature-item">
                                <div class="org-name">ASOSIASI KONSULTAN HUKUM INDONESIA (AKHI)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Fred B. G. Tumbuan, S.H., L.Ph.</div>
                                <div class="sign-title">Sekretaris/Caretaker Ketua</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Hoesein Wiriadinata, S.H., LL.M.</div>
                                <div class="sign-title">Bendahara/Caretaker Ketua</div>
                            </div>
                            <div class="signature-item">
                                <div class="org-name">HIMPUNAN KONSULTAN HUKUM PASAR MODAL (HKHPM)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Soemarjono S., S.H.</div>
                                <div class="sign-title">Ketua Umum</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Hafzan Taher, S.H.</div>
                                <div class="sign-title">Sekretaris Jenderal</div>
                            </div>
                            <div class="signature-item">
                                <div class="org-name">SERIKAT PENGACARA INDONESIA (SPI)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Trimedya Panjaitan, S.H.</div>
                                <div class="sign-title">Ketua Umum</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Sugeng T. Santoso, S.H.</div>
                                <div class="sign-title">Sekretaris Jenderal</div>
                            </div>
                            <div class="signature-item">
                                <div class="org-name">HIMPUNAN ADVOKAT & PENGACARA INDONESIA (HAPI)</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">H. A. Z. Arifien Syafe'i, S.H.</div>
                                <div class="sign-title">Ketua Umum</div>
                                <div class="sign-line"></div>
                                <div class="sign-name">Suhardi Somomoeljono, S.H.</div>
                                <div class="sign-title">Sekretaris Jenderal</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ==========================================
                 SIDEBAR KANAN: WIDGET
                 ========================================== -->
            <aside class="sidebar-right">
                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-download"></i> Unduh Dokumen</h5>
                    <a href="#" class="btn-download">
                        <i class="fas fa-file-pdf"></i> Download Kode Etik (PDF)
                    </a>
                    <p class="text-muted small mt-2 text-center">Format PDF, 245 KB</p>
                </div>

                <div class="sidebar-widget" style="background: var(--primary-blue); border-color: var(--primary-blue);">
                    <h5 class="widget-title text-white border-bottom border-gold"><i class="fas fa-gavel text-gold"></i> Dewan Kehormatan</h5>
                    <p class="text-white-50 small">Pengawasan pelaksanaan Kode Etik dilakukan oleh Dewan Kehormatan.</p>
                    <a href="#" class="btn btn-warning w-100 rounded-pill fw-bold">
                        <i class="fas fa-arrow-right me-2"></i> Pelajari Lebih Lanjut
                    </a>
                </div>

                <div class="sidebar-widget">
                    <h5 class="widget-title"><i class="fas fa-book-open"></i> Dokumen Terkait</h5>
                    <div class="d-flex flex-column gap-2">
                        <a href="#" class="text-decoration-none text-dark" style="font-size:0.9rem; transition:0.3s;" onmouseover="this.style.color='var(--accent-gold)'" onmouseout="this.style.color='#333'">
                            <i class="fas fa-file-alt text-gold me-2"></i> Anggaran Dasar PERADI
                        </a>
                        <a href="#" class="text-decoration-none text-dark" style="font-size:0.9rem; transition:0.3s;" onmouseover="this.style.color='var(--accent-gold)'" onmouseout="this.style.color='#333'">
                            <i class="fas fa-file-alt text-gold me-2"></i> Anggaran Rumah Tangga
                        </a>
                        <a href="#" class="text-decoration-none text-dark" style="font-size:0.9rem; transition:0.3s;" onmouseover="this.style.color='var(--accent-gold)'" onmouseout="this.style.color='#333'">
                            <i class="fas fa-file-alt text-gold me-2"></i> Undang-undang No. 18 Tahun 2003
                        </a>
                        <a href="#" class="text-decoration-none text-dark" style="font-size:0.9rem; transition:0.3s;" onmouseover="this.style.color='var(--accent-gold)'" onmouseout="this.style.color='#333'">
                            <i class="fas fa-file-alt text-gold me-2"></i> Peraturan Magang
                        </a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>



@endsection