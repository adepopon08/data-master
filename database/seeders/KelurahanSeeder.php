<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(base_path('database/data/kelurahan.json'));
        $data = json_decode($json);

        foreach ($data as $d) {
            DB::table('tb_kelurahan')->insert([
                'id' => $d->id,
                'id_kecamatan' => $d->id_kecamatan,
                'kelurahan' => $d->kelurahan,
                'kode_pos' => $d->kode_pos,
            ]);
        }

        Log::info('SQL Import Done Provinsi');
    }
}
