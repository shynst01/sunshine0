<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('kh_ma');
            $table->string('kh_taiKhoan',50)->comment('Tên tài khoản');
            $table->string('kh_matKhau',32)->comment('Mật khẩu');
            $table->string('kh_hoTen',100)->comment('Họ và Tên');
            $table->unsignedTinyInteger('kh_gioiTinh')->comment('Giới tính');
            $table->string('kh_email',100)->comment('Email');
            $table->datetime('ngaySinh')->default(DB::raw('current_timestamp'))->comment('Ngày sinh');
            $table->string('kh_diaChi',250)->nullable()->default('NULL')->comment('Địa chỉ');
            $table->string('kh_dienThoai',11)->nullable()->default('NULL')->comment('Điện thoại');
            $table->timestamp('kh_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('kh_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('kh_trangThai')->default('2')->comment('Trạng thái');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
