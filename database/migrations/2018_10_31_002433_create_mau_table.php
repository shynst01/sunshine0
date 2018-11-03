<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->tinyIncrements('m_ma')->comemnt('Mã mẫu');
            $table->string('m_ten',50)->comemnt('Tên mẫu');
            $table->timestamp('m_taoMoi')->default(DB::raw('current_timestamp'));
            $table->timestamp('m_capNhat')->default(DB::raw('current_timestamp'));
            $table->unsignedTinyInteger('m_trangThai')->comemnt('Trạng thái')->default('2');

            $table->unique('m_ten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau');
    }
}
