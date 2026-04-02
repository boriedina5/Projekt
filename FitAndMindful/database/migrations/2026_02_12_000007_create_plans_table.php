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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->string('difficulty')->default('standard')->nullable(); // beginner / intermediate / advanced / standard for non tiered plans
            $table->string('version')->default("guest"); // body portions (full, lower, upper), guest, plan x, 
            $table->integer('sets')->nullable(); // in case the plan has specified sets
            $table->string('duration')->nullable(); // in case the plan has specified duration

            $table->foreignId('category_id')->constrained()->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
