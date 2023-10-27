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
                'status_kawin' => 'Kawin',
            ],
            [
                'status_kawin' => 'Belum Kawin',
            ],
            [
                'status_kawin' => 'Cerai Hidup',
            ],
            [
                'status_kawin' => 'Cerai Mati',
            ]
        ]);
    }
}
