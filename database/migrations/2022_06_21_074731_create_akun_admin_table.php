<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_admin', function (Blueprint $table) {
            //$table->id();
            $table->integer('nip')->primary();
            $table->string('username');
            $table->string('nama_pegawai');
            $table->string('password');
            $table->string('email')->unique();
            $table->integer('no_telp');
            $table->string('role');
            $table->date('create_date');
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
        Schema::dropIfExists('akun_admin');
    }
}
