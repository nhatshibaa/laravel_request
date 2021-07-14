<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'Name' => 'Rubik 3x3',
                'Price' => 25000,
                'CreatedAt'=>Carbon::now()->addDays(-9),
                'UpdateAt'=>Carbon::now()->addDays(-10)
            ],
            [
                'Name' => 'Xe ô tô điều khiển từ xa',
                'Price' => 159000,
            ],
            [
                'Name' => 'Gấu Bông Husky',
                'Price' => 169000,
            ],
            [
                'Name' => 'Đồ Chơi Xếp Hình LEGO Chiến Hạm',
                'Price' => 223000,
            ],
            [
                'Name' => 'Xe cần cẩu bằng nhựa đẹp',
                'Price' => 80000,
            ],
            [
                'Name' => 'Đồ Chơi Búp Bê Barbie',
                'Price' => 99000,
            ],
            [
                'Name' => 'Đồ chơi robot biến hình',
                'Price' => 110000,
            ],
            [
                'Name' => 'Đồ chơi lắp ráp xe 1:12 KAWASAKI NINJA ZX-6R',
                'Price' => 350000,
            ],
            [
                'Name' => 'Bộ đồ chơi câu cá',
                'Price' => 129000,
            ],
            [
                'Name' => 'Bàn cờ vua bằng gỗ',
                'Price' => 259000,
            ],
            [
                'Name' => 'Xe cần cẩu bằng nhựa đẹp',
                'Price' => 80000,
            ],
            [
                'Name' => 'Đồ Chơi Búp Bê Barbie',
                'Price' => 99000,
            ],
            [
                'Name' => 'Đồ chơi robot biến hình',
                'Price' => 110000,
            ],
            [
                'Name' => 'Đồ chơi lắp ráp xe 1:12 KAWASAKI NINJA ZX-6R',
                'Price' => 350000,
            ],
            [
                'Name' => 'Bộ đồ chơi câu cá',
                'Price' => 129000,
            ],
            [
                'Name' => 'Bàn cờ vua bằng gỗ',
                'Price' => 259000,
            ],
            [
                'Name' => 'Rubik 3x3',
                'Price' => 25000,
            ],
            [
                'Name' => 'Xe ô tô điều khiển từ xa',
                'Price' => 159000,
            ],
            [
                'Name' => 'Gấu Bông Husky',
                'Price' => 169000,
            ],
            [
                'Name' => 'Đồ Chơi Xếp Hình LEGO Chiến Hạm',
                'Price' => 223000,
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
