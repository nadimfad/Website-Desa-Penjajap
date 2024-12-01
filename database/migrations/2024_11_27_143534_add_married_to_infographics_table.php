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
            $table->integer('belum_kawin')->nullable()->change(); // Jumlah pelajar
            $table->integer('kawin')->nullable()->change(); // Jumlah belum bekerja
            $table->integer('cerai_mati')->nullable()->change(); // Jumlah ibu rumah tangga
            $table->integer('kawin_tercatat')->nullable()->change(); // Jumlah karyawan swasta
            $table->integer('kawin_tidak_tercatat')->nullable()->change(); // Jumlah nelayan
            $table->integer('cerai_hidup')->nullable()->change(); // Jumlah petani
        });
    }
    
    public function down()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->dropColumn(['belum_kawin', 'kawin', 'cerai_mati', 'kawin_tercatat', 'kawin_tidak_tercatat', 'cerai_hidup']);
        });
    }
};
