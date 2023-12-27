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
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id_siswa', true);
            $table->integer('id_sekolah');
            $table->integer('id_circle');
            $table->string('nama_siswa', 60);
            $table->text('quotes');
            $table->string('media_sosial',60);
            $table->text('foto_siswa');

            //Foreign Key
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_circle')->references('id_circle')->on('circle')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
