<div class="tab-pane fade show active" id="identitas" role="tabpanel" aria-labelledby="identitas-tab">

    <div class="mb-3">
        <label class="form-label" for="textInput">Nama</label>
        <input type="text" name="nama" id="textInput" class="form-control @error('nama') is-invalid @enderror"
            placeholder="Input Nama" value="{{ $data->nama ?? '' }}">
        @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                name="jenis_kelamin" id="jenis_kelamin1" value="L" @checked(($data->jenis_kelamin ?? '') == 'L')>
            <label class="form-check-label" for="jenis_kelamin1">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                name="jenis_kelamin" id="jenis_kelamin2" value="P" @checked(($data->jenis_kelamin ?? '') == 'P')>
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
        <input type="text" name="NIP" id="NIP" class="form-control @error('NIP') is-invalid @enderror"
            placeholder="NIP" value="{{ $data->NIP ?? '' }}">
        @error('NIP')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">NIK</label>
        <input type="text" name="NIK" id="NIK" class="form-control @error('NIK') is-invalid @enderror"
            placeholder="NIK" value="{{ $data->NIK ?? '' }}">
        @error('NIK')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">NUPTK</label>
        <input type="text" name="NUPTK" id="NUPTK" class="form-control @error('NUPTK') is-invalid @enderror"
            placeholder="NUPTK" value="{{ $data->NUPTK ?? '' }}">
        @error('NUPTK')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">No Kartu Keluarga</label>
        <input type="text" name="no_kk" id="no_kk" class="form-control @error('no_kk') is-invalid @enderror"
            placeholder="no_kk" value="{{ $data->no_kk ?? '' }}">
        @error('no_kk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir"
            class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="tempat_lahir"
            value="{{ $data->tempat_lahir ?? '' }}">
        @error('tempat_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir"
            class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="tgl_lahir"
            value="{{ $data->tgl_lahir ?? '' }}">
        @error('tgl_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Nama Ibu kandung</label>
        <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung"
            class="form-control @error('nama_ibu_kandung') is-invalid @enderror" placeholder="nama_ibu_kandung"
            {{ $data->nama_ibu_kandung ?? '' }}>
        @error('nama_ibu_kandung')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Agama</label>
        <select class="form-select @error('id_agama') is-invalid @enderror" name="id_agama"
            aria-label="Default select ">
            @foreach ($agama as $agm)
                <option value="{{ $agm->id }}" @selected(($data->id_agama ?? '') == $agm->id)>{{ $agm->nama_agama }}
                </option>
            @endforeach
        </select>
        @error('id_agama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">No HP</label>
        <input type="text" name="hp" id="hp" class="form-control @error('hp') is-invalid @enderror"
            placeholder="hp" value="{{ $data->hp ?? '' }}">
        @error('hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Email</label>
        <input type="email" name="email" id="email"
            class="form-control @error('email') is-invalid @enderror" placeholder="email"
            value="{{ $data->email ?? '' }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Status
            Perkawinan</label>
        <select class="form-select @error('id_statkawin') is-invalid @enderror" name="id_statkawin"
            aria-label="Default select ">
            @foreach ($status_kawin as $skawin)
                <option value="{{ $skawin->id }}" @selected(($data->id_statKawin ?? '') == $skawin->id)>
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
            class="form-control @error('nama_pasangan') is-invalid @enderror" plcaeholder="nama_pasangan"
            value="{{ $data->nama_pasangan ?? '' }}">
        @error('nama_pasangan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">NIP Suami/Istri</label>
        <input type="text" name="nip_pasangan" id="nip_pasangan"
            class="form-control @error('nip_pasangan') is-invalid @enderror" plcaeholder="nip_pasangan"
            value="{{ $data->nip_pasangan ?? '' }}">
        @error('nip_pasangan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Pekerjaan
            Suami/Istri</label>
        <select class="form-select @error('id_pekerjaan_pasangan') is-invalid @enderror" name="id_pekerjaan_pasangan"
            aria-label="Default select ">

            @foreach ($pekerjaan_pasangan as $pekpasangan)
                <option value="{{ $pekpasangan->id }}" @selected(($data->id_pekerjaan_pasangan ?? '') == $pekpasangan->id)>
                    {{ $pekpasangan->pekerjaan }}
                </option>
            @endforeach
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
            class="form-control @error('no_npwn') is-invalid @enderror" placeholder="no_npwn"
            value="{{ $data->npwn ?? '' }}">
        @error('no_npwn')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Nama Wajib Pajak</label>
        <input type="text" name="nama_wajib_pajak" id="nama_wajib_pajak"
            class="form-control @error('nama_wajib_pajak') is-invalid @enderror" placeholder="nama_wajib_pajak"
            value="{{ $data->nama_wajib_pajak ?? '' }}">
        @error('nama_wajib_pajak')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Kewarganegaraan</label>
        <select class="form-select @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan"
            data-placeholder="Pilih Kewarganegaraan">
            <option value="WNI" @selected(($data->kewarganegaraan ?? '') == 'WNI')>WNI</option>
            <option value="WNA" @selected(($data->kewarganegaraan ?? '') == 'WNA')>WNA</option>
        </select>
        @error('kewarganegaraan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="button" class="btn btn-primary" onclick="document.querySelector('#domisili-tab').click()"
            aria-selected="false">Berikutnya</button>
        {{-- <a href="{{ route('admin.pegawai.index') }}" class="btn btn-secondary ml-4">Kembali</a> --}}
    </div>
</div>
