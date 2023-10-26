<?php

namespace Database\Seeders;

use App\Models\ProgramBantuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramBantuan::insert([
            [
                'prgbantuan' => 'PIP',
            ],
            [
                'prgbantuan' => 'KKS',
            ]
        ]);
    }
}
