<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\datacustomer;

class DatacustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        datacustomer::create([
            'nama' => 'Alex Smith',
            'email' => 'alexsmith@gmail.com',
            'alamat' => 'Gubeng Airlangga No.37 Surabaya',
            'no_hp' => '082345678123',
            'start_date' => '2022-04-25',
            'jenis_kelamin' => true,
        ]);

        datacustomer::create([
            'nama' => 'Alkana Fares',
            'email' => 'alkanafares@gmail.com',
            'alamat' => 'Gubeng Airlangga No.08 Surabaya',
            'no_hp' => '082345678435',
            'start_date' => '2022-04-25',
            'jenis_kelamin' => false,
        ]);

        datacustomer::create([
            'nama' => 'Asahila Hill',
            'email' => 'asahilahill@gmail.com',
            'alamat' => 'Gubeng Kertajaya No.12 Surabaya',
            'no_hp' => '082345678435',
            'start_date' => '2022-04-25',
            'jenis_kelamin' => true,
        ]);
    }
}
