<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Pelatihan;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function susunan()
    {
        return view('susunan');
    }

    public function pkpa()
    {
        return view('pkpa');
    }

    public function cabang()
    {
        return view('cabang');
    }

}