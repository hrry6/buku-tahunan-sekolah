<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $primaryKey = "id_kelas";
    protected $fillable = ["id_sekolah", "id_jurusan", "id_wali_kelas", "nama_kelas", "foto_kelas"];
    public $timestamps = false;
}
