<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudesanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chudesanpham', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedTinyInteger('cd_ma');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
            $table->foreign('cd_ma')->references('cd_ma')->on('chude');
            $table->primary(['sp_ma','cd_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chudesanpham');
    }
}
