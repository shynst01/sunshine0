<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopy', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('gy_ma');
            $table->datetime('gy_thoiGian')->default(DB::raw('current_timestamp'));
            $table->text('gy_noiDung');
            $table->unsignedBigInteger('km_ma');
            $table->unsignedBigInteger('sp_ma');
            $table->unsignedTinyInteger('gy_trangThai')->default('3');

            $table->foreign('km_ma')->references('kh_ma')->on('khuyenmai');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gopy');
    }
}
