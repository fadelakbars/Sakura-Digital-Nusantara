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
        Schema::create('paraphrasing_orders', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('document_title');
            $table->string('document_path');
            $table->enum('text_type', ["Biasa","Akademik"]);
            $table->enum('language', ["Indonesia","Inggris"]);
            $table->integer('word_count');
            $table->string('invoice_number')->nullable()->unique();
            $table->string('invoice_path')->nullable();
            $table->enum('status', ["Pending","In Progress","Completed","Revised"]);
            $table->string('package_id');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paraphrasing_orders');
    }
};
