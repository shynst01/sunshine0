<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('pn_ma');
            $table->string('pn_nguoiGiao',100);
            $table->string('pn_soHoaDon',15);
            $table->datetime('pn_ngayXuatHoaDon')->default(DB::raw('current_timestamp'));
            $table->text('pn_ghiChu')->nullable()->default('NULL');
            $table->unsignedSmallInteger('nv_nguoiLapPhieu');
            $table->datetime('pn_ngaylapPhieu')->default(DB::raw('current_timestamp'));
            $table->unsignedSmallInteger('nv_keToan')->default('1');
            $table->datetime('pn_ngayXacNhan')->nullable()->default('NULL');
            $table->unsignedSmallInteger('nv_thuKho')->default('1');
            $table->datetime('pn_ngayNhapKho')->nullable()->default('NULL');
            $table->timestamp('pn_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('pn_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('pn_trangThai')->default('2');
            $table->unsignedSmallInteger('ncc_ma');

            $table->unique('pn_soHoaDon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
