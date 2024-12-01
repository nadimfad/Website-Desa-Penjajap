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
            $table->integer('islam')->nullable()->change(); // Jumlah pelajar
            $table->integer('kristen')->nullable()->change(); // Jumlah belum bekerja
            $table->integer('katolik')->nullable()->change(); // Jumlah ibu rumah tangga
            $table->integer('buddha')->nullable()->change(); // Jumlah karyawan swasta
            $table->integer('hindu')->nullable()->change(); // Jumlah nelayan
            $table->integer('konghucu')->nullable()->change(); // Jumlah petani
        });
    }
    
    public function down()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->dropColumn(['islam', 'kristen', 'katolik', 'buddha', 'hindu', 'konghucu']);
        });
    }
};
