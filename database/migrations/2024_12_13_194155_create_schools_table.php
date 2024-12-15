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

        Schema::create('schools', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('regional_id')->constrained();
            $table->unsignedBigInteger('regional_id')->nullable();
            $table->foreign('regional_id')->references('id')->on('regionals')->onDelete('set null');
//            $table->foreignId('classification_id')->constrained();
            $table->unsignedBigInteger('classification_id')->nullable();
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('set null');
//            $table->foreignId('league_id')->constrained();
            $table->unsignedBigInteger('league_id')->nullable();
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('set null');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->boolean('paid');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
