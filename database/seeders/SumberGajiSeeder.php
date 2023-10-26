<?php

namespace Database\Seeders;

use App\Models\SumberGaji;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SumberGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SumberGaji::insert([
            [
                'sumber_gaji' => 'APBD Provinsi',
            ],
            [
                'sumber_gaji' => 'Sekolah',
            ],
            [
                'sumber_gaji' => 'APBN',
            ],
        ]);
    }
}
