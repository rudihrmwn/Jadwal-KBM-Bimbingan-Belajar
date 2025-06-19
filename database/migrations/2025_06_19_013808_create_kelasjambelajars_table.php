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
        Schema::create('kelasjambelajars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('day');
            $table->integer('room');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('jam_id');

            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('jam_id')->references('id')->on('jams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelasjambelajars');
    }
};
