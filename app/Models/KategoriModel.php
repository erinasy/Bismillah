<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BidangModel;
use App\Models\User;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'nama_kategori',
    ];

    public function dt_bidang()
    {
        return $this->HasMany(BidangModel::class, 'id');
    }
    public function dt_user()
    {
        return $this->HasMany(User::class, 'id');
    }
}
