<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KhachHangTableSeeder extends Seeder
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
    	for($i = 1;$i <= 5;$i++)
    	{
    		$created = $now->copy()->addSeconds($faker->numberBetween(1,259200));
    		$updated = $created->copy()->addSeconds($faker->numberBetween(300,172800));
    		 
    		array_push($list,
    			[
    				'kh_taiKhoan'		=>$faker->userName(50),
    				'kh_matKhau'		=>$faker->password(32),
    				'kh_hoTen'			=>$faker->name(100),
    				'kh_gioiTinh'		=>$faker->numberBetween(1,2),
    				'kh_email'			=>$faker->freeEmail(100),
    				'ngaySinh'			=>$faker->date($format = 'Y-m-d',$max = 'now'),
    				'kh_diaChi'			=>$faker->address(250),
    				'kh_dienThoai'		=>$faker->phoneNumber(),
    				'kh_taoMoi'			=>$created,
    				'kh_capNhat'		=>$updated,
    				'kh_trangThai'		=> 2
    			]);
    	}
    	DB::table('khachhang')->insert($list);
    }
}
