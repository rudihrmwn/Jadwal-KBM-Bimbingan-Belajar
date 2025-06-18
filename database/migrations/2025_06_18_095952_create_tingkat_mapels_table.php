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
        Schema::create('tingkat_mapels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("tingkat_id");
            $table->unsignedBigInteger("mapel_id");
            
            $table->foreign("tingkat_id")->references("id")->on("tingkats")->onDelete("cascade");
            $table->foreign("mapel_id")->references("id")->on("mapels")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tingkat_mapels');
    }
};
