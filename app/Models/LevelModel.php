<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level';
    protected $primaryKey = 'level_id';

    protected $fillable = ['level_id', 'level_kode', 'level_nama'];

    // Relasi dengan UserModel
    public function users(): BelongsTo
    {
        return $this->BelongsTo(UserModel::class, 'level_id', 'level_id');
    }
}