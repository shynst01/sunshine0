<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('cd_ma')->comment('Mã chủ đề');
            $table->string('cd_ten',50)->comment('Tên chủ đề');
            $table->timestamp('cd_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('cd_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('cd_trangThai')->comment('Trạng thái')->default('2');

            $table->unique('cd_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude');
    }
}
