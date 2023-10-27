<div class="tab-pane fade" id="domisili" role="tabpanel" aria-labelledby="domisili-tab">
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
            <input type="text" name="RT" id="RT" class="form-control @error('RT') is-invalid @enderror"
                value="RT">
            @error('RT')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">RW</label>
            <input type="text" name="RW" id="RW" class="form-control @error('RW') is-invalid @enderror"
                value="RW">
            @error('RW')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="selectOne">Tempat Lahir</label>
            <select class="form-select @error('id_kelurahan') is-invalid @enderror" name="id_kelurahan"
                aria-label="Default select ">
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
            <label class="form-label" for="selectOne">Provinsi</label>
            <select class="select2 form-select @error('id_provinsi') is-invalid @enderror" name="id_provinsi"
                data-placeholder="Pilih Provinsi">
                <option></option>
                @foreach ($provinsi as $prov)
                    <option value="{{ $prov->id }}">
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
            <select class="form-select @error('id_kabupaten') is-invalid @enderror" name="id_kabupaten"
                aria-label="Default select ">
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
            <label class="form-label" for="selectOne">Kecamatan</label>
            <select class="form-select @error('id_kecamatan') is-invalid @enderror" name="id_kecamatan"
                aria-label="Default select ">
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
            <label class="form-label" for="selectOne">Kelurahan</label>
            <input type="text" name="NUPTK" id="NUPTK"
                class="form-control @error('NUPTK') is-invalid @enderror" value="NUPTK">
            @error('NUPTK')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="selectOne">Kode Pos</label>
            <input type="text" name="kode_pos" id="kode_pos"
                class="form-control @error('kode_pos') is-invalid @enderror" value="kode_pos">
            @error('kode_pos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="selectOne">No Telepon Rumah</label>
            <input type="text" name="no_telepon" id="no_telepon"
                class="form-control @error('no_telepon') is-invalid @enderror" value="no_telepon">
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
    </form>
</div>
