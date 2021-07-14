<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '2',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '1',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '4',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '5',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '3',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '1',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '2',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '5',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ],
            [
                'CustomerID' => '3',
                'CreatedAt' => Carbon::now() -> addDays(-1),
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
