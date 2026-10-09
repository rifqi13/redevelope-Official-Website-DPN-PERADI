<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengumuman2 extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Nama tabel yang digunakan
     */
    protected $table = 'tbl_pengumuman';

    /**
     * Primary key
     */
    protected $primaryKey = 'beritaid';

    /**
     * Tipe primary key
     */
    protected $keyType = 'string';

    /**
     * Apakah primary key auto-increment
     */
    
    public $incrementing = false;

    /**
     * Timestamps
     */
    public $timestamps = true;

    /**
     * Format tanggal
     */
    protected $dates = [
        'tanggal',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Atribut yang bisa diisi (mass assignment)
     */
    protected $fillable = [
        'beritakategoriid', 'judul', 'slug', 'isi', 'create_date', 
        'create_userid', 'update_date', 'update_userid'
    ];

    /**
     * Atribut yang tidak boleh diisi
     */
    protected $guarded = [
        'beritaid',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Atribut yang harus di-cast ke tipe data tertentu
     */
    protected $casts = [
        'tanggal' => 'date:Y-m-d',
        'is_active' => 'boolean',
        'views' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    /**
     * Atribut default values
     */
    protected $attributes = [
        'is_active' => true,
        'views' => 0,
        'status' => 'draft'
    ];

    /**
     * ==================== RELASI ====================
     */
    
    /**
     * Relasi ke User (pembuat)
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relasi ke User (pengupdate)
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Relasi ke komentar (jika ada)
     */
    // public function comments()
    // {
    //     return $this->hasMany(Komentar::class);
    // }

    /**
     * ==================== SCOPES ====================
     */

    /**
     * Scope untuk pengumuman aktif
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope untuk pengumuman tidak aktif
     */
    public function scopeInactive($query)
    {
        return $query->where('is_active', false);
    }

    /**
     * Scope untuk pengumuman dengan status published
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope untuk pengumuman dengan status draft
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Scope untuk pengumuman terbaru
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('tanggal', 'desc');
    }

    /**
     * Scope untuk pengumuman berdasarkan kategori
     */
    public function scopeByCategory($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }

    /**
     * Scope untuk pencarian
     */
    public function scopeSearch($query, $keyword)
    {
        return $query->where('judul', 'LIKE', "%{$keyword}%")
                    ->orWhere('isi', 'LIKE', "%{$keyword}%");
    }

    /**
     * Scope untuk pengumuman berdasarkan rentang tanggal
     */
    public function scopeDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('tanggal', [$startDate, $endDate]);
    }

    /**
     * Scope untuk pengumuman yang populer (banyak dilihat)
     */
    public function scopePopular($query, $limit = 5)
    {
        return $query->active()
                    ->published()
                    ->orderBy('views', 'desc')
                    ->limit($limit);
    }

    /**
     * ==================== ACCESSORS & MUTATORS ====================
     */

    /**
     * Accessor: Mendapatkan judul yang sudah diformat
     */
    public function getFormattedJudulAttribute()
    {
        return ucwords(strtolower($this->judul));
    }

    /**
     * Accessor: Mendapatkan isi yang dipotong (excerpt)
     */
    public function getExcerptAttribute($length = 100)
    {
        return Str::limit(strip_tags($this->isi), $length);
    }

    /**
     * Accessor: Mendapatkan tanggal dalam format Indonesia
     */
    public function getTanggalFormattedAttribute()
    {
        return $this->tanggal->translatedFormat('l, d F Y');
    }

    /**
     * Accessor: Mendapatkan waktu pembuatan dalam format Indonesia
     */
    public function getCreatedAtFormattedAttribute()
    {
        return $this->created_at->translatedFormat('d F Y H:i');
    }

    /**
     * Accessor: Mendapatkan URL gambar
     */
    public function getGambarUrlAttribute()
    {
        if ($this->gambar) {
            return asset('storage/pengumuman/' . $this->gambar);
        }
        return asset('images/default-pengumuman.jpg');
    }

    /**
     * Accessor: Mendapatkan status badge
     */
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'draft' => 'badge-secondary',
            'published' => 'badge-success',
            'archived' => 'badge-warning'
        ];
        return $badges[$this->status] ?? 'badge-secondary';
    }

    /**
     * Accessor: Mendapatkan label status
     */
    public function getStatusLabelAttribute()
    {
        $labels = [
            'draft' => 'Draft',
            'published' => 'Dipublikasikan',
            'archived' => 'Diarsipkan'
        ];
        return $labels[$this->status] ?? $this->status;
    }

    /**
     * Accessor: Mendapatkan kategori label
     */
    public function getKategoriLabelAttribute()
    {
        $categories = [
            'umum' => 'Umum',
            'organisasi' => 'Organisasi',
            'kegiatan' => 'Kegiatan',
            'pelatihan' => 'Pelatihan',
            'hukum' => 'Hukum',
            'kebijakan' => 'Kebijakan'
        ];
        return $categories[$this->kategori] ?? $this->kategori;
    }

    /**
     * Mutator: Membuat slug otomatis dari judul
     */
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Mutator: Memastikan tanggal dalam format yang benar
     */
    public function setTanggalAttribute($value)
    {
        $this->attributes['tanggal'] = Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * ==================== HELPER METHODS ====================
     */

    /**
     * Cek apakah pengumuman aktif
     */
    public function isActive()
    {
        return $this->is_active && $this->status === 'published';
    }

    /**
     * Cek apakah pengumuman sudah dipublikasikan
     */
    public function isPublished()
    {
        return $this->status === 'published';
    }

    /**
     * Cek apakah pengumuman masih draft
     */
    public function isDraft()
    {
        return $this->status === 'draft';
    }

    /**
     * Increment views
     */
    public function incrementViews()
    {
        $this->increment('views');
    }

    /**
     * Mendapatkan pengumuman terkait (berdasarkan kategori)
     */
    public function related($limit = 3)
    {
        return self::where('id', '!=', $this->id)
                    ->where('kategori', $this->kategori)
                    ->active()
                    ->published()
                    ->latest()
                    ->limit($limit)
                    ->get();
    }

    /**
     * Mendapatkan pengumuman sebelumnya
     */
    public function previous()
    {
        return self::where('tanggal', '<', $this->tanggal)
                    ->active()
                    ->published()
                    ->latest()
                    ->first();
    }

    /**
     * Mendapatkan pengumuman selanjutnya
     */
    public function next()
    {
        return self::where('tanggal', '>', $this->tanggal)
                    ->active()
                    ->published()
                    ->latest()
                    ->first();
    }

    /**
     * ==================== STATIC METHODS ====================
     */

    /**
     * Mendapatkan daftar kategori
     */
    public static function getCategories()
    {
        return [
            'umum' => 'Umum',
            'organisasi' => 'Organisasi',
            'kegiatan' => 'Kegiatan',
            'pelatihan' => 'Pelatihan',
            'hukum' => 'Hukum',
            'kebijakan' => 'Kebijakan'
        ];
    }

    /**
     * Mendapatkan daftar status
     */
    public static function getStatuses()
    {
        return [
            'draft' => 'Draft',
            'published' => 'Dipublikasikan',
            'archived' => 'Diarsipkan'
        ];
    }

    /**
     * Mendapatkan pengumuman terbaru dengan limit
     */
    public static function getLatest($limit = 5)
    {
        return self::active()
                    ->published()
                    ->latest()
                    ->limit($limit)
                    ->get();
    }

    /**
     * Mendapatkan pengumuman populer
     */
    public static function getPopular($limit = 5)
    {
        return self::active()
                    ->published()
                    ->orderBy('views', 'desc')
                    ->limit($limit)
                    ->get();
    }

    /**
     * Mendapatkan statistik pengumuman
     */
    public static function getStats()
    {
        return [
            'total' => self::count(),
            'active' => self::active()->count(),
            'published' => self::published()->count(),
            'draft' => self::draft()->count(),
            'today' => self::whereDate('tanggal', today())->count(),
        ];
    }
}