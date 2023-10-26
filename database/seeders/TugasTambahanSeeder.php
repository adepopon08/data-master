<?php

namespace Database\Seeders;

use App\Models\TugasTambahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasTambahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TugasTambahan::insert([
            [
                'tgs_tambahan' => 'Kepala Sekolah',
            ],
            [
                'tgs_tambahan' => 'Wakil Kepala Sekolah Kurikulum',
            ],
            [
                'tgs_tambahan' => 'Wakil Kepala Sekolah Humas',
            ],
            [
                'tgs_tambahan' => 'Wakil Kepala Sekolah Sarpras',
            ],
            [
                'tgs_tambahan' => 'Wakil Kepala Sekolah Kesiswaan',
            ],
            [
                'tgs_tambahan' => 'Ketua LPS-P1 untuk SMK',
            ],
            [
                'tgs_tambahan' => 'Pembina Pramuka Putri',
            ],
            [
                'tgs_tambahan' => 'Koordinator Bursa Kerja Khusus SMK',
            ],
            [
                'tgs_tambahan' => 'Pembina Ekstrakurikuler',
            ],
            [
                'tgs_tambahan' => 'Kepala Program Keahlian',
            ],
            [
                'tgs_tambahan' => 'Pelaksana PBJ',
            ],
            [
                'tgs_tambahan' => 'Pembina OSIS',
            ],
            [
                'tgs_tambahan' => 'Pembina Pramuka Putra',
            ],
            [
                'tgs_tambahan' => 'Koordinator P5',
            ],
            [
                'tgs_tambahan' => 'Kepala Perpustakaan',
            ],
            [
                'tgs_tambahan' => 'Kepala Laboratorium',
            ],
            [
                'tgs_tambahan' => 'Tenaga Perpustakaan',
            ],
        ]);
    }
}
