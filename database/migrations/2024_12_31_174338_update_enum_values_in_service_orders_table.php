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
            // Drop the existing `service_type` column
            $table->dropColumn('service_type');

            // Re-add the `service_type` column with new enum values
            $table->enum('service_type', ["Penerbitan Buku", "Mencetak Buku", "Menerbitkan dan Mencetak"])->after('address');

            // Drop the existing `status` column
            $table->dropColumn('status');

            // Re-add the `status` column with new enum values
            $table->enum('status', ["Pending", "Verified", "In Progress", "Completed", "Revised"])->default('Pending')->after('pdf_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_orders', function (Blueprint $table) {
            // Drop the modified `service_type` column
            $table->dropColumn('service_type');

            // Re-add the original `service_type` column
            $table->enum('service_type', ["penerbitan_buku", "mencetak_buku", "menerbitkan_dan_mencetak"])->after('address');

            // Drop the modified `status` column
            $table->dropColumn('status');

            // Re-add the original `status` column
            $table->enum('status', ["pending", "verified", "in_progress", "completed", "revised"])->default('pending')->after('pdf_path');
        });
    }
};
