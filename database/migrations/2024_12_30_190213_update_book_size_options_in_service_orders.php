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
        Schema::table('service_orders', function (Blueprint $table) {
            // Ubah kolom ENUM dengan opsi baru
            $table->enum('book_size', ['100-250 halaman', '250-550 halaman'])
                ->nullable()
                ->default('100-250 halaman')
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_orders', function (Blueprint $table) {
            // Kembalikan ke definisi awal jika rollback
            $table->enum('book_size', ['100-250'])
                ->nullable()
                ->change();
        });
    }
};
