<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_diaries', function (Blueprint $table) {
            $table->id();

            $table->string("name");
            $table->integer("calories")->default(0);
            $table->integer(column: "proteins")->default(0);
            $table->integer("fats")->default(0);
            $table->integer("carbohydrates")->default(0);
            $table->date("date");
            $table->string("breakfasts")->default("");
            $table->string("snacks")->default("");
            $table->string("lunches")->default("");
            $table->string("dinners")->default("");

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_diaries');
    }
};
