<?php

namespace Database\Seeders;

use App\Models\KartuBantuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KartuBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KartuBantuan::insert([
            [
                'no_krtbantuan' => 'PYCZD6',
                'nama_krtbantuan' => 'KIP',
                'nama_pdkrt' => 'AAN',
            ],
        ]);
    }
}
