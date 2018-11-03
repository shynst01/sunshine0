<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('dh_ma');
            $table->unsignedBigInteger('kh_ma');
            $table->datetime('dh_thoiGianDatHang')->default(DB::raw('current_timestamp'));
            $table->datetime('dh_thoiGianNhanHang');
            $table->string('dh_nguoiNhan',100);
            $table->string('dh_diaChi',250);
            $table->string('dh_dienThoai',11);
            $table->string('dh_nguoiGui',100);
            $table->text('dh_loiChuc')->nullable();
            $table->unsignedTinyInteger('dh_daThanhToan')->default('0');
            $table->unsignedSmallInteger('nv_xuLy')->default('1');
            $table->datetime('dh_ngayXuLy')->nullable()->default('NULL');
            $table->unsignedSmallInteger('nv_giaoHang');
            $table->datetime('dh_ngayLapPhieuGiao')->nullable()->default('NULL');
            $table->datetime('dh_ngayGiao')->nullable()->default('NULL');
            $table->timestamp('dh_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('dh_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('dh_trangThai')->default('1');
            $table->unsignedTinyInteger('vc_ma');
            $table->unsignedTinyInteger('tt_ma');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
