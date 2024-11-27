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
        $table->integer('female')->nullable();
        $table->integer('male')->nullable();
    });
}

public function down()
{
    Schema::table('infographics', function (Blueprint $table) {
        $table->dropColumn(['female', 'male']);
    });
}

};
