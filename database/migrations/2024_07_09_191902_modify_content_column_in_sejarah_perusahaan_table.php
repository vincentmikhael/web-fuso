<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('sejarah_perusahaan', function (Blueprint $table) {
            $table->longText('content')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sejarah_perusahaan', function (Blueprint $table) {
            // Ubah kembali tipe data sesuai kebutuhan, misalnya TEXT
            $table->text('content')->change();
        });
    }
};
