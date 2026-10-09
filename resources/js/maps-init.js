// init maps cabang - hanya jalan jika halaman punya elemen yang dibutuhkan

function initCabangMap() {
  const mapEl = document.getElementById('map');
  const cabangList = document.getElementById('cabangList');
  if (!mapEl || !cabangList) return;

  // Leaflet wajib ada
  if (typeof window.L === 'undefined' || !window.L.map) return;

  const cabangData = [
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
    ["DPC PERADI Padang Lawas Raya", "Sumatera Utara", 1.051696, 99.733410]
  ];

  // Inisialisasi map
  const map = window.L.map('map').setView([-2.548926, 118.0148634], 5.3);

  window.L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    maxZoom: 18,
  }).addTo(map);

  const peradiIcon = window.L.divIcon({
    className: 'custom-marker',
    html: '<i class="fas fa-gavel"></i>',
    iconSize: [20, 20],
    iconAnchor: [10, 20],
    popupAnchor: [0, -30],
  });

  cabangList.innerHTML = '';
  let no = 1;

  cabangData.forEach(([nama, provinsi, lat, lng]) => {
    window.L.marker([lat, lng], { icon: peradiIcon })
      .addTo(map)
      .bindPopup(`<strong>${nama}</strong><br>${provinsi}`);

    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${no}</td>
      <td>${nama}</td>
      <td><span class="badge-provinsi">${provinsi}</span></td>
    `;
    cabangList.appendChild(row);
    no++;
  });
}

document.addEventListener('DOMContentLoaded', initCabangMap);

