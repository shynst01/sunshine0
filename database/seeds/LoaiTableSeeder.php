<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create('vi_VN');
        $now = new Carbon('2018-11-01','Asia/Ho_Chi_Minh');
        $list = [];
        $types = ['Hoa lẻ','Phụ liệu','Bó hoa','Giỏ hoa','Vòng hoa','Bình hoa','Hoa hộp gỗ','Hoa hộp giấy','Kệ hoa'];
        sort($types);
        for($i = 1;$i <= count($types);$i++)
        {
        	$created = $now->copy()->addSeconds($faker->numberBetween(1,259200));
        	$updated = $created->copy()->addSeconds($faker->numberBetween(300,172800));
        	array_push($list,
        	[
        		'l_taoMoi'		=> $created,
        		'l_capNhat'		=> $updated,
        		'l_ten'			=> $types[$i-1],
        		'l_trangThai'	=> 2
        	]);
        	$now = $updated->copy();
        }
        DB::table('loai')->insert($list);
    }
}
