<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('user_profiles')->insert([
        'FullName' => 'Alex Smith',
        'UserName' => 'alex.sm',
        'Email' => 'alexsmith@gmail.com',
        'PhoneNumber' => '081963822963',
        'Address' => 'Jl. Mayjen Prof. Dr. Moestopo No.6 Kec. Gubeng, Surabaya, Jawa Timur 60286',
        'Password' => 'alexsm21'

    ]);

    DB::table('user_profiles')->insert([
        'FullName' => 'Nancy Zubir',
        'UserName' => 'nancy.zb',
        'Email' => 'nancyzubir@gmail.com',
        'PhoneNumber' => '081993725291',
        'Address' => 'Jl. Kertajaya N0.8 Kec. Gubeng, Surabaya, Jawa Timur 60286',
        'Password' => 'nancyzbr'

    ]);

    DB::table('user_profiles')->insert([
        'FullName' => 'Regyna Rush',
        'UserName' => 'regyna.rr',
        'Email' => 'regynarush@gmail.com',
        'PhoneNumber' => '+62852-9102-5620',
        'Address' => 'Jl. Ngagel No.27 Kec.Wonokromo, Surabaya, Jawa Timur 60245',
        'Password' => 'regynarush31'


    ]);
    }
}
