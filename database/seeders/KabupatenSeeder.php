<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(base_path('database/data/kabupaten.json'));
        $data = json_decode($json);

        foreach ($data as $d) {
            DB::table('tb_kabupaten')->insert([
                'id' => $d->id,
                'id_provinsi' => $d->id_provinsi,
                'kabupaten' => $d->kabupaten,
                'ibu_kota' => $d->ibu_kota,
                'k_bsni' => $d->k_bsni,
            ]);
        }

        Log::info('SQL Import Done Provinsi');
    }
}
