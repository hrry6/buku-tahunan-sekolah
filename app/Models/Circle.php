<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    use HasFactory;
    protected $table = "circle";
    protected $primaryKey = "id_circle";
    protected $fillable = ["id_sekolah", "id_kelas", "foto_circle", "urutan"];
    public $timestamps = false;
}
