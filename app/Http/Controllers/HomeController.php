<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Slider;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil semua data slider yang berstatus aktif (status = '1')
    // Kita urutkan berdasarkan yang paling baru ditambahkan
    $sliders = Slider::where('status', '1')->orderBy('sliderid', 'desc')->get();

    // 2. Ambil 5 berita terbaru (kode kita yang sebelumnya)
    $beritaTerbaru = Pengumuman::with('kategori')
                            ->orderBy('create_date', 'desc')
                            ->take(5)
                            ->get();

    $video = Video::where('published', '1')
                    ->orderBy('videoid', 'desc')->get()
                    ->take(5);
                            
        return view('home', compact('sliders', 'beritaTerbaru', 'video'));
    }
}