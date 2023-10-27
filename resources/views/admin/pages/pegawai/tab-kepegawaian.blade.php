  <div class="tab-pane fade" id="kepegawaian" role="tabpanel" aria-labelledby="kepegawaian-tab">
      <div class="mb-3">
          <label class="form-label" for="textInput">Status
              Kepegawaian</label>
          <select class="form-select @error('id_stat_peg') is-invalid @enderror" name="id_stat_peg"
              aria-label="Default select ">
              @foreach ($status_kepegawaian as $stat_peg)
                  <option value="{{ $stat_peg->id }}" @selected(($data->id_stat_peg ?? '') == $stat_peg->id)>
                      {{ $stat_peg->stat_peg }}
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
              data-placeholder="Default select ">
              @foreach ($jenis_ptk as $jnsptk)
                  <option value="{{ $jnsptk->id }}" @selected(($data->id_jns_ptk ?? '') == $jnsptk->id)>
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
          <label class="form-label" for="jenis_ptk">Pangkat</label>
          <select class="form-select @error('id_pangkat') is-invalid @enderror" name="id_pangkat"
              aria-label="Default select ">
              @foreach ($pangkat as $pkt)
                  <option value="{{ $pkt->id }}" @selected(($data->id_pangkat ?? '') == $pkt->id)>
                      {{ $pkt->pangkat }}
                  </option>
              @endforeach
          </select>
          @error('id_pangkat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="no_sk_cpns">SK CPNS</label>
          <input type="text" name="no_sk_cpns" id="no_sk_cpns"
              class="form-control @error('no_sk_cpns') is-invalid @enderror" placeholder="no_sk_cpns"
              value="{{ $data->no_sk_cpns ?? '' }}">
          @error('no_sk_cpns')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Tanggal CPNS</label>
          <input type="date" name="tgl_sk_cpns" id="tgl_sk_cpns"
              class="form-control @error('tgl_sk_cpns') is-invalid @enderror" placeholder="tgl_sk_cpns"
              value="{{ $data->tgl_sk_cpns ?? '' }}">
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
              class="form-control @error('no_sk_pengangkatan') is-invalid @enderror" placeholder="no_sk_pengangkatan"
              value="{{ $data->no_sk_pengangkatan ?? '' }}">
          @error('no_sk_pengangkatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">TMT Pengangkatan</label>
          <input type="date" name="tmt_pengangkatan" id="tmt_pengangkatan"
              class="form-control @error('tmt_pengangkatan') is-invalid @enderror" placeholder="tmt_pengangkatan"
              value="{{ $data->tmt_pengangkatan ?? '' }}">
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
              class="form-control @error('lembaga_pengangkatan') is-invalid @enderror"
              placeholder="lembaga_pengangkatan" value="{{ $data->lembaga_pengangkatan ?? '' }}">
          @error('lembaga_pengangkatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">No Kartu Pegawai</label>
          <input type="text" name="no_karpeg" id="no_karpeg"
              class="form-control @error('no_karpeg') is-invalid @enderror" placeholder="no_karpeg"
              value="{{ $data->no_karpeg ?? '' }}">
          @error('no_karpeg')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">No Karis/Karsu</label>
          <input type="text" name="no_karis_karsu" id="no_karis_karsu"
              class="form-control @error('no_karis_karsu') is-invalid @enderror" placeholder="no_karis_karsu"
              value="{{ $data->no_karis_karsu ?? '' }}">
          @error('no_karis_karsu')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Tugas Tambahan</label>
          <select class="form-select @error('id_tgstambahan ') is-invalid @enderror" name="id_tgstambahan "
              data-placeholder="Default select ">
              @foreach ($tugas_tambahan as $tgs_tambahan)
                  <option value="{{ $tgs_tambahan->id }}" @selected(($data->id_tgstambahan ?? '') == $tgs_tambahan->id)>
                      {{ $tgs_tambahan->tgs_tambahan }}
                  </option>
              @endforeach
          </select>
          @error('id_tgstambahan ')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Sumber Gaji</label>
          <select class="form-select @error('id_sumber_gaji ') is-invalid @enderror" name="id_sumber_gaji "
              data-placeholder="Default select ">
              @foreach ($sumber_gaji as $gaji)
                  <option value="{{ $gaji->id }}" @selected(($data->id_sumber_gaji ?? '') == $gaji->id)>
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
          <label class="form-label" for="selectOne">Nama Bank</label>
          <select class="form-select @error('id_bank ') is-invalid @enderror" name="id_bank "
              data-placeholder="Default select ">
              @foreach ($bank as $bnk)
                  <option value="{{ $bnk->id }}" @selected(($data->id_bank ?? '') == $bnk->id)>
                      {{ $bnk->nama_bank }}
                  </option>
              @endforeach
          </select>
          @error('id_bank ')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">No Rekening Bank</label>
          <input type="text" name="no_rek_bank" id="no_rek_bank"
              class="form-control @error('no_rek_bank') is-invalid @enderror" placeholder="no_rek_bank"
              value="{{ $data->no_rek_bank ?? '' }}">
          @error('no_rek_bank')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Rekening Atas Nama</label>
          <input type="text" name="rek_atas_nama" id="rek_atas_nama"
              class="form-control @error('rek_atas_nama') is-invalid @enderror" placeholder="rek_atas_nama"
              value="{{ $data->rek_atas_nama ?? '' }}">
          @error('rek_atas_nama')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Lisensi Kepala
              Sekolah</label>
          <input type="text" name="lisensi_kepsek" id="lisensi_kepsek"
              class="form-control @error('lisensi_kepsek') is-invalid @enderror" placeholder="lisensi_kepsek"
              value="{{ $data->lisensi_kepsek ?? '' }}">
          @error('lisensi_kepsek')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">NUKS</label>
          <input type="text" name="nuks" id="nuks"
              class="form-control @error('nuks') is-invalid @enderror" placeholder="nuks"
              value="{{ $data->nuks ?? '' }}">
          @error('nuks')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Diklat Pengawas</label>
          <select class="form-select @error('diklat_pengawas') is-invalid @enderror" name="diklat_pengawas"
              data-placeholder="Default select ">
              <option value="1" @selected(($data->diklat_pengawas ?? '') == 'IYA')>IYA</option>
              <option value="0" @selected(($data->diklat_pengawas ?? '') == 'TIDAK')>TIDAK</option>
          </select>
          @error('diklat_pengawas')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Keahlian Braille</label>
          <select class="form-select @error('keahlian_braille') is-invalid @enderror" name="keahlian_braille"
              data-placeholder="Default select ">
              <option value="1" @selected(($data->keahlian_braille ?? '') == 'IYA')>IYA</option>
              <option value="0" @selected(($data->keahlian_braille ?? '') == 'TIDAK')>TIDAK</option>
          </select>
          @error('keahlian_braille')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <label class="form-label" for="selectOne">Keahlian Bahasa Isyarat</label>
          <select class="form-select @error('keahlian_bahasa_isyarat') is-invalid @enderror"
              name="keahlian_bahasa_isyarat" data-placeholder="Default select ">
              <option value="1" @selected(($data->keahlian_bahasa_isyarat ?? '') == 'IYA')>IYA</option>
              <option value="0" @selected(($data->keahlian_bahasa_isyarat ?? '') == 'TIDAK')>TIDAK</option>
          </select>
          @error('keahlian_bahasa_isyarat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
          <button class="btn btn-primary">Submit</button>
          <a href="{{ route('admin.pegawai.index') }}" class="btn btn-secondary ml-4">Kembali</a>
      </div>
  </div>
