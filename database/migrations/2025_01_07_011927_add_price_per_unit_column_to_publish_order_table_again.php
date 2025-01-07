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
            //
            $table->integer('price_per_unit')->after('print_qunaitity')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publisher_orders', function (Blueprint $table) {
            //
            $table->integer('price_per_unit')->after('print_qunaitity')->nullable();

        });
    }
};
