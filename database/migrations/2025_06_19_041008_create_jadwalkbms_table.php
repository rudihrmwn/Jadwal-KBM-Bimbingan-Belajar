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
        Schema::create('jadwalkbms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date');
            $table->unsignedBigInteger('kelas_id');
            $table->integer('day');
            $table->unsignedBigInteger('jam_id');
            $table->integer('room');
            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('pengajar_id');
            $table->integer('pertemuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalkbms');
    }
};
