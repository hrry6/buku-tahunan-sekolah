<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = "fasilitas";
    protected $primaryKey = "id_fasilitas";
    protected $fillable = ["id_sekolah", "fasilitas", "foto_fasilitas"];
    public $timestamps = false;
}
