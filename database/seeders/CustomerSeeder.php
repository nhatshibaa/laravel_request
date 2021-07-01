<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'Name' => 'Nguyễn Tiến Nhật',
                'Address' => 'Hà Nội',
            ],
            [
                'Name' => 'Phạm Đức Duy',
                'Address' => 'Hà Nội',
            ],
            [
                'Name' => 'Hà Như Tài',
                'Address' => 'Hà Nội',
            ],
            [
                'Name' => 'Nguyễn Văn Hùng',
                'Address' => 'Hà Nội',
            ],
            [
                'Name' => 'Đào Xuân Hùng',
                'Address' => 'Hà Nội',
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
