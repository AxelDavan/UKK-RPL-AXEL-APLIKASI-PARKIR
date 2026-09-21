<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'nomor_telepon',
        'nomor_unit',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function kunjunganTamus()
    {
        return $this->hasMany(KunjunganTamu::class);
    }

    public function chats()
    {
        return $table = $this->hasMany(\App\Models\Chat::class, 'user_id');
    }

    protected static function booted()
    {
        static::deleting(function ($user) {
            // Cari pemesanan aktif milik user ini, lalu balikin slotnya jadi tersedia
            $pemesanan = \App\Models\Pemesanan::where('user_id', $user->id)->get();
            
            foreach ($pemesanan as $p) {
                if ($p->slot_parkir_id) {
                    \App\Models\SlotParkir::where('id', $p->slot_parkir_id)->update([
                        'status' => 'tersedia'
                    ]);
                }
            }
        });
    }
}
