// resources/js/app.js

import './bootstrap';

// resources/js/app.js

// ============================================
// (Removed) Daftar semua gambar via import.meta.glob
// Problem: glob path/asset di app.js memicu error Vite (image tidak ditemukan / glob invalid)
// dan akhirnya asset lain (termasuk gambar slider) tidak ter-load.
// File gambar sebaiknya direferensikan langsung dari Blade atau public assets.
// ============================================






$(document).ready(function () {
    const el = $('#mainSlider');
    if (el.length) {
        el.carousel({ interval: 6000, pause: false });
    }
});

// Fungsi untuk tombol scroll horizontal (Carousel)
function scrollContainer(id, scrollAmount) {
    const container = document.getElementById(id);
    if (!container) return;

    // Pastikan scroll horizontal aktif
    if (typeof container.scrollBy === 'function') {
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
        return;
    }

    // fallback
    container.scrollLeft = container.scrollLeft + scrollAmount;
}



// Fungsi sederhana untuk tab (Hanya visual aktif state untuk demo)
const tabs = document.querySelectorAll('.tab-btn');
tabs.forEach(tab => {
    tab.addEventListener('click', function () {
        // Hapus aktif dari semua tab
        tabs.forEach(t => t.classList.remove('active'));
        // Tambah aktif ke yang diklik
        this.classList.add('active');

        // Di aplikasi nyata, ini akan menyembunyikan/menampilkan konten list berita di bawahnya
        // contoh: document.getElementById('news-content').innerHTML = "Konten baru...";
    });
});



document.addEventListener('DOMContentLoaded', function () {
    var triggerTabList = [].slice.call(document.querySelectorAll('#pills-tab button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })
});




function openSearch() {
    document.getElementById("searchOverlay").classList.add("active");
    // Berikan fokus otomatis ke input saat terbuka
    setTimeout(() => {
        document.querySelector(".search-input").focus();
    }, 300);
}

function closeSearch() {
    document.getElementById("searchOverlay").classList.remove("active");
}

// Menutup overlay dengan tombol ESC
document.addEventListener('keydown', function (event) {
    if (event.key === "Escape") {
        closeSearch();
    }
});


// Filter Pengumuman (sama seperti artikel)
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        // hanya jalan jika ada elemen target
        if (!this.dataset) return;

        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        const filter = this.dataset.filter;
        const cards = document.querySelectorAll('.announcement-card');
        if (!cards.length) return;

        cards.forEach(card => {
            const category = card.dataset.category;
            if (filter === 'all' || filter === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });
});



// Search Pengumuman
function searchAnnouncement() {
    const query = document.getElementById('searchAnnouncement').value.toLowerCase();
    const cards = document.querySelectorAll('.announcement-card');

    cards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        const excerpt = card.querySelector('.card-excerpt').textContent.toLowerCase();

        if (title.includes(query) || excerpt.includes(query) || query === '') {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}


// Filter Kegiatan
(function initKegiatanFilter() {
    const buttons = document.querySelectorAll('.filter-btn');
    if (!buttons.length) return;

    buttons.forEach(btn => {
        btn.addEventListener('click', function () {
            const dpnEl = document.getElementById('kegiatan-dpn');
            const cabangEl = document.getElementById('kegiatan-cabang');

            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;
            const cards = document.querySelectorAll('.kegiatan-card');

            cards.forEach(card => {
                const category = card.dataset.category;
                if (filter === 'all' || filter === category) {
                    if (card.parentElement) card.parentElement.style.display = 'block';
                } else {
                    if (card.parentElement) card.parentElement.style.display = 'none';
                }
            });

            if (dpnEl) dpnEl.style.display = (filter === 'all' || filter === 'dpn') ? 'flex' : 'none';
            if (cabangEl) cabangEl.style.display = (filter === 'all' || filter === 'cabang') ? 'flex' : 'none';
        });
    });
})();




    // ============================================
    // ACTIVE LINK DI SIDEBAR SAAT SCROLL
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        const tocLinks = document.querySelectorAll('.toc-list a');
        const sections = document.querySelectorAll('.pasal-wrapper, .signature-section');

        function updateActiveLink() {
            let currentId = '';
            const scrollPosition = window.scrollY + 120; // offset untuk sticky header

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    currentId = section.getAttribute('id');
                }
            });

            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + currentId) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);
        window.addEventListener('load', updateActiveLink);

        // Smooth scroll untuk link TOC
        tocLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId && targetId !== '#') {
                    const target = document.querySelector(targetId);
                    if (target) {
                        const headerOffset = 100;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    });




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
    // DATA CABANG + INISIALISASI MAP
    // ============================================
    // Dinonaktifkan dari app.js.
    // Map cabang sekarang dimuat via `resources/js/maps-init.js` dan hanya jalan di halaman cabang.

