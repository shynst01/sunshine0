<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->smallIncrements('xx_ma')->comment('Mã xuất xứ');
            $table->string('xx_ten',100)->comment('Tên xuất xứ');
            $table->timestamp('xx_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('xx_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('xx_trangThai')->comment('Trạng thái')->default('2');

            $table->unique('xx_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatxu');
    }
}
