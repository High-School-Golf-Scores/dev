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
        Schema::create('golf_holes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('hole_number');
            $table->unsignedInteger('par');
            $table->unsignedInteger('distance_red');
            $table->unsignedInteger('distance_white');
            $table->unsignedInteger('distance_blue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('golf_holes');
    }
};
