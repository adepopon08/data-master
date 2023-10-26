<?php

namespace Database\Seeders;

use App\Models\JenisPtk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPtkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisPtk::insert([
            [
                'jenis_ptk' => 'Pendidik',
            ],
            [
                'jenis_ptk' => 'Tenaga Kependidikan',
            ]
        ]);
    }
}
