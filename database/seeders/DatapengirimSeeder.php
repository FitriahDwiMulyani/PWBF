<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\datapengirim;

class DatapengirimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        datapengirim::create([
            'nama' => 'Alex Smith',
            'alamat' => 'Gubeng Airlangga No.37 Surabaya',
            'no_hp' => '082345678123',
            'tgl_pengiriman' => '2022-04-25',
            'jenis_sampah' => 'Sampah Metal',
            'berat_sampah' => 4,
            'konfirmasi' => 'Selesai',
        ]);

        datapengirim::create([
            'nama' => 'Alkana Fares',
            'alamat' => 'Gubeng Airlangga No.08 Surabaya',
            'no_hp' => '082345678435',
            'tgl_pengiriman' => '2022-04-25',
            'jenis_sampah' => 'Sampah Metal',
            'berat_sampah' => 3,
            'konfirmasi' => 'Selesai',
        ]);

        datapengirim::create([
            'nama' => 'Asahila Hill',
            'alamat' => 'Gubeng Kertajaya No.12 Surabaya',
            'no_hp' => '082345678435',
            'tgl_pengiriman' => '2022-04-25',
            'jenis_sampah' => 'Sampah Plastik',
            'berat_sampah' => 1,
            'konfirmasi' => 'Selesai',
        ]);
    }
}
