<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pekerjaan::insert([
            [
             'pekerjaan'=>'Tidak Bekerja',
            ],
            [
             'pekerjaan'=>'Nelayan',
            ],

            [
             'pekerjaan'=>'Petani',
            ],

            [
             'pekerjaan'=>'Peternak',
            ],

            [
             'pekerjaan'=>'PNs/TNI/POLRI',
            ],

            [
             'pekerjaan'=>'Karyawan Swasta',
            ],

            [
             'pekerjaan'=>'Pedagang Kecil',
            ],

            [
             'pekerjaan'=>'Pedagang Besar',
            ],

            [
             'pekerjaan'=>'Wiraswasta',
            ],

            [
             'pekerjaan'=>'Wirausaha',
            ],

            [
             'pekerjaan'=>'Buruh',
            ],

            [
             'pekerjaan'=>'Lain-lain',
            ],
        ]);
    }
}
