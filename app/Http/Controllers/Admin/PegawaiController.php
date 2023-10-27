<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\JenisPtk;
use App\Models\Pangkat;
use App\Models\StatusKawin;
use App\Models\StatusPegawai;
use App\Models\SumberGaji;
use App\Models\TugasTambahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('admin.pages.pegawai.index');
    }

    public function create()
    {
        $data = [
            'status_kawin' => StatusKawin::get(),
            'status_kepegawaian' => StatusPegawai::get(),
            'jenis_ptk' => JenisPtk::get(),
            'sumber_gaji' => SumberGaji::get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kabupaten' => DB::table('tb_kabupaten')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->get(),
            'kelurahan' => DB::table('tb_kelurahan')->get(),
            'bank' => Bank::get(),
            'pangkat' => Pangkat::get(),
            'tugas_tambahan' => TugasTambahan::get(),
        ];
        return view('admin.pages.pegawai.create', $data);
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = [
            'status_kawin' => StatusKawin::get(),
            'status_kepegawaian' => StatusPegawai::get(),
            'jenis_ptk' => JenisPtk::get(),
            'sumber_gaji' => SumberGaji::get(),
            'provinsi' => DB::table('tb_provinsi')->get(),
            'kabupaten' => DB::table('tb_kabupaten')->get(),
            'kecamatan' => DB::table('tb_kecamatan')->get(),
            'kelurahan' => DB::table('tb_kelurahan')->get(),
            'bank' => Bank::get(),
            'pangkat' => Pangkat::get(),
            'tugas_tambahan' => TugasTambahan::get(),
        ];
        return view('admin.pages.pegawai.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
