 // Search Overlay
    function openSearch() {
        document.getElementById("searchOverlay").classList.add("active");
        setTimeout(() => {
            document.querySelector(".search-input").focus();
        }, 300);
    }

    function closeSearch() {
        document.getElementById("searchOverlay").classList.remove("active");
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            closeSearch();
        }
    });

    // ============================================
    // DATA CABANG (Dari script lama)
    // ============================================
    var cabangData = [
        ["DPC PERADI Padang", "Sumatera Barat", -0.926349, 100.356311],
        ["DPC PERADI Bangkalan", "Jawa Timur", -7.052199, 112.731694],
        ["DPC PERADI Bondowoso", "Jawa Timur", -7.939496, 113.811957],
        ["DPC PERADI Selong", "NTB", -8.649930, 116.529300],
        ["DPC PERADI Timika", "Papua", -4.538383, 136.896506],
        ["DPC PERADI Merauke", "Papua", -8.505964, 140.404832],
        ["DPC PERADI Biak Numfor", "Papua", -1.151345, 136.078448],
        ["DPC PERADI Singaraja", "Bali", -8.129312, 115.098535],
        ["DPC PERADI Martapura-Banjarbaru", "Kalimantan Selatan", -3.479576, 114.809136],
        ["DPC PERADI Singkawang", "Kalimantan Barat", 0.906895, 108.990337],
        ["DPC PERADI Gresik", "Jawa Timur", -7.168399, 112.606642],
        ["DPC PERADI Ngawi", "Jawa Timur", -7.419096, 111.463251],
        ["DPC PERADI Trenggalek", "Jawa Timur", -8.051308, 111.707029],
        ["DPC PERADI Tuban", "Jawa Timur", -6.894717, 112.030125],
        ["DPC PERADI Lamongan", "Jawa Timur", -7.112161, 112.415698],
        ["DPC PERADI Grobogan", "Jawa Tengah", -7.091811, 110.909540],
        ["DPC PERADI Pati", "Jawa Tengah", -6.742993, 111.028050],
        ["DPC PERADI Kendal", "Jawa Tengah", -6.920755, 110.203623],
        ["DPC PERADI Garut", "Jawa Barat", -7.226485, 107.932663],
        ["DPC PERADI Cikarang", "Jawa Barat", -6.264536, 107.070088],
        ["DPC PERADI Rangkasbitung", "Banten", -6.357596, 106.251046],
        ["DPC PERADI Padang Lawas Raya", "Jl. Ki Hajar Dewantara, Kel. Pasar Sibuhun, Kab. Padang Lawas, Sumatera Utara", 1.051696, 99.733410],
        ["DPC PERADI Karo-Dairi-Pakpak", "Jl. Perwira, Komp. Perum. Gundaling Indah No. 4, Brastagi, Tanah Karo, Sumatera Utara", 3.197109, 98.504784],
        ["DPC PERADI ASTARA (Asahan-Tj. Balai-Batubara)", "Jl. P. Diponegoro No. 191, Kisaran - Sumatera Utara", 2.983131, 99.624443],
        ["DPC PERADI Sibolga", "Jl. Mahoni No. 6, Kel. Pancuran Gerobak, Kota Sibolga - Tapanuli Tengah", 1.734558, 98.788215],
        ["DPC PERADI Bengkulu", "Bengkulu", -3.815004, 102.311004],
        ["DPC PERADI Cilacap", "Jawa Tengah", -7.701809, 109.024707],
        ["DPC PERADI Mojokerto", "Jawa Timur", -7.481118, 112.432053],
        ["DPC PERADI Sidoarjo", "Jawa Timur", -7.460812, 112.716494],
        ["DPC PERADI Surabaya", "Jawa Timur", -7.285121, 112.708222],
        ["DPC PERADI Banyuwangi", "Jawa Timur", -8.311308, 114.052332],
        ["DPC PERADI Banjarmasin", "Kalimantan Selatan", -3.301423, 114.608420],
        ["DPC PERADI Pontianak", "Kalimantan Barat", -0.037033, 109.330460],
        ["DPC PERADI Balikpapan", "Kalimantan Timur", -1.277334, 116.830604],
        ["DPC PERADI Palangkaraya", "Kalimantan Tengah", -2.232101, 113.908283],
        ["DPC PERADI Kendari", "Sulawesi Tenggara", -3.983843, 122.514060],
        ["DPC PERADI Makassar", "Sulawesi Selatan", -5.177066, 119.413736],
        ["DPC PERADI Denpasar", "Bali", -8.673317, 115.236002],
        ["DPC PERADI Mataram", "NTB", -8.597340, 116.080483],
        ["DPC PERADI Ruteng", "NTT", -8.614169, 120.466371],
        ["DPC PERADI Kupang", "NTT", -10.156088, 123.645571],
        ["DPC PERADI Ambon", "Law Firm Dr. Fahri Bachmid, S.H., M.H. & Associates, Jl. A. M Sangadji No. 77, Ambon 97126", -3.6952623554850037, 128.177051357873],
        ["DPC PERADI Madiun", "Jawa Timur", -7.647748, 111.530623],
        ["DPC PERADI Kediri", "Jawa Timur", -7.842400, 112.031155],
        ["DPC PERADI Malang", "Jawa Timur", -7.954799, 112.631567],
        ["DPC PERADI Yogyakarta", "DIY", -7.811745, 110.387041],
        ["DPC PERADI Sleman", "DIY", -7.721079, 110.352064],
        ["DPC PERADI Salatiga", "Jawa Tengah", -7.321570, 110.492650],
        ["DPC PERADI Semarang", "Jawa Tengah", -6.963790, 110.390524],
        ["DPC PERADI Klaten", "Jawa Tengah", -7.681615, 110.629445],
        ["DPC PERADI Tegal (Eks. Karisidenan Pekalongan)", "Jawa Tengah", -6.903257, 109.680216],
        ["DPC PERADI Surakarta", "Jawa Tengah", -7.560238, 110.780840],
        ["DPC PERADI Purwokerto", "Jawa Tengah", -7.410162, 109.243178],
        ["DPC PERADI Cianjur", "Jawa Barat", -6.813666, 107.138283],
        ["DPC PERADI Depok", "Jawa Barat", -6.424959, 106.837015],
        ["DPC PERADI Tasikmalaya", "Jawa Barat", -7.345659, 108.219716],
        ["DPC PERADI Sukabumi", "Jawa Barat", -6.914594, 106.932919],
        ["DPC PERADI Bogor", "Jawa Barat", -6.619100, 106.813349],
        ["DPC PERADI Karawang", "Jawa Barat", -6.310515, 107.314843],
        ["DPC PERADI Cibinong", "Jawa Barat", -6.536613, 106.797782],
        ["DPC PERADI Cirebon", "Jawa Barat", -6.697700, 108.555899],
        ["DPC PERADI Bekasi", "Jawa Barat", -6.243103, 106.992398],
        ["DPC PERADI Jakarta Pusat", "DKI Jakarta", -6.198081, 106.821169],
        ["DPC PERADI Jakarta Selatan", "DKI Jakarta", -6.216914, 106.816470],
        ["DPC PERADI Jakarta Timur", "DKI Jakarta", -6.219345, 106.886293],
        ["DPC PERADI Jakarta Barat", "DKI Jakarta", -6.182713, 106.797193],
        ["DPC PERADI Jakarta Utara", "DKI Jakarta", -6.173538, 106.913460],
        ["DPC PERADI Serang", "Banten", -6.108065, 106.160784],
        ["DPC PERADI Bandar Lampung", "Lampung", -5.355890, 105.254506],
        ["DPC PERADI Pangkalpinang", "Babel", -1.885695, 106.106857],
        ["DPC PERADI Palembang", "Sumatera Selatan", -2.943198, 104.736092],
        ["DPC PERADI Jambi", "Jambi", -1.612474, 103.622570],
        ["DPC PERADI Tanjung Pinang", "Kepri", 0.918728, 104.513333],
        ["DPC PERADI Batam", "Kepri", 1.100436, 104.059736],
        ["DPC PERADI Pekanbaru", "Riau", 0.480675, 101.435303],
        ["DPC PERADI Siantar Simalungun", "Jl. Lagu Boti I No. 20 A, Kel. Toba, Kec. Siantar Selatan, Kota Pematangsiantar 21123", 2.9486776432720494, 99.06485550382368],
        ["DPC PERADI Bukit Tinggi", "Sumatera Barat", -0.300198, 100.380284],
        ["DPC PERADI Deli Serdang", "Jl. Sempurna Perumahan Kenanga Asri No. 317, Desa Sekip, Kec. Lubuk Pakam, Kab. Deli Serdang - Sumatera Utara", 3.5667117024812423, 98.8876436765184],
        ["DPC PERADI Padangsidempuan", "Jl. Sudirman No.262 Sigiring Giring, Kel. Timbangan, Kec. Padangsidimpuan Utara, Kota Padangsidimpuan ", 1.387671021826383, 99.26332640076662],
        ["DPC PERADI Medan", "Gedung PERADI Medan, Jl. Sei Rokan No. 39, Medan", 3.5803274306471184, 98.64986419536581],
        ["DPC PERADI Bandung", "Jawa Barat", -6.912977, 107.638673],
        ["DPC PERADI Jayapura", "Papua", -2.565489, 140.699577],
        ["DPC PERADI Ternate", "Maluku Utara", 0.769235, 127.374850],
        ["DPC PERADI Sorong", "Papua Barat", -0.893655, 131.316793],
        ["DPC PERADI DPC Blora", "Jawa Tengah", -6.971727, 111.449678],
        ["DPC PERADI DPC Magelang", "Jawa Tengah", -7.543935, 110.229395],
        ["DPC PERADI DPC Wonosari", "DIY", -7.815858, 110.385973],
        ["DPC PERADI Wates", "DIY", -7.945279, 110.227406],
        ["DPC PERADI Bantul", "DIY", -7.812331, 110.353261],
        ["DPC PERADI Lumajang", "Jawa Timur", -8.110657, 113.219792],
        ["DPC PERADI Probolinggo", "Jawa Timur", -7.752379, 113.179466],
        ["DPC PERADI Pasuruan", "Jawa Timur", -7.604964, 112.775117],
        ["DPC PERADI Jombang", "Jawa Timur", -7.554966, 112.232451],
        ["DPC PERADI Situbondo", "Jawa Timur", -7.716373, 114.211732],
        ["DPC PERADI Ponorogo", "Jawa Timur", -7.869094, 111.464466],
        ["DPC PERADI Blitar", "Jawa Timur", -8.104875, 112.188644],
        ["DPC PERADI Nganjuk", "Jawa Timur", -7.595512, 112.104018],
        ["DPC PERADI Tulungagung", "Jawa Timur", -8.066465, 111.898905],
        ["DPC PERADI Bojonegoro", "Jawa Timur", -7.161377, 111.883269],
        ["DPC PERADI Jember", "Jawa Timur", -8.173647, 113.707725],
        ["DPC PERADI Indramayu", "Jawa Barat", -6.332035, 108.334346],
        ["DPC PERADI Subang", "Jawa Barat", -6.558412, 107.768368],
        ["DPC PERADI Purwakarta", "Jawa Barat", -6.525810, 107.414721],
        ["DPC PERADI Pandeglang", "Banten", -6.285095, 106.117451],
        ["DPC PERADI Tangerang", "Banten", -6.179698, 106.660449],
        ["DPC PERADI Maumere", "NTT", -8.625526, 122.223063],
        ["DPC PERADI Banggai", "Sulawesi Tengah", -0.964655, 122.789231],
        ["DPC PERADI Gorontalo", "Gorontalo", 0.564495, 123.045493],
        ["DPC PERADI Manado", "Sulawesi Utara", 1.484072, 124.836979],
        ["DPC PERADI Palu", "Sulawesi Tengah", -0.897093, 119.878589],
        ["DPC PERADI Samarinda", "Kalimantan Timur", -0.475471, 117.161170],
        ["DPC PERADI Metro", "Lampung", -5.427180, 105.274025],
        ["DPC PERADI Muara Enim", "Sumatera Selatan", -3.662009, 103.782518],
        ["DPC PERADI Lahat Raya", "Sumatera Selatan", -3.780839, 103.562231],
        ["DPC PERADI Lubuklinggau", "Sumatera Selatan", -3.271736, 102.957438],
        ["DPC PERADI OKU Raya", "Sumatera Selatan", -4.120871, 104.182089],
        ["DPC PERADI Bungo-Tebo", "Jambi", -1.512534, 102.652846],
        ["DPC PERADI Dumai", "Riau", 1.678070, 101.450603],
        ["DPC PERADI Gunung Sitoli", "Law Office Syukur K. Hulu, S.H., M.H. & Rekan, Jl. Yos Sudarso No. 1 b, Desa ombolata Ulu, Kec. Gunungsitoli, Kota Gunungsitoli", 1.3055064403650964, 97.60460168444195],
        ["DPC PERADI Tapanuli Raya", "Jl. Dr. Gerhard Lumban Tobing No. 25, Tarutung 22411", 2.022570, 98.963021],
        ["DPC PERADI Labuhan Batu", "Lingkungan Asrama Haji (Ruko Depan Dinas Perijinan Labuhanbatu), Jl. SM. Raja Rantauprapat, Kel. Bakaranbatu, Kec. Rantau Selatan, Kab. Labuhan Batu", 2.076842, 99.854301],
        ["DPC PERADI Lhoksemawe", "Jl. Merdeka Timur No. 14, Cunda, Lhokseumawe, Aceh", 5.178397662564862, 97.13570339536874],
        ["DPC PERADI Binjai-Langkat ", "Jl. Ikan Tenggiri No. 04, Kel. Dataran Tinggi, Kec. Binjai Timur, Kota Binjai – Sumatera Utara ", 3.607077, 98.504650],
        ["DPC PERADI Banda Aceh", "Kantor Advokat Zulfikar Sawang & Associates, Jln. Cut Meutia No. 39, Banda Aceh", 5.558169264013223, 95.31740636934126],
        ["DPC PERADI Baubau", "Sulawesi Tenggara", -3.996598, 122.511685]
    ];

    // ============================================
    // INISIALISASI MAP
    // ============================================
    var map = L.map('map').setView([-2.548926, 118.0148634], 5.3);

    // Tile Layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright"></a> contributors',
        maxZoom: 18,
    }).addTo(map);

    // Custom Icon
    var peradiIcon = L.divIcon({
        className: 'custom-marker',
        html: '<i class="fas fa-gavel"></i>',
        iconSize: [20, 20],
        iconAnchor: [10, 20],
        popupAnchor: [0, -30]
    });

    // ============================================
    // TAMBAHKAN MARKER & ISI TABEL
    // ============================================
    var cabangList = document.getElementById('cabangList');
    var no = 1;

    cabangData.forEach(function(data) {
        var nama = data[0];
        var provinsi = data[1];
        var lat = data[2];
        var lng = data[3];

        // Tambah Marker ke Peta
        var marker = L.marker([lat, lng], { icon: peradiIcon })
            .addTo(map)
            .bindPopup('<strong>' + nama + '</strong><br>' + provinsi);

        // Tambah ke Tabel
        var row = document.createElement('tr');
        row.innerHTML = `
            <td>${no}</td>
            <td>${nama}</td>
            <td><span class="badge-provinsi">${provinsi}</span></td>
        `;
        cabangList.appendChild(row);
        no++;
    });

    // ============================================
    // SEARCH / FILTER TABEL (Opsional)
    // ============================================
    document.querySelector('.search-input').addEventListener('keyup', function() {
        var filter = this.value.toLowerCase();
        var rows = document.querySelectorAll('#cabangList tr');

        rows.forEach(function(row) {
            var text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
    });