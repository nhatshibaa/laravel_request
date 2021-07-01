<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'CustomerID' => '3',
            ],
            [
                'CustomerID' => '2',
            ],
            [
                'CustomerID' => '1',
            ],
            [
                'CustomerID' => '4',
            ],
            [
                'CustomerID' => '5',
            ],
            [
                'CustomerID' => '3',
            ],
            [
                'CustomerID' => '1',
            ],
            [
                'CustomerID' => '2',
            ],
            [
                'CustomerID' => '5',
            ],
            [
                'CustomerID' => '3',
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
