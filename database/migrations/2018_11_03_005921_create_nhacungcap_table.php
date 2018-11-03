<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->enigine="InnoDB";
            $table->smallIncrements('ncc_ma')->comment('Nhà cung cấp mã');
            $table->string('ncc_ten',191)->comment('Tên nhà cung cấp');
            $table->string('ncc_daiDien',100)->comment('Nhà cung cấp đại diện');
            $table->string('ncc_diaChi',250)->comment('Địa chỉ');
            $table->string('ncc_dienThoai',11)->comment('Điện thoại');
            $table->string('ncc_email',100)->comment('Email');
            $table->timestamp('ncc_taoMoi')->comment('Thời gian tạo')->default(DB::raw('current_timestamp'));
            $table->timestamp('ncc_capNhat')->comment('Thời gian cập nhật')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('ncc_trangThai')->comment('Trạng thái')->default('2');
            $table->unsignedSmallInteger('xx_ma');

            $table->unique('ncc_ten');

            $table->foreign('xx_ma')->references('xx_ma')->on('xuatxu');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
