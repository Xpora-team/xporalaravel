<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspirasiPostFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspirasi_post_form', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('Nama_Kelas');
            $table->string('Category');
            $table->string('Level');
            $table->integer('view');
            $table->integer('application');
            $table->binary('Photo');
            $table->string('Deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspirasi_post_form');
    }
}
