<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->tinyIncrements('km_ma');
            $table->string('km_ten',200);
            $table->text('km_noiDung');
            $table->datetime('km_batDau');
            $table->datetime('km_ketThuc')->nullable()->default('NULL');
            $table->string('km_giaTri',50)->default('100');
            $table->unsignedSmallInteger('nv_nguoiLap');
            $table->datetime('km_ngayLap')->default(DB::raw('current_timestamp'));
            $table->unsignedSmallInteger('nv_kyNhay')->default('1');
            $table->datetime('km_ngayKyNhay')->nullable()->default('NULL');
            $table->unsignedSmallInteger('nv_kyDuyet')->nullable()->default('NULL');
            $table->datetime('km_ngayDuyet')->default(DB::raw('current_timestamp'));
            $table->timestamp('km_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('km_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('km_trangThai')->default('2');

            $table->unique('km_ten')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
