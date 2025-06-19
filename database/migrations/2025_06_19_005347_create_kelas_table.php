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
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->unsignedBigInteger('lokasi_id');
            $table->unsignedBigInteger('tingkat_id');

            $table->foreign('lokasi_id')->references('id')->on('lokasis')->onDelete('cascade');
            $table->foreign('tingkat_id')->references('id')->on('tingkats')->onDelete('cascade');
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
