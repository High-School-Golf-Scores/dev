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

        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained();
            $table->string('name');
            $table->date('date');
            $table->integer('course_id');
            $table->time('start_time')->nullable();
            $table->integer('start_type');
            $table->time('start_interval')->nullable();
            $table->integer('type');
            $table->integer('starting_hole');
            $table->integer('tees')->nullable();
            $table->string('sub_tournament')->nullable();
            $table->integer('tie_breaker');
            $table->integer('format');
            $table->integer('cards');
            $table->integer('rounds');
            $table->integer('levels');
            $table->text('rules')->nullable();
            $table->string('alert')->nullable();
            $table->string('sponsor')->nullable();
            $table->integer('flights');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
