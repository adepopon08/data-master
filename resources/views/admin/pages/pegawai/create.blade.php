@extends('admin.layouts.master')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Tambah Data Pegawai</h3>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- Tabs navs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="identitas-tab" data-bs-toggle="tab"
                                    data-bs-target="#identitas" type="button" role="tab" aria-controls="identitas"
                                    aria-selected="true">Identitas</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="domisili-tab" data-bs-toggle="tab" data-bs-target="#domisili"
                                    type="button" role="tab" aria-controls="domisili"
                                    aria-selected="false">Domisili</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="kepegawaian-tab" data-bs-toggle="tab"
                                    data-bs-target="#kepegawaian" type="button" role="tab" aria-controls="kepegawaian"
                                    aria-selected="false">Kepegawaian</button>
                            </li>

                        </ul>

                        <!-- Tabs navs -->


                        <!-- Tabs content -->
                        <!-- content -->
                        <div class="row">
                            <div class="col-md-12 mt-6">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- card title -->
                                        <!-- Tabs content -->
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="identitas" role="tabpanel"
                                                aria-labelledby="identitas-tab">
                                                <form action="{{ route('admin.pegawai.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label" for="textInput">Nama</label>
                                                        <input type="text" name="nama" id="textInput"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            placeholder="Input Nama">
                                                        @error('nama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                                                type="radio" name="jenis_kelamin" id="jenis_kelamin1"
                                                                value="Laki-laki">
                                                            <label class="form-check-label" for="jenis_kelamin1">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                                                type="radio" name="jenis_kelamin" id="jenis_kelamin2"
                                                                value="Perempuan">
                                                            <label class="form-check-label" for="jenis_kelamin2">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                        @error('jenis_kelamin')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="NIP">NIP</label>
                                                        <input type="text" name="NIP" id="NIP"
                                                            class="form-control @error('NIP') is-invalid @enderror"
                                                            value="NIP">
                                                        @error('NIP')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">NIK</label>
                                                        <input type="text" name="NIK" id="NIK"
                                                            class="form-control @error('NIK') is-invalid @enderror"
                                                            value="NIK">
                                                        @error('NIK')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">NUPTK</label>
                                                        <input type="text" name="NUPTK" id="NUPTK"
                                                            class="form-control @error('NUPTK') is-invalid @enderror"
                                                            value="NUPTK">
                                                        @error('NUPTK')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Tempat Lahir</label>
                                                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                            value="tempat_lahir">
                                                        @error('tempat_lahir')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Tanggal Lahir</label>
                                                        <input type="date" name="tgl_lahir" id="tgl_lahir"
                                                            class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                            value="tgl_lahir">
                                                        @error('tgl_lahir')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Nama Ibu kandung</label>
                                                        <input type="text" name="nama_ibu_kandung"
                                                            id="nama_ibu_kandung"
                                                            class="form-control @error('nama_ibu_kandung') is-invalid @enderror"
                                                            value="nama_ibu_kandung">
                                                        @error('nama_ibu_kandung')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Agama</label>
                                                        <select class="form-select @error('id_agama') is-invalid @enderror"
                                                            name="id_agama" aria-label="Default select ">
                                                            <option value="Islam">Islam</option>
                                                            {{-- @foreach ($agama as $agm)
                                                                <option value="{{ $agm->id }}">{{ $agm->nama_agama }}
                                                                </option>
                                                            @endforeach --}}
                                                        </select>
                                                        @error('id_agama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">No HP</label>
                                                        <input type="text" name="hp" id="hp"
                                                            class="form-control @error('hp') is-invalid @enderror"
                                                            value="hp">
                                                        @error('hp')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            value="email">
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Status
                                                            Perkawinan</label>
                                                        <select
                                                            class="form-select @error('id_statkawin') is-invalid @enderror"
                                                            name="id_statkawin" aria-label="Default select ">
                                                            @foreach ($status_kawin as $skawin)
                                                                <option value="{{ $skawin->id }}">
                                                                    {{ $skawin->status_kawin }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_statkawin')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Nama Suami/Istri</label>
                                                        <input type="text" name="nama_pasangan" id="nama_pasangan"
                                                            class="form-control @error('nama_pasangan') is-invalid @enderror"
                                                            value="nama_pasangan">
                                                        @error('nama_pasangan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">NIP Suami/Istri</label>
                                                        <input type="text" name="nip_pasangan" id="nip_pasangan"
                                                            class="form-control @error('nip_pasangan') is-invalid @enderror"
                                                            value="nip_pasangan">
                                                        @error('nip_pasangan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Pekerjaan
                                                            Suami/Istri</label>
                                                        <select
                                                            class="form-select @error('id_pekerjaan_pasangan') is-invalid @enderror"
                                                            name="id_pekerjaan_pasangan" aria-label="Default select ">
                                                            <option value="Wiraswasta">Wiraswasta</option>
                                                            {{-- @foreach ($pekerjaan_pasangan as $pekpasangan)
                                                                <option value="{{ $pekpasangan->id }}">
                                                                    {{ $pekpasangan->pekerjaan }}
                                                                </option>
                                                            @endforeach --}}
                                                        </select>
                                                        @error('id_pekerjaan_pasangan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">NPWP</label>
                                                        <input type="text" name="no_npwn" id="no_npwn"
                                                            class="form-control @error('no_npwn') is-invalid @enderror"
                                                            value="no_npwn">
                                                        @error('no_npwn')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary">Submit</button>
                                                        <a href="{{ route('admin.pegawai.index') }}"
                                                            class="btn btn-secondary ml-4">Kembali</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="domisili" role="tabpanel"
                                                aria-labelledby="domisili-tab">
                                                <form action="{{ route('admin.pegawai.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label" for="textInput">Alamat</label>
                                                        <textarea name="Jalan" class="form-control @error('Jalan') is-invalid @enderror"></textarea>
                                                        @error('Jalan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="RT">RT</label>
                                                        <input type="text" name="RT" id="RT"
                                                            class="form-control @error('RT') is-invalid @enderror"
                                                            value="RT">
                                                        @error('RT')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">RW</label>
                                                        <input type="text" name="RW" id="RW"
                                                            class="form-control @error('RW') is-invalid @enderror"
                                                            value="RW">
                                                        @error('RW')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Kelurahan</label>
                                                        <input type="text" name="NUPTK" id="NUPTK"
                                                            class="form-control @error('NUPTK') is-invalid @enderror"
                                                            value="NUPTK">
                                                        @error('NUPTK')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Tempat Lahir</label>
                                                        <select
                                                            class="form-select @error('id_kelurahan') is-invalid @enderror"
                                                            name="id_kelurahan" aria-label="Default select ">
                                                            @foreach ($kelurahan as $lurah)
                                                                <option value="{{ $lurah->id }}">
                                                                    {{ $lurah->nama_agama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_kelurahan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Kecamatan</label>
                                                        <select
                                                            class="form-select @error('id_kecamatan') is-invalid @enderror"
                                                            name="id_kecamatan" aria-label="Default select ">
                                                            @foreach ($kecamatan as $camat)
                                                                <option value="{{ $camat->id }}">
                                                                    {{ $camat->nama_agama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_kecamatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Kabupaten / Kota</label>
                                                        <select
                                                            class="form-select @error('id_kabupaten') is-invalid @enderror"
                                                            name="id_kabupaten" aria-label="Default select ">
                                                            @foreach ($kabupaten as $kab)
                                                                <option value="{{ $kab->id }}">
                                                                    {{ $kab->nama_agama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_kabupaten')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Provinsi</label>
                                                        <select
                                                            class="form-select @error('id_provinsi') is-invalid @enderror"
                                                            name="id_provinsi" aria-label="Default select ">
                                                            @foreach ($provinsi as $prov)
                                                                <option value="{{ $prov->id }}">
                                                                    {{ $prov->nama_agama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_provinsi')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Kode Pos</label>
                                                        <input type="text" name="kode_pos" id="kode_pos"
                                                            class="form-control @error('kode_pos') is-invalid @enderror"
                                                            value="kode_pos">
                                                        @error('kode_pos')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">No Telepon Rumah</label>
                                                        <input type="text" name="no_telepon" id="no_telepon"
                                                            class="form-control @error('no_telepon') is-invalid @enderror"
                                                            value="no_telepon">
                                                        @error('no_telepon')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary">Submit</button>
                                                        <a href="{{ route('admin.pegawai.index') }}"
                                                            class="btn btn-secondary ml-4">Kembali</a>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="kepegawaian" role="tabpanel"
                                                aria-labelledby="kepegawaian-tab">Kepegawaian
                                                <form action="{{ route('admin.pegawai.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label" for="textInput">Status
                                                            Kepegawaian</label>
                                                        <select
                                                            class="form-select @error('id_stat_peg') is-invalid @enderror"
                                                            name="id_stat_peg" aria-label="Default select ">
                                                            @foreach ($status_kepegawaian as $stat_peg)
                                                                <option value="{{ $stat_peg->id }}">
                                                                    {{ $stat_peg->status_kawin }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_stat_peg')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="jenis_ptk">Jenis
                                                            PTK</label>
                                                        <select
                                                            class="form-select @error('id_jns_ptk') is-invalid @enderror"
                                                            name="id_jns_ptk" aria-label="Default select ">
                                                            @foreach ($jenis_ptk as $jnsptk)
                                                                <option value="{{ $jnsptk->id }}">
                                                                    {{ $jnsptk->jenis_ptk }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_jns_ptk')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="no_sk_cpns">SK CPNS</label>
                                                        <input type="text" name="no_sk_cpns" id="no_sk_cpns"
                                                            class="form-control @error('no_sk_cpns') is-invalid @enderror"
                                                            value="no_sk_cpns">
                                                        @error('no_sk_cpns')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Tanggal CPNS</label>
                                                        <input type="text" name="tgl_sk_cpns" id="tgl_sk_cpns"
                                                            class="form-control @error('tgl_sk_cpns') is-invalid @enderror"
                                                            value="tgl_sk_cpns">
                                                        @error('tgl_sk_cpns')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">No SK
                                                            Pengangkatan</label>
                                                        <input type="text" name="no_sk_pengangkatan"
                                                            id="no_sk_pengangkatan"
                                                            class="form-control @error('no_sk_pengangkatan') is-invalid @enderror"
                                                            value="no_sk_pengangkatan">
                                                        @error('no_sk_pengangkatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">TMT Pengangkatan</label>
                                                        <input type="text" name="tmt_pengangkatan"
                                                            id="tmt_pengangkatan"
                                                            class="form-control @error('tmt_pengangkatan') is-invalid @enderror"
                                                            value="tmt_pengangkatan">
                                                        @error('tmt_pengangkatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">TMT PNS</label>
                                                        <input type="date" name="tmt_pengangkatan"
                                                            id="tmt_pengangkatan"
                                                            class="form-control @error('tmt_pengangkatan') is-invalid @enderror"
                                                            value="tmt_pengangkatan">
                                                        @error('tmt_pengangkatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Lembaga
                                                            Pengangkatan</label>
                                                        <input type="text" name="lembaga_pengangkatan"
                                                            id="lembaga_pengangkatan"
                                                            class="form-control @error('lembaga_pengangkatan') is-invalid @enderror"
                                                            value="lembaga_pengangkatan">
                                                        @error('lembaga_pengangkatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Sumber Gaji</label>
                                                        <select
                                                            class="form-select @error('id_sumber_gaji ') is-invalid @enderror"
                                                            name="id_sumber_gaji " aria-label="Default select ">
                                                            @foreach ($sumber_gaji as $gaji)
                                                                <option value="{{ $gaji->id }}">
                                                                    {{ $gaji->sumber_gaji }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_sumber_gaji ')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">Lisensi Kepala
                                                            Sekolah</label>
                                                        <input type="text" name="lisensi_kepsek" id="lisensi_kepsek"
                                                            class="form-control @error('lisensi_kepsek') is-invalid @enderror"
                                                            value="lisensi_kepsek">
                                                        @error('lisensi_kepsek')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="selectOne">NUKS</label>
                                                        <input type="text" name="nuks" id="nuks"
                                                            class="form-control @error('nuks') is-invalid @enderror"
                                                            value="nuks">
                                                        @error('nuks')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary">Submit</button>
                                                        <a href="{{ route('admin.pegawai.index') }}"
                                                            class="btn btn-secondary ml-4">Kembali</a>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
