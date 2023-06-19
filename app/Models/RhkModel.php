<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BidangModel;
use App\Models\User;

class RhkModel extends Model
{
    use HasFactory;
    protected $table = 'rhk';
    protected $fillable = [
        'nama_rhk',
        'bidang_id',
        'user_id'
    ];

    public function dt_bidang()
    {
        return $this->belongsTo(BidangModel::class, 'bidang_id');
    }
    public function dt_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
