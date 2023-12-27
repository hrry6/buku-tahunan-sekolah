<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SambutanKepsek extends Model
{
    use HasFactory;
    protected $table = "sambutan_kepsek";
    protected $primaryKey = "id_sambutan";
    protected $fillable = ["id_sekolah", "nama_kepsek", "sambutan", "foto_kepsek"];
    protected $timestamps = false;
}
