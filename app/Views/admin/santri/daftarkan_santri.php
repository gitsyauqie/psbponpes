<?= $this->extend('admin/layout/admin') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <div class="card-header">
          <h4 class="card-title">Daftarkan Santri</h4>
        </div>

        <ul class="stepper linear" id="linearStepper">
          <li class="step active">
            <div class="step-title waves-effect">Data Diri</div>
            <div class="step-content">
              <div class="row">
                <div class="input-field col m6 s12">
                  <input placeholder="16 Digit NIK" type="number" id="nik" name="nik" step="17" class="validate" required>
                  <label for="nik">NIK: <span class="red-text">*</span></label>
                </div>
                <div class="input-field col m6 s12">
                  <label for="nama">Nama Lengkap: <span class="red-text">*</span></label>
                  <input placeholder="GUNAKAN HURUF BESAR" type="text" id="nama" class="validate" name="nama" required>
                </div>
              </div>
              <div class="row">
                <div class="input-field col m6 s12">
                  <label for="tmp_lahir">Temp Lahir: <span class="red-text">*</span></label>
                  <input placeholder="Nama Kota" type="text" class="validate" name="tmp_lahir" id="tmp_lahir" required>
                </div>
                <div class="input-field col m6 s12">
                  <label for="tgl_lahir">Tanggal Lahir: <span class="red-text">*</span></label>
                  <input placeholder="" type="date" class="validate" name="tgl_lahir" id="tgl_lahir" required>
                </div>
              </div>

              <div class="row">
                <div class="input-field col m6 s12">
                  <label for="email">Email: <span class="red-text">*</span></label>
                  <input placeholder="Email" type="text" class="validate" name="email" id="tmp_lahir" required>
                </div>
                <div class="input-field col m6 s12">
                  <label for="no_wa">No WA: <span class="red-text">*</span></label>
                  <input placeholder="628xxx" type="number" class="validate" name="no_wa" id="tgl_lahir" required>
                </div>
              </div>

              <div class="row">

                <div class="input-field col m6 s12">
                  <label for="gol_darah" class="active">Golongan Darah: <span class="red-text">*</span></label>
                  <br>
                  <p>
                    <label>
                      <input class="with-gap" name="gol_darah" type="radio" />
                      <span>A</span>
                    </label>
                  </p>
                  <p> <label>
                      <input class="with-gap" name="gol_darah" type="radio" />
                      <span>AB</span>
                    </label>
                  </p>
                  <p> <label>
                      <input class="with-gap" name="gol_darah" type="radio" />
                      <span>B</span>
                    </label>
                  </p>
                  <p><label>
                      <input class="with-gap" name="gol_darah" type="radio" checked />
                      <span>O</span>
                    </label>
                  </p>
                </div>
                <div class="input-field col m6 s12">
                  <label for="gender" class="active">Jenis Kelamin: <span class="red-text">*</span></label>
                  <br>
                  <p>
                    <label>
                      <input class="with-gap" name="gender" type="radio" checked />
                      <span>Laki-laki</span>
                    </label>
                  </p>
                  <p> <label>
                      <input class="with-gap" name="gender" type="radio" />
                      <span>Perempuan</span>
                    </label>
                  </p>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col m6 s12">
                  <div class="divider mb-1 mt-1"></div>
                  <div class="row section">
                    <div class="col s12 m4 l3">
                      <p>Upload Foto</p>
                    </div>
                    <div class="col s12 m8 l9">
                      <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="1M" />
                      <p>Maximum file upload size 1MB.</p>
                      <p>Foto dengan background merah.</p>
                      <p>Foto rasio 3x4.</p>
                      <p>Gunakan file type .jpg, .jpeg, .png.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="step-actions">
                <div class="row">
                  <div class="col m4 s12 mb-3">
                    <button class="waves-effect waves dark btn btn-primary next-step" type="submit" id="step1">
                      Simpan
                      <i class="material-icons right">arrow_forward</i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>