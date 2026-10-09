<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // Nama tabel di database MySQL Anda
    protected $table = 'tbl_video';

    // Primary key kustom Anda
    protected $primaryKey = 'videoid';

    // Matikan timestamp default Laravel
    public $timestamps = false;

    protected $fillable = [
        'create_date', 'create_userid', 'update_date', 'update_userid',
        'nama','alias','tipe', 'video', 'keterangan', 'thumb', 'published'
    ];

    /**
     * Scope untuk mengambil video yang aktif saja
     */
    public function scopeAktif($query)
    {
        return $query->where('published', '1');
    }
}