  <div class="tab-pane fade" id="kepegawaian" role="tabpanel" aria-labelledby="kepegawaian-tab">Kepegawaian
      <form action="{{ route('admin.pegawai.store') }}" method="POST">
          @csrf
          <div class="mb-3">
              <label class="form-label" for="textInput">Status
                  Kepegawaian</label>
              <select class="form-select @error('id_stat_peg') is-invalid @enderror" name="id_stat_peg"
                  aria-label="Default select ">
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
              <select class="form-select @error('id_jns_ptk') is-invalid @enderror" name="id_jns_ptk"
                  aria-label="Default select ">
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
                  class="form-control @error('no_sk_cpns') is-invalid @enderror" value="no_sk_cpns">
              @error('no_sk_cpns')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">Tanggal CPNS</label>
              <input type="text" name="tgl_sk_cpns" id="tgl_sk_cpns"
                  class="form-control @error('tgl_sk_cpns') is-invalid @enderror" value="tgl_sk_cpns">
              @error('tgl_sk_cpns')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">No SK
                  Pengangkatan</label>
              <input type="text" name="no_sk_pengangkatan" id="no_sk_pengangkatan"
                  class="form-control @error('no_sk_pengangkatan') is-invalid @enderror" value="no_sk_pengangkatan">
              @error('no_sk_pengangkatan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">TMT Pengangkatan</label>
              <input type="text" name="tmt_pengangkatan" id="tmt_pengangkatan"
                  class="form-control @error('tmt_pengangkatan') is-invalid @enderror" value="tmt_pengangkatan">
              @error('tmt_pengangkatan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">TMT PNS</label>
              <input type="date" name="tmt_pengangkatan" id="tmt_pengangkatan"
                  class="form-control @error('tmt_pengangkatan') is-invalid @enderror" value="tmt_pengangkatan">
              @error('tmt_pengangkatan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">Lembaga
                  Pengangkatan</label>
              <input type="text" name="lembaga_pengangkatan" id="lembaga_pengangkatan"
                  class="form-control @error('lembaga_pengangkatan') is-invalid @enderror" value="lembaga_pengangkatan">
              @error('lembaga_pengangkatan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">Sumber Gaji</label>
              <select class="form-select @error('id_sumber_gaji ') is-invalid @enderror" name="id_sumber_gaji "
                  aria-label="Default select ">
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
                  class="form-control @error('lisensi_kepsek') is-invalid @enderror" value="lisensi_kepsek">
              @error('lisensi_kepsek')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label" for="selectOne">NUKS</label>
              <input type="text" name="nuks" id="nuks"
                  class="form-control @error('nuks') is-invalid @enderror" value="nuks">
              @error('nuks')
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
