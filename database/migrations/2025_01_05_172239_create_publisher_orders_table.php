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
        Schema::create('publisher_orders', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->enum('client_gender', ["Pria","Wanita"]);
            $table->date('client_birthdate');
            $table->string('client_job_title');
            $table->string('client_institution');
            $table->string('book_title');
            $table->string('manuscript_path');
            $table->string('invoice_number')->nullable()->unique();
            $table->string('invoice_path')->unique();
            $table->enum('status', ["Pending","In Progress", "Completed","Revised"])->default("Pending");
            $table->string('package_id');
            $table->string('price_range_id');
            $table->string('print_quantity_id');
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publisher_orders');
    }
};
