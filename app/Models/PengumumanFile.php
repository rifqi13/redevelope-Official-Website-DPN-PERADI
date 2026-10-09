<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengumumanFile extends Model
{
    protected $table = 'tbl_berita_file';
    protected $primaryKey = 'beritafileid';
    public $timestamps = false;

    protected $fillable = [
        'beritaid', 'create_date', 'create_userid', 'update_date', 
        'update_userid', 'beritafile', 'nama', 'keterangan'
    ];

    /**
     * RELASI: File ini milik dari sebuah Berita
     */
    public function berita()
    {
        return $this->belongsTo(Pengumuman::class, 'beritaid', 'beritaid');
    }
}