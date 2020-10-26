<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masalah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('problem_masalah');
            $table->enum('status_masalah',['terkirim', 'diproses', 'selesai']);
            $table->bigInteger('id_bidang')->unsigned()->nullable();
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->timestamps();
            
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_bidang')->references('id')->on('bidang');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('masalah');
        Schema::enableForeignKeyConstraints();
    }
}
