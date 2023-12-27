<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanSekolah extends Model
{
    use HasFactory;
    protected $table = "karyawan_sekolah";
    protected $primaryKey = "id_karyawan";
    protected $fillable = ["id_sekolah", "nama_karyawan", "status", "quotes", "media_sosial", "foto_karyawan"];
    public $timestamps = false;
}
