<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Pelatihan;

class BeritaartikelController extends Controller
{
    public function index()
    {
        return view('berita-artikel');
    }

    public function berita()
    {
        return view('berita');
    }

     public function artikel()
    {
        return view('artikel');
    }

   

}