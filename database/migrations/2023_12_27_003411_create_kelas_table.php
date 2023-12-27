<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->integer('id_kelas', true);
            $table->integer('id_sekolah');
            $table->integer('id_jurusan');
            $table->integer('id_wali_kelas');
            $table->string('nama_kelas', 60);
            $table->text('foto_kelas');

            //Foreign Key
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusan')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_wali_kelas')->references('id_karyawan')->on('karyawan_sekolah')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
