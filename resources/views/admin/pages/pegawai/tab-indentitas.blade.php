<div class="tab-pane fade show active" id="identitas" role="tabpanel" aria-labelledby="identitas-tab">
    <form action="{{ route('admin.pegawai.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="textInput">Nama</label>
            <input type="text" name="nama" id="textInput" class="form-control @error('nama') is-invalid @enderror"
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
                <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                    name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki">
                <label class="form-check-label" for="jenis_kelamin1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                    name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
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
                value="NIP">
            @error('NIP')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">NIK</label>
            <input type="text" name="NIK" id="NIK" class="form-control @error('NIK') is-invalid @enderror"
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
                class="form-control @error('NUPTK') is-invalid @enderror" value="NUPTK">
            @error('NUPTK')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir"
                class="form-control @error('tempat_lahir') is-invalid @enderror" value="tempat_lahir">
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir"
                class="form-control @error('tgl_lahir') is-invalid @enderror" value="tgl_lahir">
            @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Nama Ibu kandung</label>
            <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung"
                class="form-control @error('nama_ibu_kandung') is-invalid @enderror" value="nama_ibu_kandung">
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
                class="form-control @error('hp') is-invalid @enderror" value="hp">
            @error('hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Email</label>
            <input type="email" name="email" id="email"
                class="form-control @error('email') is-invalid @enderror" value="email">
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
                class="form-control @error('nama_pasangan') is-invalid @enderror" value="nama_pasangan">
            @error('nama_pasangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">NIP Suami/Istri</label>
            <input type="text" name="nip_pasangan" id="nip_pasangan"
                class="form-control @error('nip_pasangan') is-invalid @enderror" value="nip_pasangan">
            @error('nip_pasangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Pekerjaan
                Suami/Istri</label>
            <select class="form-select @error('id_pekerjaan_pasangan') is-invalid @enderror"
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
                class="form-control @error('no_npwn') is-invalid @enderror" value="no_npwn">
            @error('no_npwn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
            <a href="{{ route('admin.pegawai.index') }}" class="btn btn-secondary ml-4">Kembali</a>
        </div>
    </form>
</div>
