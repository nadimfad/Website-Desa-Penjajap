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
            $table->integer('students')->nullable(); // Jumlah pelajar
            $table->integer('unemployed')->nullable(); // Jumlah belum bekerja
            $table->integer('housewife')->nullable(); // Jumlah ibu rumah tangga
            $table->integer('private_employee')->nullable(); // Jumlah karyawan swasta
            $table->integer('fisherman')->nullable(); // Jumlah nelayan
            $table->integer('farmer')->nullable(); // Jumlah petani
        });
    }
    
    public function down()
    {
        Schema::table('infographics', function (Blueprint $table) {
            $table->dropColumn(['students', 'unemployed', 'housewife', 'private_employee', 'fisherman', 'farmer']);
        });
    }
    
};
