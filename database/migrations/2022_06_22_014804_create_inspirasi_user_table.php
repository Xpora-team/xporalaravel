<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspirasiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspirasi_user', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('user_id');
            $table->string('user_name');
            $table->string('level');
            $table->string('produkbni');
            $table->integer('view');
            $table->integer('application');
            $table->string('verification');
            $table->date('upload_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspirasi_user');
    }
}
