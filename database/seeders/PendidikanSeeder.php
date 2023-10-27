<?php

namespace Database\Seeders;

use App\Models\Pendidikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendidikan::insert([
            [
             'Jenjang_pendidikan'=>'Tidak Sekolah',
            ],

            [
             'Jenjang_pendidikan'=>'Putus SD',
            ],

            [
             'Jenjang_pendidikan'=>'SD/Sederajat',
            ],

            [
             'Jenjang_pendidikan'=>'SMP/Sederajat',
            ],

            [
             'Jenjang_pendidikan'=>'SMA/Sederajat',
            ],

            [
             'Jenjang_pendidikan'=>'D1',
            ],

            [
             'Jenjang_pendidikan'=>'D2',
            ],

            [
             'Jenjang_pendidikan'=>'D3',
            ],

            [
             'Jenjang_pendidikan'=>'D4/S1',
            ],

            [
             'Jenjang_pendidikan'=>'S2',
            ],

            [
             'Jenjang_pendidikan'=>'S3',
            ],

        ]);
    }
}
