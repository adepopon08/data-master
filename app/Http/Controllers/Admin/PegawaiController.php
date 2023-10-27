<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\JenisPtk;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\StatusKawin;
use App\Models\StatusPegawai;
use App\Models\SumberGaji;
use App\Models\TugasTambahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
        $validated = $request->validate([
            'nama' => ['sometimes', 'required'],
            'NIK' => ['sometimes', 'required'],
            'NIP' => ['sometimes', 'nullable'],
            'NUPTK' => ['sometimes', 'nullable'],
            'email' => ['sometimes', 'required'],
            'jenis_kelamin' => ['sometimes', 'required'],
            'tempat_lahir' => ['sometimes', 'required'],
            'tgl_lahir' => ['sometimes', 'required'],
            'id_stat_peg' => ['sometimes', 'nullable'],
            'id_jns_ptk' => ['sometimes', 'nullable'],
            'id_agama' => ['sometimes', 'nullable'],
            'Jalan' => ['sometimes', 'required'],
            'No_rumah' => ['sometimes', 'required'],
            'RT' => ['sometimes', 'required'],
            'RW' => ['sometimes', 'required'],
            'id_provinsi' => ['sometimes', 'nullable'],
            'id_kabupaten' => ['sometimes', 'nullable'],
            'id_kecamatan' => ['sometimes', 'nullable'],
            'id_kelurahan' => ['sometimes', 'nullable'],
            'kode_pos' => ['sometimes', 'nullable'],
            'no_telepon' => ['sometimes', 'nullable'],
            'hp' => ['sometimes', 'nullable'],
            'email' => ['sometimes', 'nullable'],
            'lintang' => ['sometimes', 'nullable'],
            'bujur' => ['sometimes', 'nullable'],
            'id_tgstambahan' => ['sometimes', 'nullable'],
            'no_sk_cpns' => ['sometimes', 'nullable'],
            'tgl_sk_cpns' => ['sometimes', 'nullable'],
            'no_sk_pengangkatan' => ['sometimes', 'nullable'],
            'tmt_pengangkatan' => ['sometimes', 'nullable'],
            'lembaga_pengangkatan' => ['sometimes', 'nullable'],
            'id_pangkat' => ['sometimes', 'nullable'],
            'nama_ibu_kandung' => ['sometimes', 'nullable'],
            'id_statkawin' => ['sometimes', 'nullable'],
            'nama_pasangan' => ['sometimes', 'nullable'],
            'nip_pasangan' => ['sometimes', 'nullable'],
            'id_pekerjaan_pasangan' => ['sometimes', 'nullable'],
            'lisensi_kepsek' => ['sometimes', 'nullable'],
            'diklat_pengawas' => ['sometimes', 'nullable'],
            'keahlian_braille' => ['sometimes', 'nullable'],
            'keahlian_bahasa_isyarat' => ['sometimes', 'nullable'],
            'no_npwp' => ['sometimes', 'nullable'],
            'nama_wajib_pajak' => ['sometimes', 'nullable'],
            'kewarganegaraan' => ['sometimes', 'nullable'],
            'id_bank' => ['sometimes', 'nullable'],
            'no_rek_bank' => ['sometimes', 'nullable'],
            'rek_atas_nama' => ['sometimes', 'nullable'],
            'no_kk' => ['sometimes', 'nullable'],
            'no_karpeg' => ['sometimes', 'nullable'],
            'no_karis_karsu' => ['sometimes', 'nullable'],
            'nuks' => ['sometimes', 'nullable'],
        ]);

        $created = Pegawai::create($validated);
        if ($created) {
            return redirect()->route('admin.roles.index')->with('success', 'Data berhasil disimpan.');
        }
        return redirect()->route('admin.roles.index')->with('error', 'Data gagal disimpan.');
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

    public function lists(Request $request)
    {
        $columns = ['a.id', 'a.nama', 'a.nip', 'a.jenis_kelamin', 'a.id_jns_ptk', 'b.jenis_ptk'];
        if ($request->wantsJson()) {
            $data = DB::table('tb_ptk AS a')
                ->select($columns)
                ->leftJoin('tb_jnsptk AS b', 'a.id_jns_ptk', '=', 'b.id');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a class="btn btn-primary btn-sm" href="' . route('admin.roles.edit', $row->id) . '"><i class="bi bi-pen"></i></a>';
                    $actionBtn .= ' <a role="button"
                    onclick="showConfirmDialog(`Yakin anda akan menghapus data ini?`, () => destroy(`' . $row->id . '`))"
                    class="confirm-delete btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i>
                </a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
