<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMausanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mausanpham', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm mã');
            $table->unsignedTinyInteger('m_ma')->comment('Mẫu mã');
            $table->unsignedSmallInteger('msp_soLuong')->comment('Số lượng');

            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
            $table->foreign('m_ma')->references('m_ma')->on('mau');
            $table->primary(['sp_ma','m_ma']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mausanpham');
    }
}
