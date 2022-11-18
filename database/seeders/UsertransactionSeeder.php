<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertransactions')->insert([
            'Income' => '30000',
            'Kind' => 'Metals',
            'Weight' => '3kg',
            'Cost' => '9000',
            'Status' => 'Completed'
        ]);

        DB::table('usertransactions')->insert([
            'Income' => '30000',
            'Kind' => 'Plastik',
            'Weight' => '5kg',
            'Cost' => '10000',
            'Status' => 'Completed'
        ]);

        DB::table('usertransactions')->insert([
            'Income' => '50000',
            'Kind' => 'Kertas',
            'Weight' => '3kg',
            'Cost' => '6000',
            'Status' => 'Processed'
        ]);
    }
}
