<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JenisPtk;
use App\Models\KartuBantuan;
use App\Models\Role;
use App\Models\Sekolah;
use App\Models\SumberGaji;
use App\Models\TugasTambahan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            AgamaSeeder::class,
            JenisPtkSeeder::class,
            StatusKawinSeeder::class,
            StatusPegawaiSeeder::class,
            SekolahSeeder::class,
            SumberGajiSeeder::class,
            TugasTambahanSeeder::class,
            PenghasilanSeeder::class,
            BankSeeder::class,
            KartuBantuanSeeder::class,
            KebKhususseeder::class,
            PangkatSeeder::class,
            PekerjaanSeeder::class,
            PendidikanSeeder::class,
            ProgramBantuanSeeder::class,
            Transportseeder::class,
            JnsTinggalseeder::class,
            ProvinsiSeeder::class,
            KabupatenSeeder::class,
            // KecamatanSeeder::class,
            // KelurahanSeeder::class
        ]);
    }
}
