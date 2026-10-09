<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\PengumumanKategori;
use App\Models\Pelatihan;

class PengumumanController extends Controller
{
    public function index()
    {
        
        return view('pengumuman');
    }

    

    public function pengangkatan()
    {
        
        return view('pengangkatan');
    }

     public function ujian()
    {
        
        return view('ujian');
    }

    // Fungsi untuk Menampilkan Halaman Detail Berita & File Lampirannya
    public function detail($alias)
    {
    // Menggunakan kolom 'alias' sesuai database Anda, bukan 'slug'
    $berita = Pengumuman::with(['kategori', 'files'])
                    ->where('alias', $alias) 
                    ->firstOrFail();

    return view('pengumuman.detail', compact('berita'));
    }

/**
     * ==========================================
     * METHOD 2: Filter by Slug (SEO Friendly)
     * ==========================================
     */
    

    public function byKategori($alias)
{
    // 1. Cari kategori berdasarkan alias/slug URL
    $kategori = \App\Models\PengumumanKategori::where('alias', $alias)->firstOrFail();

    // 2. Ambil berita terkait (Baris 57 yang bermasalah)
    $beritaList = \App\Models\Pengumuman::where('published', 1)
        ->whereRaw("FIND_IN_SET(?, beritakategoriid)", [$kategori->beritakategoriid])
        // UBAH 'created_at' MENJADI 'create_date' DI SINI:
        ->orderBy('create_date', 'desc') 
        ->paginate(12);

    return view('pengumuman.kategori', compact('kategori', 'beritaList'));
}
    
}