<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Akun extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "akun";
    protected $primaryKey = "id_akun";
    protected $fillable = ["id_sekolah","username", "password", "role"];
    protected $casts = [
        'password' => 'hashed'
    ];
    public $timestamps = false;
}
