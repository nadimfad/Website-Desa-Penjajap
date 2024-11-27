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
        Schema::table('infographics', function (Blueprint $table) {
            $table->integer('belum_kawin')->nullable(); // Jumlah pelajar
            $table->integer('kawin')->nullable(); // Jumlah belum bekerja
            $table->integer('cerai_mati')->nullable(); // Jumlah ibu rumah tangga
            $table->integer('kawin_tercatat')->nullable(); // Jumlah karyawan swasta
            $table->integer('kawin_tidak_tercatat')->nullable(); // Jumlah nelayan
            $table->integer('cerai_hidup')->nullable(); // Jumlah petani
        });
    }
    
    public function down()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->dropColumn(['belum_kawin', 'kawin', 'cerai_mati', 'kawin_tercatat', 'kawin_tidak_tercatat', 'cerai_hidup']);
        });
    }
};
