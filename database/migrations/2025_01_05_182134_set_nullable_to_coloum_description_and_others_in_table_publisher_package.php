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
        Schema::table('publisher_packages', function (Blueprint $table) {
            $table->string('package_name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->decimal('base_price', 10, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publisher_packages', function (Blueprint $table) {
            $table->string('package_name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->decimal('base_price', 10, 2)->nullable()->change();
        });
    }
};
