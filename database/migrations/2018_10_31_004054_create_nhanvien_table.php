<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('nv_ma');
            $table->string('nv_taiKhoan',50);
            $table->string('nv_matKhau',32);
            $table->string('nv_hoTen',100);
            $table->unsignedTinyInteger('nv_gioiTinh')->default('1');
            $table->string('nv_email',100);
            $table->datetime('nv_ngaySinh')->default(DB::raw('current_timestamp'));
            $table->string('nv_diaChi',250);
            $table->string('nv_dienThoai',11);
            $table->timestamp('nv_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('nv_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('nv_trangThai')->defaut('2');
            $table->unsignedTinyInteger('q_ma');

            $table->unique(['nv_taiKhoan','nv_email','nv_dienThoai']);

            $table->foreign('q_ma')->references('q_ma')->on('quyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
