<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Pelatihan;

class KegiatanController extends Controller
{
    public function index()
    {
        
        return view('kegiatan');
    }

    public function dpn()
    {
        
        return view('kegiatan-dpn');
    }

    public function cabang()
    {
        
        return view('kegiatan-cabang');
    }
    
    public function bekelanjutan()
    {
        
        return view('berkelanjutan');
    }

    public function detail()
    {
        
        return view('detail-kegiatan');
    }

}