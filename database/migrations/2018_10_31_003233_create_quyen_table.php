<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('q_ma')->comment('Mã quyền');
            $table->string('q_ten',30)->comment('Tên quyền');
            $table->string('q_dienGiai',250)->nullable()->comment('Diễn giải');
            $table->timestamp('q_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('q_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('q_trangThai')->comment('Trạng thái')->default('2');

            $table->unique('q_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
