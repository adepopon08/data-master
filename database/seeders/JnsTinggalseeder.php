<?php

namespace Database\Seeders;

use App\Models\JenisTinggal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JnsTinggalseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisTinggal::insert([
            [
             'jnstinggal'=>'Bersama Orang Tua',
            ],

            [
             'jnstinggal'=>'Wali',
            ],

            [
             'jnstinggal'=>'Kos',
            ],

            [
             'jnstinggal'=>'Asrama',
            ],

            [
             'jnstinggal'=>'Panti Asuha',
            ],

            [
             'jnstinggal'=>'Lainnya',
            ],
        ]);

    }
}
