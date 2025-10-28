<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'status',
        'activity_status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Scope untuk user aktif
    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }

    // Scope untuk user dengan role tertentu
    public function scopeRole($query, $roleName)
    {
        return $query->whereHas('role', function($q) use ($roleName) {
            $q->where('name', $roleName);
        });
    }

    // Cek apakah user adalah PPKHA
    public function isPPKHA()
    {
        return $this->role && $this->role->name === 'ppkha';
    }

    // Cek apakah user adalah Mahasiswa
    public function isMahasiswa()
    {
        return $this->role && $this->role->name === 'mahasiswa';
    }

    // Cek apakah user adalah Dosen
    public function isDosen()
    {
        return $this->role && $this->role->name === 'dosen';
    }

    // Cek apakah user adalah Lulusan
    public function isLulusan()
    {
        return $this->role && $this->role->name === 'lulusan';
    }

    // Relasi
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}