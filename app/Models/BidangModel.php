<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriModel;
use App\Models\User;
use App\Models\RhkModel;

class BidangModel extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    protected $fillable = [
        'nama_bidang',
        'kategori_id'
    ];

    public function dt_kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id');
    }
    public function dt_user()
    {
        return $this->HasMany(User::class, 'id');
    }
    public function dt_rhk()
    {
        return $this->HasMany(RhkModel::class, 'id');
    }
}
