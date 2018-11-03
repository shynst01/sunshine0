<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->unsignedBigInteger('sp_ma')->comment('Mã sản phẩm');
            $table->umsignedTinyInteger('ha_stt')->comment('Stt hình')->default('1');
            $table->string('ha_ten',150)->comment('Tên hình');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
            $table->primary(['sp_ma','ha_stt']);
            $table->unique('ha_ten');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
