<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Transportseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transport::insert([
            [
             'alat_transport'=>'Jalan Kaki',
            ],

            [
             'alat_transport'=>'Kendaraan Pribadi',
            ],

            [
             'alat_transport'=>'Kendaraan Umum/Angkot/Pete-pete',
            ],

            [
             'alat_transport'=>'Jemputan Sekolah',
            ],

            [
             'alat_transport'=>'Kereta Api',
            ],

            [
             'alat_transport'=>'Ojek',
            ],

            [
             'alat_transport'=>'Andong/Bendi/Sado/Dokar/Delman/Beca',
            ],

            [
             'alat_transport'=>'Perahu Penyebrangan/Rakit/Getek',
            ],

            [
             'alat_transport'=>'Lainnya',
            ],
        ]);
    }
}
