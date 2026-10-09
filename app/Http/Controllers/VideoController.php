<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        return view('video');
    }

    public function detail($alias)
    {
    // Menggunakan kolom 'alias' sesuai database Anda, bukan 'slug'
    $video = Video::where('alias', $alias) 
                    ->firstOrFail();

     $video_lain = Video::where('published', '1')
                    ->orderBy('videoid', 'desc')
                    ->paginate(6);

                    

    return view('detail-video', compact('video', 'video_lain'));
    }
}