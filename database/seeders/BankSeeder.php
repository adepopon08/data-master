<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::insert([
            [
                'nama_bank' => 'Bank Mandiri',
            ],
            [
                'nama_bank' => 'Bank Negara Indonesia (BNI)',
            ],
            [
                'nama_bank' => 'Bank Rakyat Indonesia (BRI)',
            ],
            [
                'nama_bank' => 'Bank Tabungan Negara (BTN)',
            ],
            [
                'nama_bank' => 'Bank Bukopin',
            ],
            [
                'nama_bank' => 'Bank Central Asia (BCA)',
            ],
            [
                'nama_bank' => 'Bank CIMB Niaga',
            ],
            [
                'nama_bank' => 'Bank Danamon Indonesia',
            ],
            [
                'nama_bank' => 'Bank Permata',
            ],
            [
                'nama_bank' => 'Bank BJB',
            ],
            [
                'nama_bank' => 'Bank BNI Syariah',
            ],
            [
                'nama_bank' => 'Bank Syariah Mandiri',
            ],
            [
                'nama_bank' => 'BCA Syariah',
            ],
            [
                'nama_bank' => 'Bank BJB Syariah',
            ],
            [
                'nama_bank' => 'Bank BRI Syariah',
            ],
            [
                'nama_bank' => 'Bank BTPN',
            ],
            [
                'nama_bank' => 'Bank BTN Syariah',
            ],
        ]);
    }
}
