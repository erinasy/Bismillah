<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\KategoriModel;
use App\Models\BidangModel;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'bidang_id',
        'kategori_id',
        'email',
        'password',
        'role',

    ];

    public function dt_Bidang()
    {
        return $this->belongsTo(BidangModel::class, 'bidang_id');
    }
    public function dt_Kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function role(): Attribute{
        return new Attribute(
            get: fn ($value) => ["admin", "user"][$value],
        );
    }
}
