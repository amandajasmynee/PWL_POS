<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'm_kategori'; // Nama tabel
    protected $primaryKey = 'kategori_id'; // Primary key
    protected $fillable = ['kategori_kode', 'kategori_nama']; // Kolom yang bisa diisi
    // Relasi dengan UserModel jika diperlukan
    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'kategori_id', 'kategori_id'); 
    }
}