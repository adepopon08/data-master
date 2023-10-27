<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pangkat::insert([
            [
                'pangkat' => 'Juru Muda/Ia',
            ],
            [
                'pangkat' => 'Juru Muda Tingkat 1/Ib',
            ],
            [
                'pangkat' => 'Juru/Ic',
            ],
            [
                'pangkat' => 'Juru Tingkat 1/Id',
            ],
            [
                'pangkat' => 'Pengatur Muda/IIa',
            ],
            [
                'pangkat' => 'Pengatur Muda Tingkat 1/IIb',
            ],
            [
                'pangkat' => 'Pengatur/IIc',
            ],
            [
                'pangkat' => 'Pengatur Tingkat 1/IId',
            ],
            [
                'pangkat' => 'Penata Muda/IIIa',
            ],
            [
                'pangkat' => 'Penata Muda Tingkat 1/IIIb',
            ],
            [
                'pangkat' => 'Penata/IIIc',
            ],
            [
                'pangkat' => 'Penata Tingkat 1/IIId',
            ],
            [
                'pangkat' => 'Pembina/IVa',
            ],
            [
                'pangkat' => 'Pembina Tingkat 1/IVb',
            ],
            [
                'pangkat' => 'Pembina Utama Muda/IVc',
            ],
            [
                'pangkat' => 'Pembina Utama Madya/IVd',
            ],
            [
                'pangkat' => 'Pembina Utama/IVe',
            ],
        ]);
    }
}
