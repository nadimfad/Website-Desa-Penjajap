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
            $table->integer('islam')->nullable(); // Jumlah pelajar
            $table->integer('kristen')->nullable(); // Jumlah belum bekerja
            $table->integer('katolik')->nullable(); // Jumlah ibu rumah tangga
            $table->integer('buddha')->nullable(); // Jumlah karyawan swasta
            $table->integer('hindu')->nullable(); // Jumlah nelayan
            $table->integer('konghucu')->nullable(); // Jumlah petani
        });
    }
    
    public function down()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->dropColumn(['islam', 'kristen', 'katolik', 'buddha', 'hindu', 'konghucu']);
        });
    }
};
