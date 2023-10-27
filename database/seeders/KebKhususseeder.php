<?php

namespace Database\Seeders;

use App\Models\KebKhusus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KebKhususseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KebKhusus::insert([
            [
             'kebkhusus'=>'Tidak',
            ],

            [
             'kebkhusus'=>'Netra (A)',
            ],

            [
             'kebkhusus'=>'Rungu (B)',
            ],

            [
             'kebkhusus'=>'Grahita Ringan (C)',
            ],

            [
             'kebkhusus'=>'Grahita Sedang (C1)',
            ],

            [
             'kebkhusus'=>'Daksa Ringan (D)',
            ],

            [
             'kebkhusus'=>'Daksa Sedang (D1)',
            ],

            [
             'kebkhusus'=>'Laras (E)',
            ],

            [
             'kebkhusus'=>'Wicara (F)',
            ],

            [
             'kebkhusus'=>'Tuna Ganda (G)',
            ],

            [
             'kebkhusus'=>'Hiper Aktif (H)',
            ],

            [
             'kebkhusus'=>'Cerdas Istimewa (I)',
            ],

            [
             'kebkhusus'=>'Bakat Istimewa (J)',
            ],

            [
             'kebkhusus'=>'Kesulitan Belajar (K)',
            ],

            [
             'kebkhusus'=>'Narkoba (N)',
            ],

            [
             'kebkhusus'=>'Indigo (O)',
            ],

            [
             'kebkhusus'=>'Down Sindrome (P)',
            ],

            [
             'kebkhusus'=>'Autis (Q)',
            ],

        ]);

    }
}
