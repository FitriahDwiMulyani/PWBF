<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\databayar;

class DatabayarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        databayar::create([
            'nama' => 'Alex Smith',
            'tgl_pembayaran' => '2022-04-25',
            'jenis_bayar' => true,
            'jenis_sampah' => 'Sampah Metal',
            'total_bayar' => 12000,
            'konfirmasi' => 'Selesai',
        ]);

        databayar::create([
            'nama' => 'Alkana Fares',
            'tgl_pembayaran' => '2022-04-25',
            'jenis_bayar' => true,
            'jenis_sampah' => 'Sampah Metal',
            'total_bayar' => 9000,
            'konfirmasi' => 'Selesai',
        ]);

        databayar::create([
            'nama' => 'Asahila Hill',
            'tgl_pembayaran' => '2022/04/25',
            'jenis_bayar' => true,
            'jenis_sampah' => 'Sampah Plastik',
            'total_bayar' => 2000,
            'konfirmasi' => 'Selesai',
        ]);

        databayar::create([
            'nama' => 'Tiger Nixon',
            'tgl_pembayaran' => '2022/04/25',
            'jenis_bayar' => true,
            'jenis_sampah' => 'Sampah Kertas',
            'total_bayar' => 3000,
            'konfirmasi' => 'Selesai',
        ]);
    }
}
