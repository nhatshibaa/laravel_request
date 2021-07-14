<?php

namespace Database\Seeders;

use App\Models\OrderDetails;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        for ($i = 0; $i < 30; $i++){
            OrderDetails::create([
                'OrderID' => random_int(1,10),
                'ProductID' =>  random_int(1,10),
                'Quantity' => random_int(1, 100),
                'Amount' => random_int(10000, 500000)
            ]);
        }
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
