<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertrackings')->insert([
            'Estimated_Delivery' => '2021-06-12 10:10:59',
            'Shipping_By' => 'ChangeUrWaste',
            'Status' => 'Picked by the driver'
        ]);

        DB::table('usertrackings')->insert([
            'Estimated_Delivery' => '2021-06-12 11:12:59',
            'Shipping_By' => 'ChangeUrWaste',
            'Status' => 'Picked by the driver'
        ]);

        DB::table('usertrackings')->insert([
            'Estimated_Delivery' => '2021-06-12 11:21:59',
            'Shipping_By' => 'ChangeUrWaste',
            'Status' => 'Picked by the driver'
        ]);
    }
}
