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
    Schema::create('infographics', function (Blueprint $table) {
        $table->id();
        $table->integer('population'); // Jumlah Penduduk
        $table->integer('households'); // Kepala Keluarga
        $table->integer('female');
        $table->integer('male');
        $table->integer('students'); // Jumlah pelajar
        $table->integer('unemployed'); // Jumlah belum bekerja
        $table->integer('housewife'); // Jumlah ibu rumah tangga
        $table->integer('private_employee'); // Jumlah karyawan swasta
        $table->integer('fisherman'); // Jumlah nelayan
        $table->integer('farmer'); // Jumlah petani
        $table->integer('islam');  // Jumlah penduduk beragama Islam
        $table->integer('kristen'); // Jumlah penduduk beragama kristen
        $table->integer('katolik'); // Jumlah penduduk beragama katolik
        $table->integer('buddha'); // Jumlah penduduk beragama buddha
        $table->integer('hindu'); // Jumlah penduduk beragama hindu
        $table->integer('konghucu'); // Jumlah penduduk beragama konghucu
        $table->integer('belum_kawin');  // Jumlah penduduk belum kawin
        $table->integer('kawin'); // Jumlah penduduk kawin
        $table->integer('cerai_mati'); // Jumlah penduduk cerai mati
        $table->integer('kawin_tercatat'); // Jumlah penduduk kawin tercatat
        $table->integer('kawin_tidak_tercatat'); // Jumlah penduduk kawin tidak tercatat
        $table->integer('cerai_hidup'); // Jumlah penduduk cerai hidup
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infographics');
    }
};
