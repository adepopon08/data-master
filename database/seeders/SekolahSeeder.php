<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::insert([
            [
             'npsn'=>'20233694',
             'nama_sekolah'=>'SMKN 1 Kawali',
             'Jenjang'=>'SLTA/Sederajat',
            ],

            [
             'npsn'=>'20211633',
             'nama_sekolah'=>'SMPN 1 Kawali',
             'Jenjang'=>'SLTP/Sederajat',
            ],

            [
             'npsn'=>'20278665',
             'nama_sekolah'=>'Mtsn 2 Ciamis',
             'Jenjang'=>'SLTP/Sederajat',
            ],

            [
             'npsn'=>'P2964266',
             'nama_sekolah'=>'PKBM Manggala Mekar',
             'Jenjang'=>'SLTP/Sederajat',
            ],


            ]);
    }
}
