<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Agama::insert([
       [
        'nama_agama'=>'ISLAM',
       ],
       [
        'nama_agama'=>'PROTESTAN',
       ],
       [
        'nama_agama'=>'KATOLIK',
       ],
       [
        'nama_agama'=>'HINDU',
       ],
       [
        'nama_agama'=>'BUDHA',
       ],
       [
        'nama_agama'=>'KHONGHUCU',
       ],
       [
        'nama_agama'=>'KEPERCAYAAN KEPADA TUHAN YME',
       ],
       [
        'nama_agama'=>'LAINNYA',
       ],
       ]);
    }
}
