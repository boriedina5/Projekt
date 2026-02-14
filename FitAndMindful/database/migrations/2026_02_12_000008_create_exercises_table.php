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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            
            $table->string('exercise_name');
            $table->integer('beginner_repeat');
            $table->integer('intermediate_repeat'); 
            $table->integer('advanced_repeat');     
            $table->string('quantity_type');
            $table->string('level');                
            
            $table->foreignId('plan_id')->constrained()->onDelete('cascade'); // A gyakorlat a tervé
            
            $table->timestamps();
            $table->softDeletes();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
