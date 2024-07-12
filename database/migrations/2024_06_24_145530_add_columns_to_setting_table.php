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
        Schema::table('setting', function (Blueprint $table) {
            // Tambah kolom 'no_telp'
            $table->string('no_telp', 255)->nullable();

            // Tambah kolom 'email'
            $table->string('email')->nullable();

            // Tambah kolom 'hari_operasional'
            $table->string('hari_operasional')->nullable();

            // Tambah kolom 'jam_operasional'
            $table->string('jam_operasional')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('setting', function (Blueprint $table) {
            // Hapus kolom 'no_telp'
            $table->dropColumn('no_telp');

            // Hapus kolom 'email'
            $table->dropColumn('email');

            // Hapus kolom 'hari_operasional'
            $table->dropColumn('hari_operasional');

            // Hapus kolom 'jam_operasional'
            $table->dropColumn('jam_operasional');
        });
    }
};
