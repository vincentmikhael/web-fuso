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
        Schema::table('banner', function (Blueprint $table) {
            // Hapus kolom 'link'
            $table->dropColumn('link');

            // Tambah kolom 'background_mobile'
            $table->string('background_mobile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banner', function (Blueprint $table) {
            // Tambah kembali kolom 'link'
            $table->string('link')->nullable();

            // Hapus kolom 'background_mobile'
            $table->dropColumn('background_mobile');
        });
    }
};
