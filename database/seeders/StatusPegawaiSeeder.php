<?php

namespace Database\Seeders;

use App\Models\StatusPegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusPegawai::insert([
            [
                'stat_peg' => 'PNS',
            ],
            [
                'stat_peg' => 'PPPK',
            ],
            [
                'stat_peg' => 'Honor Daerah TK.I Provinsi',
            ],
            [
                'stat_peg' => 'Guru Honor Sekolah',
            ],
            [
                'stat_peg' => 'Tenaga Honor Sekolah',
            ]
        ]);
    }
}
