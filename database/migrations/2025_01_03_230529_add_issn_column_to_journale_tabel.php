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
        Schema::table('journals', function (Blueprint $table) {
            $table->string('pissn')->nullable()->after('link');
            $table->string('link_pissn')->nullable()->after('pissn');
            $table->string('eissn')->nullable()->after('link_pissn');
            $table->string('link_eissn')->nullable()->after('eissn');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->dropColumn('pissn');
            $table->dropColumn('link_pissn');
            $table->dropColumn('eissn');
            $table->dropColumn('link_eissn');
        });
    }
};
