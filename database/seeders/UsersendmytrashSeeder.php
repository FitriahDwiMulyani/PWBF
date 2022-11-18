<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSendMyTrashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_send_my_trashes')->insert([
            'Province_City_District_PostalCode' => 'Jawa Timur, Kota Surabaya, Kec. Gubeng, 60286',
            'StreetName_Building_HouseNumber' => 'Jl. Mayjen Prof. Dr. Moestopo No.6',
            'Other_Details' => 'Perumahan Puri Indah',
            'Kind' => 'Kertas',
            'Weight' => '2Kg'
        ]);

        DB::table('user_send_my_trashes')->insert([
            'Province_City_District_PostalCode' => 'Jawa Timur, Kota Surabaya, Kec. Gubeng, 60286',
            'StreetName_Building_HouseNumber' => 'Jl. Kertajaya No.8',
            'Other_Details' => 'Kertajaya Indah Tengah',
            'Kind' => 'Metal',
            'Weight' => '2Kg'
        ]);

        DB::table('user_send_my_trashes')->insert([
            'Province_City_District_PostalCode' => 'Jawa Timur, Kota Surabaya, Kec. Wonokromo, 60245',
            'StreetName_Building_HouseNumber' => 'Jl. Ngagel No.27 Kec.Wonokromo',
            'Other_Details' => 'Depan Smpn 12 Surabaya',
            'Kind' => 'Plastik',
            'Weight' => '1Kg'
        ]);
    }
}
