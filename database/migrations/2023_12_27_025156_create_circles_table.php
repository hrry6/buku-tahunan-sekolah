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
        Schema::create('circle', function (Blueprint $table) {
            $table->integer('id_circle', true);
            $table->integer('id_sekolah');
            $table->integer('id_kelas');
            $table->text('foto_circle');
            $table->integer('urutan');

            //Foreign Key
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('circle');
    }
};
