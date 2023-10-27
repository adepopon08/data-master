<?php

namespace Database\Seeders;

use App\Models\Penghasilan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenghasilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penghasilan::insert([
            [
             'penghasilan'=>'Kurang dari 500,000',
            ],

            [
             'penghasilan'=>'500.000 - 999.999',
            ],

            [
             'penghasilan'=>'1 juta - 1.999.999',
            ],

            [
             'penghasilan'=>'2 juta - 4.999.999',
            ],

            [
             'penghasilan'=>'5 juta - 20 juta',
            ],

            [
             'penghasilan'=>'lebih dari 20 juta',
            ],

        ]);

    }
}
