<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(base_path('database/data/kecamatan.json'));
        $data = json_decode($json);

        foreach ($data as $d) {
            DB::table('tb_kecamatan')->insert([
                'id' => $d->id,
                'id_kabupaten' => $d->id_kabupaten,
                'kecamatan' => $d->kecamatan,
            ]);
        }

        Log::info('SQL Import Done Provinsi');
    }
}
