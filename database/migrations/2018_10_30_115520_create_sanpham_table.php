<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('sp_ma')->comment('Mã sản phẩm');
            $table->string('sp_ten',100)->comment('Tên sản phẩm');
            $table->unsignedInteger('sp_giaGoc')->comment('Giá gốc')->default('0');
            $table->unsignedInteger('sp_giaBan')->comment('Giá bán')->default('0');
            $table->string('sp_hinh',200)->comment('Tên hình sản phẩm');
            $table->text('sp_thongTin')->comment('Thông tin sản phẩm');
            $table->string('sp_danhGia',50)->comment('Ý kiến đánh giá');
            $table->timestamp('sp_taoMoi')->default(DB::raw('current_timestamp'))->comment('Ngày giờ khởi tạo');
            $table->timestamp('sp_capNhat')->default(DB::raw('current_timestamp'))->comment('Ngày giờ cập nhật');
            $table->unsignedTinyInteger('sp_trangThai')->default('2');
            $table->unsignedTinyInteger('l_ma');

            $table->unique('sp_ten');

            $table->foreign('l_ma')->references('l_ma')->on('loai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
