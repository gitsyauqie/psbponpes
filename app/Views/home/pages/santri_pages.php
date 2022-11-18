

<?= $this->extend('home/layouts/form_layout') ?>


<?= $this->section('content') ?>

        <div class="container py-5 py-md-12" >
          <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
              <h2 class="display-4 mb-3 text-center" >Formulir Pendaftaran</h2>
              <p class="lead text-center mb-10">
                Silahkan di isi sesuai dengan data yang anda miliki.
              </p>
              
              <form
                class="contact-form "
                method="POST"
                action="/pendaftaran/simpan-data-santri"
                enctype="multipart/form-data"
              >

              <?= csrf_field()?>
                <div style="text-align: center">
                  <span class="step" id="step-1">1</span>
                  <span class="step" >2</span>
                  <span class="step" >3</span>
                  <span class="step" >4</span>
                </div>

                <div class="messages"></div>
                <div class="row gx-4">
                  <h3 class="lead mb-2">Data Diri</h3>
                  <div class="col-md-6">
                  
                    <div class="form-floating mb-4">
                      <input
                        id="form_nik"
                        type="number"
                        name="nik"
                        class="form-control <?= ($validation->hasError('nik') ? 'is-invalid' : '') ?>"
 
                      />
                      <label for="form_nik">NIK *</label>
                      <div class="invalid-feedback">
                      <?= $validation->getError('nik'); ?>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                  
                    <div class="form-floating mb-4">
                      <input
                        id="form_password"
                        type="password"
                        name="password"
                        class="form-control <?= ($validation->hasError('password') ? 'is-invalid' : '') ?>"
                          
                      />
                      <label for="form_password">Password *</label>
                      
                      <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nama"
                        type="text"
                        name="nama"
                        class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : '') ?>"
                        placeholder="Fajri"
                      />
                      <label for="form_nama">Nama Lengkap *</label>
                      <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tmp_lahir"
                        type="text"
                        name="tmp_lahir"
                        class="form-control <?= ($validation->hasError('tmp_lahir') ? 'is-invalid' : '') ?>"
                        placeholder="Yogyakarta"
                      />
                      <label for="form_tmp_lahir">Tempat Lahir *</label>
                      
                      <div class="invalid-feedback">
                      <?= $validation->getError('tmp_lahir'); ?>
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tgl_lahir"
                        type="date"
                        name="tgl_lahir"
                        class="form-control <?= ($validation->hasError('tgl_lahir') ? 'is-invalid' : '') ?>"
                        
                      />
                      <label for="form_tgl_lahir">Tanggal Lahir *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                      <?= $validation->getError('tgl_lahir'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control  <?= ($validation->hasError('email') ? 'is-invalid' : '') ?>"
                        
                      />
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_wa"
                        type="number"
                        name="no_wa"
                        class="form-control  <?= ($validation->hasError('no_wa') ? 'is-invalid' : '') ?>"
                        placeholder="+6282269079575"
                        
                      />
                      <label for="form_wa">No. Whatsapp *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select <?= ($validation->hasError('gender') ? 'is-invalid' : '') ?>" id="form-select" name="gender">
                        <option  value="">
                          Jenis Kelamin
                        </option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_golongandarah"
                        type="text"
                        name="gol_darah"
                        class="form-control <?= ($validation->hasError('gender') ? 'is-invalid' : '') ?>"
                        placeholder="A"
                        
                      />
                      <label for="form_golongandarah">Golongan Darah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tgl_daftar"
                        type="date"
                        name="tgl_daftar"
                        class="form-control <?= ($validation->hasError('tgl_daftar') ? 'is-invalid' : '') ?>"
                        
                      />
                      <label for="form_tgl_daftar">Tanggal Daftar *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Tanggal Harus Di isi.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select " id="form-select" name="ref_jenjang_id">
                        <option selected disabled value="">
                          Jenjang
                        </option>
                        <option value="L">SMK</option>
                        <option value="P">SMP</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="ref_jenispendaftaran_id" >
                        <option selected disabled value="">
                          Jenis Pendaftaran
                        </option>
                        <option value="L">Prestasi</option>
                        <option value="P">Tahfidz</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <img src="/img/default.jpg" alt="" class="img-thumbnail text-center imgPreview">
                  </div>
                  <div class="col-md-8">
                    <div class="form-floating mb-4">
                      <input
                        id="form_foto"
                        type="file"
                        name="foto"
                        class="form-control <?= ($validation->hasError('foto') ? 'is-invalid' : '') ?>"
                        onchange="previewImg()"

                      />
                      <label for="form_foto">Foto </label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div> 
                  </div>
                  

                  <div class="col-12 text-center">
                    <input type="submit" name="next" class="btn btn-success rounded-pill btn-send mb-3 px-10 mt-5"  value="Next" >
                    
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
                </div>
                
              
                  
                </div>
                <!-- /.row -->
              </form>
              <!-- /form -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
       
<?= $this->endSection() ?>