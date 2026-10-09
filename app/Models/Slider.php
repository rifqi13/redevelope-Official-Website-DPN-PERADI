<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // Nama tabel di database MySQL Anda
    protected $table = 'tbl_slider';

    // Primary key kustom Anda
    protected $primaryKey = 'sliderid';

    // Matikan timestamp default Laravel
    public $timestamps = false;

    protected $fillable = [
        'create_date', 'create_userid', 'update_date', 'update_userid',
        'gambar', 'url', 'keterangan', 'status'
    ];

    /**
     * Scope untuk mengambil slider yang aktif saja
     */
    public function scopeAktif($query)
    {
        return $query->where('status', '1');
    }
}