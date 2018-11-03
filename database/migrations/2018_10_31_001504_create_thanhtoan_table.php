<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('tt_ma')->comment('Mã thanh toán');
            $table->string('tt_ten',191)->comment('Tên thanh toán');
            $table->text('tt_dienGiai')->comment('Diễn giải');
            $table->timestamp('tt_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('tt_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('tt_trangThai')->comment('Trạng thái')->default('2');

            $table->unique('tt_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
