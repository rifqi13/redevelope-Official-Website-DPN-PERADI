<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'tbl_berita';
    protected $primaryKey = 'beritaid';
    public $timestamps = false;

    // Supaya primary key varchar(11) tidak dianggap integer otomatis oleh Laravel
    protected $keyType = 'string';
    public $incrementing = false; 

    protected $fillable = [
        'beritakategoriid', 'judul', 'alias', 'isi', 'create_date', 
        'create_userid', 'update_date', 'update_userid'
    ];

    /**
     * RELASI: Berita ini termasuk dalam sebuah Kategori (Kebalikan dari hasMany)
     */
    // Di dalam Model Berita / Pengumuman Anda
    public function kategori()
    {
        // Parameter: (NamaModelTarget, ForeignKeyDiTabelIni, OwnerKeyDiTabelTarget)
        return $this->belongsTo(PengumumanKategori::class, 'beritakategoriid', 'beritakategoriid');
    }

    /**
     * Mendapatkan list kategori
     */
    public function getKategoriList()
    {
        if (empty($this->beritakategoriid)) {
            return collect([]);
        }

        $ids = array_map('trim', explode(',', $this->beritakategoriid));
        return PengumumanKategori::whereIn('beritakategoriid', $ids)->get();
    }

    /**
     * Relasi ke user pembuat
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'create_userid', 'id');
    }

    /**
     * Relasi ke user updater
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'update_userid', 'id');
    }

    /**
     * Mendapatkan ID kategori sebagai array
     */
    public function getKategoriIdsAttribute()
    {
        if (empty($this->beritakategoriid)) {
            return [];
        }
        return array_map('trim', explode(',', $this->beritakategoriid));
    }

    /**
     * Mendapatkan nama kategori
     */
    public function getKategoriNamesAttribute()
    {
        $kategoris = $this->getKategoriList();
        return $kategoris->pluck('nama')->implode(', ');
    }

    /**
     * Scope: Berita published
     */
    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }

    /**
     * Scope: Filter by kategori
     */
    public function scopeByKategori($query, $kategoriId)
    {
        return $query->whereRaw("FIND_IN_SET(?, beritakategoriid)", [$kategoriId]);
    }

    /**
     * Scope: Filter by multiple kategori
     */
    public function scopeByKategoris($query, array $kategoriIds)
    {
        return $query->where(function($q) use ($kategoriIds) {
            foreach ($kategoriIds as $id) {
                $q->orWhereRaw("FIND_IN_SET(?, beritakategoriid)", [$id]);
            }
        });
    }


    /**
     * Cek apakah berita memiliki kategori
     */
    public function hasKategori($kategoriId)
    {
        $ids = $this->getKategoriIdsAttribute();
        return in_array($kategoriId, $ids);
    }

    /**
     * Tambah view
     */
    public function incrementViews()
    {
        $this->jml_view = (int)$this->jml_view + 1;
        $this->save();
    }

    /**
     * Mendapatkan berita sebelumnya
     */
    public function previous()
    {
        return self::published()
                    ->where('create_date', '<', $this->create_date)
                    ->latest()
                    ->first();
    }

    /**
     * Mendapatkan berita selanjutnya
     */
    public function next()
    {
        return self::published()
                    ->where('create_date', '>', $this->create_date)
                    ->first();
    }
    /**
     * RELASI: Satu Berita bisa memuat Banyak File Lampiran
     */
    public function files()
    {
        return $this->hasMany(PengumumanFile::class, 'beritaid', 'beritaid');
    }

    
}