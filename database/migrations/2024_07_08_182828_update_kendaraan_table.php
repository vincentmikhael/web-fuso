<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('kendaraan', function (Blueprint $table) {
            $table->dropColumn('gambar2');
            $table->text('deskripsi')->nullable();
            $table->text('brake')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kendaraan', function (Blueprint $table) {
            $table->string('gambar2')->nullable();
            $table->dropColumn('deskripsi');
            $table->dropColumn('brake');
        });
    }
};
