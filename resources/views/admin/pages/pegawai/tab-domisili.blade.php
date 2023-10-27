<div class="tab-pane fade" id="domisili" role="tabpanel" aria-labelledby="domisili-tab">
    <div class="mb-3">
        <label class="form-label" for="textInput">Alamat</label>
        <textarea name="Jalan" class="form-control @error('Jalan') is-invalid @enderror">{{ $data->Jalan ?? '' }}</textarea>
        @error('Jalan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="textInput">No Rumah</label>
        <input type="text" name="No_rumah" id="No_rumah"
            class="form-control @error('No_rumah') is-invalid @enderror" placeholder="RT"
            value="{{ $data->No_rumah ?? '' }}">
        @error('No_rumah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="RT">RT</label>
        <input type="text" name="RT" id="RT" class="form-control @error('RT') is-invalid @enderror"
            placeholder="RT" value="{{ $data->RT ?? '' }}">
        @error('RT')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">RW</label>
        <input type="text" name="RW" id="RW" class="form-control @error('RW') is-invalid @enderror"
            placeholder="RW" value="{{ $data->RW ?? '' }}">
        @error('RW')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Provinsi</label>
        <select class="select2 form-select @error('id_provinsi') is-invalid @enderror" name="id_provinsi"
            data-placeholder="Pilih Provinsi">
            <option></option>
            @foreach ($provinsi as $prov)
                <option value="{{ $prov->id }}" @selected(($data->id_provinsi ?? '') == $prov->id)>
                    {{ $prov->provinsi }}
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
        <label class="form-label" for="selectOne">Kabupaten / Kota</label>
        <select class="select2 form-select @error('id_kabupaten') is-invalid @enderror" name="id_kabupaten"
            data-placeholder="Pilih Kabupaten">
            @foreach ($kabupaten as $kab)
                <option value="{{ $kab->id }}" @selected(($data->id_kabupaten ?? '') == $kab->id)>
                    {{ $kab->kabupaten }}
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
        <label class="form-label" for="selectOne">Kecamatan</label>
        <select class="select2 form-select @error('id_kecamatan') is-invalid @enderror" name="id_kecamatan"
            data-placeholder="Pilih Kecamatan">
            @foreach ($kecamatan as $camat)
                <option value="{{ $camat->id }}" @selected(($data->id_kecamatan ?? '') == $camat->id)>
                    {{ $camat->kecamatan }}
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
        <label class="form-label" for="selectOne">Kelurahan</label>
        <select class="select2 form-select @error('id_kelurahan') is-invalid @enderror" name="id_kelurahan"
            data-placeholder="Pilih Kelurahan">
            @foreach ($kelurahan as $kel)
                <option value="{{ $kel->id }}" @selected(($data->id_kelurahan ?? '') == $kel->id)>
                    {{ $kel->kelurahan }}
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
        <label class="form-label" for="selectOne">Kode Pos</label>
        <input type="text" name="kode_pos" id="kode_pos"
            class="form-control @error('kode_pos') is-invalid @enderror" placeholder="kode_pos"
            value="{{ $data->kode_pos ?? '' }}">
        @error('kode_pos')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Lintang</label>
        <input type="text" name="lintang" id="lintang" class="form-control @error('lintang') is-invalid @enderror"
            placeholder="lintang" value="{{ $data->lintang ?? '' }}">
        @error('lintang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">Bujur</label>
        <input type="text" name="bujur" id="bujur" class="form-control @error('bujur') is-invalid @enderror"
            placeholder="bujur" value="{{ $data->bujur ?? '' }}">
        @error('bujur')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="selectOne">No Telepon Rumah</label>
        <input type="text" name="no_telepon" id="no_telepon"
            class="form-control @error('no_telepon') is-invalid @enderror" placeholder="no_telepon"
            value="{{ $data->no_telepon ?? '' }}">
        @error('no_telepon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('admin.pegawai.index') }}" class="btn btn-secondary ml-4">Kembali</a>
    </div>

</div>
