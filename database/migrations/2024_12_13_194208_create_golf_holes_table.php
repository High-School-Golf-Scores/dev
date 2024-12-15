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
        Schema::disableForeignKeyConstraints();

        Schema::create('golf_holes', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->nullable();
            $table->integer('hole_number');
            $table->integer('par');
            $table->integer('distance_red');
            $table->integer('distance_white');
            $table->integer('distance_blue');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('golf_holes');
    }
};
