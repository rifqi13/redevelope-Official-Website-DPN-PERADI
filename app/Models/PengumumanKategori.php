<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengumumanKategori extends Model
{
    /**
     * Nama tabel
     */
    protected $table = 'tbl_berita_kategori';

    /**
     * Primary key
     */
    protected $primaryKey = 'beritakategoriid';

    /**
     * Timestamps (nonaktifkan karena pakai manual)
     */
    public $timestamps = false;

    /**
     * Kolom yang bisa diisi
     */
    protected $fillable = [
        'beritakategoriid',
        'create_date',
        'create_userid',
        'update_date',
        'update_userid',
        'nama',
        'alias',
        'keterangan',
        'parentid'
    ];

    /**
     * Casting tipe data
     */
    protected $casts = [
        'beritakategoriid' => 'integer',
        'parentid' => 'integer',
        'create_date' => 'datetime',
        'update_date' => 'datetime'
    ];

    /**
     * ==================== RELASI ====================
     */
    
    /**
     * Relasi ke Berita
     */
    public function berita()
    {
        return $this->hasMany(Pengumuman::class, 'beritakategoriid', 'beritakategoriid')
                    ->where('published', '1');
    }

    /**
     * Relasi ke parent kategori (self-referencing)
     */
    public function parent()
    {
        return $this->belongsTo(PengumumanKategori::class, 'parentid', 'beritakategoriid');
    }

    /**
     * Relasi ke child kategori
     */
    public function children()
    {
        return $this->hasMany(PengumumanKategori::class, 'parentid', 'beritakategoriid');
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
     * ==================== ACCESSORS ====================
     */
    
    /**
     * Mendapatkan jumlah berita
     */
    public function getJumlahBeritaAttribute()
    {
        return $this->berita()->count();
    }

    /**
     * Mendapatkan URL kategori
     */
    public function getUrlAttribute()
    {
        return route('kategori.show', $this->alias);
    }

    

    /**
     * ==================== SCOPES ====================
     */
    
    /**
     * Scope: Kategori aktif (published = 1)
     */
    public function scopeActive($query)
    {
        return $query->whereHas('berita', function($q) {
            $q->where('published', '1');
        });
    }

    /**
     * Scope: Parent kategori
     */
    public function scopeParent($query)
    {
        return $query->where('parentid', 0);
    }

    /**
     * Scope: Child kategori
     */
    public function scopeChild($query)
    {
        return $query->where('parentid', '>', 0);
    }

    /**
     * ==================== HELPER METHODS ====================
     */
    
    /**
     * Cek apakah ini parent
     */
    public function isParent()
    {
        return $this->parentid == 0;
    }

    /**
     * Cek apakah ini child
     */
    public function isChild()
    {
        return $this->parentid > 0;
    }

    /**
     * Mendapatkan semua child categories
     */
    public function getAllChildren()
    {
        return $this->children()->with('children')->get();
    }

    /**
     * Mendapatkan semua ID child (rekursif)
     */
    public function getChildIds()
    {
        $ids = [$this->beritakategoriid];
        foreach ($this->children as $child) {
            $ids = array_merge($ids, $child->getChildIds());
        }
        return $ids;
    }

    /**
     * Mendapatkan hierarchy path
     */
    public function getPathAttribute()
    {
        $path = [$this->nama];
        $parent = $this->parent;
        while ($parent) {
            array_unshift($path, $parent->nama);
            $parent = $parent->parent;
        }
        return implode(' > ', $path);
    }

    /**
     * ==================== STATIC METHODS ====================
     */
    
    /**
     * Mendapatkan dropdown options
     */
    public static function getDropdown()
    {
        return self::orderBy('nama')->pluck('nama', 'beritakategoriid')->toArray();
    }

    /**
     * Mendapatkan tree kategori
     */
    public static function getTree()
    {
        $categories = self::with('children')->where('parentid', 0)->get();
        return $categories;
    }
}