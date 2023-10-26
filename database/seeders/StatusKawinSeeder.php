<?php

namespace Database\Seeders;

use App\Models\StatusKawin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusKawinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusKawin::insert([
            [
                'satatus_kawin' => 'Kawin',
            ],
            [
                'satatus_kawin' => 'Belum Kawin',
            ],
            [
                'satatus_kawin' => 'Cerai Hidup',
            ],
            [
                'satatus_kawin' => 'Cerai Mati',
            ]
        ]);
    }
}
