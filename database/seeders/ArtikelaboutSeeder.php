<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\artikelabout;

class ArtikelaboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        artikelabout::create([
            'judul' => 'Menjaga Lingkungan Sekitar Dapat Dimulai Dengan Bijak Kelola Sampah Disekitar Kita!',
            'isi' => 'Membuang sampah pada tempatnya tak lagi cukup untuk atasi timbunan sampah di TPA dan lingkungan sekitar. Melalui program Change Your Waste, Anda dapat mendaur ulang secara optimal.
                        Yuk ikut berpartisipasi menjaga lingkungan dengan memilah dan mengirimkan sampah anorganik Anda kepada kami.
                        Cek informasi lebih lanjut untuk mengetahui jenis sampah yang bisa dikelola oleh Change Your Waste.',
            'gambar' => 'menjaga-sampah.jpg'
        ]);
    }
}
