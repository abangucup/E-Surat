<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = [
            ['name' => 'Surat Personalia & SK', 'kode' => 'A'],
            ['name' => 'Surat Kegiatan Mahasiswa', 'kode' => 'B'],
            ['name' => 'Surat Undangan', 'kode' => 'C'],
            ['name' => 'Surat Tugas & DP3', 'kode' => 'D'],
            ['name' => 'Surat Berita Acara', 'kode' => 'E'],
        ];

        foreach ($jenis as $item) {
            Jenis::create($item);
        }
    }
}
