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
        Schema::table('publisher_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->nullable()->change();
            $table->unsignedBigInteger('price_range_id')->nullable()->change();
            $table->unsignedBigInteger('print_quantity_id')->nullable()->change();
            $table->unsignedBigInteger('book_hki_price_id')->nullable()->change();

        });
    }
    
    public function down(): void
    {
        Schema::table('publisher_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->nullable(false)->change();
            $table->unsignedBigInteger('price_range_id')->nullable(false)->change();
            $table->unsignedBigInteger('print_quantity_id')->nullable(false)->change();
            $table->unsignedBigInteger('book_hki_price_id')->nullable(false)->change();

        });
    }
    
};
