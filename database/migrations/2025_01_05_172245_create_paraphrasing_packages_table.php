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
        Schema::create('paraphrasing_packages', function (Blueprint $table) {
            $table->id();
            $table->enum('text_type', ["Biasa","Akademik"]);
            $table->enum('language', ["Indonesia","Inggris"]);
            $table->decimal('price_per_word', 10, 2);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paraphrasing_packages');
    }
};
