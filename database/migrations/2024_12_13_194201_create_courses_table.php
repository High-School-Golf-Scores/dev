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

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('par')->nullable();
            $table->integer('slope')->nullable();
            $table->decimal('front_tee_rating', 5, 1);
            $table->decimal('middle_tee_rating', 5, 1);
            $table->decimal('back_tee_rating', 5, 1);
            $table->integer('front_tee_yardage')->nullable();
            $table->integer('middle_tee_yardage')->nullable();
            $table->integer('back_tee_yardage')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
