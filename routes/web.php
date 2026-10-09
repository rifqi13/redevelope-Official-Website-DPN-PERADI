<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SeminarpelatihanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\BeritaartikelController;
use App\Http\Controllers\VideoController;



// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'detail'])->name('pengumuman.detail');
Route::get('/pengumuman/kategori/{slug}', [PengumumanController::class, 'byKategori'])->name('pengumuman.kategori.slug');

// Kegiatan
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/dpn', [KegiatanController::class, 'dpn'])->name('kegiatan.dpn');
Route::get('/kegiatan/cabang', [KegiatanController::class, 'cabang'])->name('kegiatan.cabang');
Route::get('/kegiatan/berkelanjutan', [KegiatanController::class, 'bekelanjutan'])->name('kegiatan.berkelanjutan');
Route::get('/kegiatan/{id}', [KegiatanController::class, 'detail'])->name('kegiatan.detail');

// Seminar dan Pelatihan
Route::prefix('seminar-pelatihan')->group(function () {
    Route::get('/', [SeminarpelatihanController::class, 'index'])->name('seminar-pelatihan.index');
    Route::get('/{id}', [SeminarpelatihanController::class, 'show'])->name('seminar-pelatihan.show');
});

// Profil
Route::prefix('profil')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/susunan', [ProfilController::class, 'susunan'])->name('profil.susunan');
    Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('profil.sejarah');
    Route::get('/pkpa', [ProfilController::class, 'pkpa'])->name('profil.pkpa-seluruh-indonesia');
    Route::get('/cabang', [ProfilController::class, 'cabang'])->name('profil.cabang');
    Route::get('/{id}', [ProfilController::class, 'show'])->name('profil.show');
});

// Peraturan
Route::prefix('peraturan')->group(function () {
    Route::get('/', [PeraturanController::class, 'index'])->name('peraturan.index');
    Route::get('/kode-etik', [PeraturanController::class, 'kodeetik'])->name('peraturan.kode-etik');
    Route::get('/undang-undang', [PeraturanController::class, 'undangundang'])->name('peraturan.undang-undang');
});

// Berita dan Artikel
Route::prefix('berita-artikel')->group(function () {
    Route::get('/', [BeritaartikelController::class, 'index'])->name('berita-artikel.index');
    Route::get('/berita', [BeritaartikelController::class, 'berita'])->name('berita-artikel.berita');
    Route::get('/artikel', [BeritaartikelController::class, 'artikel'])->name('berita-artikel.artikel');

});

//Video
Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::get('/video/{alias}', [VideoController::class, 'detail'])->name('video.detail');