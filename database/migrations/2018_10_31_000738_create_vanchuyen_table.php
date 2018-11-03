<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('vc_ma')->comment('Mã vận chuyển');
            $table->string('vc_ten',191)->comment('Tên vận chuyển');
            $table->unsignedInteger('vc_chiPhi')->comment('Chi phí vận chuyển')->default('0');
            $table->text('vc_dienGiai')->comment('Diễn giải');
            $table->timestamp('vc_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('vc_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('vc_trangThai')->comment('Trạng thái')->default('2');

            $table->unique('vc_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuyen');
    }
}
