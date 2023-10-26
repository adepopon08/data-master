<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(base_path('database/data/provinsi.json'));
        $data = json_decode($json);

        foreach ($data as $d) {
            DB::table('tb_provinsi')->insert([
                'id' => $d->id,
                'provinsi' => $d->provinsi,
                'ibu_kota' => $d->ibu_kota,
                'p_bsni' => $d->p_bsni,
            ]);
        }

        Log::info('SQL Import Done Provinsi');
    }
}
