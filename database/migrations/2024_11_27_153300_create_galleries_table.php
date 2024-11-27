<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();  // kolom id sebagai primary key
            $table->string('title');  // kolom untuk judul galeri
            $table->text('description');  // kolom untuk deskripsi galeri
            $table->string('photo');  // kolom untuk menyimpan path foto galeri
            $table->timestamps();  // kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
