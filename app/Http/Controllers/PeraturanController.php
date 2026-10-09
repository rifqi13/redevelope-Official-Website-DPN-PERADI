<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Pelatihan;

class PeraturanController extends Controller
{
    public function index()
    {
        return view('peraturan');
    }

    public function kodeetik()
    {
        return view('kode-etik');
    }

    public function undangundang()
    {
        return view('undang-undang');
    }

   

}