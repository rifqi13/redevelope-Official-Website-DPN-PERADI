<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Models\Pelatihan;

class SeminarpelatihanController extends Controller
{
    public function index()
    {
        
        return view('seminarpelatihan');
    }
}