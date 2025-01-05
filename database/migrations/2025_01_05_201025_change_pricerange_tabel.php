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
        Schema::table('price_ranges', function (Blueprint $table) {
            $table->dropColumn(['min_pages', 'max_pages']);

            $table->string('page_rage')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('price_ranges', function (Blueprint $table) {
            $table->integer('min_pages')->nullable();
            $table->integer('max_pages')->nullable();

            // Hapus kolom baru
            $table->dropColumn('page_range');
        });
    }
};
