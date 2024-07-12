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
        Schema::table('sparepart', function (Blueprint $table) {
            $table->string('kategori_id')->change();
            $table->dropColumn('harga');
            $table->string('material')->nullable();
            $table->string('material_grup')->nullable();
            $table->text('deskripsi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sparepart', function (Blueprint $table) {
            $table->integer('kategori_id')->change();
            $table->integer('harga')->nullable();
            $table->dropColumn('material');
            $table->dropColumn('material_grup');
            $table->dropColumn('deskripsi');
        });
    }
};
