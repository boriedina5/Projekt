<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_stats', function (Blueprint $table) {
            $table->id();

            $table->integer('shoulder_measures')->nullable();
            $table->integer('upperArm_measures')->nullable();
            $table->integer('foreArm_measures')->nullable();
            $table->integer('chest_measures')->nullable();
            $table->integer('abs_measures')->nullable();
            $table->integer('waist_measures')->nullable();
            $table->integer('hip_measures')->nullable();
            $table->integer('butt_measures')->nullable();
            $table->integer('thight_measures')->nullable();
            $table->integer('calf_measures')->nullable();

            // set null == weight_id/height_id is set to null,
            // cascade removes the whole user_stat row
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('height_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('weight_id')->nullable()->constrained()->onDelete('set null');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_stats');
    }
};
