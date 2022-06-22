<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspirasiPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspirasi_post', function (Blueprint $table) {
            $table->string('ID_Inspirasi')->primary();
            $table->string('Nama_Kelas');
            $table->string('Category');
            $table->string('Level');
            $table->integer('view');
            $table->integer('application');
            $table->string('status');
            $table->date('upload_date');
            $table->binary('Photo');
            $table->string('Deskripsi');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspirasi_post');
    }
}
