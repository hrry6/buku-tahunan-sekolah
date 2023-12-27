<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $primaryKey = "id_siswa";
    protected $fillable = ["id_sekolah", "id_circle", "nama_siswa", "quotes", "media_sosial", "foto_siswa"];
    public $timestamps = false;
}
