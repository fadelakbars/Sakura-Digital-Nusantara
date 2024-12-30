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
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ["Pria","Wanita"]);
            $table->string('institution')->nullable();
            $table->string('job_title')->nullable();
            $table->text('address')->nullable();
            $table->enum('service_type', ["penerbitan_buku","mencetak_buku","menerbitkan_dan_mencetak"]);
            $table->enum('book_size', ["100-250",])->nullable();
            $table->integer('print_quantity')->nullable();
            $table->string('invoice_number')->nullable()->unique();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('pdf_path')->nullable();
            $table->enum('status', ["pending","verified","in_progress","completed","revised"])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
