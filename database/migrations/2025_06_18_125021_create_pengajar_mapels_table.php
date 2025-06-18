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
        Schema::create('pengajar_mapels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("pengajar_id");
            $table->unsignedBigInteger("mapel_id");
            
            $table->foreign("pengajar_id")->references("id")->on("pengajars")->onDelete("cascade");
            $table->foreign("mapel_id")->references("id")->on("mapels")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajar_mapels');
    }
};
