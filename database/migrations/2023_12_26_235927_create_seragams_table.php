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
        Schema::create('seragam', function (Blueprint $table) {
            $table->integer('id_seragam', true);
            $table->integer('id_sekolah');
            $table->string('seragam', 60);
            $table->text('foto_seragam');

            //Foreign Key
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seragam');
    }
};
