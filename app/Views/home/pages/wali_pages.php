<?= $this->extend('home/layouts/form_layout') ?>
<?= $this->section('content') ?>
        <div class="container py-5 py-md-12" >
          <div class="row" >
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
              <h2 class="display-4 mb-3 text-center" >Formulir Pendaftaran</h2>
              <p class="lead text-center mb-10">
                Silahkan di isi sesuai dengan data yang anda miliki.
              </p>
              <form
                class="contact-form "
                method="POST"
                action="/pendaftaran/simpan-data-wali"
                enctype="multipart/form-data"
              >

              <?= csrf_field()?>
                <div style="text-align: center">
                  <span class="step" >1</span>
                  <span class="step" id="step-2">2</span>
                  <span class="step" >3</span>
                  <span class="step" >4</span>
                </div>

                <div class="messages"></div>
                
                <div class="row gx-4">
                  <h3 class="lead mb-2">Data Orang Tua/Wali</h3>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nama_ayah"
                        type="text"
                        name="nama_ayah"
                        class="form-control  <?= ($validation->hasError('nama_ayah') ? 'is-invalid' : '') ?>"
                      />
                      <label for="form_nik_ayah">Nama Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nik_ayah"
                        type="number"
                        name="nik_ayah"
                        class="form-control"
                        placeholder="14222222222"
                        
                      />
                      <label for="form_nik_ayah">NIK Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tmplahir_ayah"
                        type="text"
                        name="tmp_lahir_ayah"
                        class="form-control"
                      />
                      <label for="form_tmplahir_ayah">Tempat Lahir Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tgllahir_ayah"
                        type="date"
                        name="tgl_lahir_ayah"
                        class="form-control"
                      />
                      <label for="form_tgllahir_ayah">Tanggal Lahir Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_keadaan_ayah"
                        type="text"
                        name="keadaan_ayah"
                        class="form-control"
                      />
                      <label for="form_keadaan_ayah">keadaan Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_filektp_ayah"
                        type="file"
                        name="file_ktp_ayah"
                        class="form-control"
                      />
                      <label for="form_filektp_ayah">File KTP Ayah </label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="status_ayah">
                        <option selected disabled value="">
                          Status Ayah
                        </option>
                        <option value="1">Ayah Kandung</option>
                        <option value="2">Ayah Angkat</option>
                        
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="pendidikan_ayah">
                        <option selected disabled value="">
                          Pendidikan Ayah
                        </option>
                        <option value="1">S3</option>
                        <option value="1">S2</option>
                        <option value="1">S1</option>
                        <option value="1">SMA</option>
                        <option value="2">SMK </option>
                        <option value="2">SMP </option>
                        <option value="2">SD </option>
                        
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="pekerjaan_ayah_id">
                        <option selected disabled value="">
                          Pekerjaan
                        </option>
                        <option value="1">Petani</option>
                        <option value="1">Pegawai Swasata</option>
                        <option value="1">Pegawai Negeri</option>

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
                        id="form_penghasilan_ayah"
                        type="number"
                        name="penghasilan_ayah"
                        class="form-control"
                      />
                      <label for="form_penghasilan_ayah">Penghasilan Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-4">
                      <textarea id="form_alamat_ayah" name="alamat_ayah" class="form-control" placeholder="Your message" style="height: 80px" ></textarea>
                      <label for="form_alamat_ayah">Alamat Orang Tua*</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your messsage. </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nama_ibu"
                        type="text"
                        name="nama_ibu"
                        class="form-control"
                        
                        
                      />
                      <label for="form_nama_ibu">Nama ibu *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nik_ibu"
                        type="number"
                        name="nik_ibu"
                        class="form-control"
                        placeholder="14222222222"
                        
                      />
                      <label for="form_nik_ibu">NIK ibu *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tmplahir_ibu"
                        type="text"
                        name="tmp_lahir_ibu"
                        class="form-control"
                      />
                      <label for="form_tmplahir_ibu">Tempat Lahir ibu *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tgllahir_ibu"
                        type="date"
                        name="tgl_lahir_ibu"
                        class="form-control"
                      />
                      <label for="form_tgllahir_ibu">Tanggal Lahir ibu *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_keadaan_ibu"
                        type="text"
                        name="keadaan_ibu"
                        class="form-control"
                      />
                      <label for="form_keadaan_ibu">keadaan ibu *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_filektp_ibu"
                        type="file"
                        name="file_ktp_ibu"
                        class="form-control"
                      />
                      <label for="form_filektp_ibu">File KTP ibu</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="status_ibu">
                        <option selected disabled value="">
                          Status ibu
                        </option>
                        <option value="1">ibu Kandung</option>
                        <option value="2">ibu Angkat</option>
                        
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="pendidikan_ibu">
                        <option selected disabled value="">
                          Pendidikan ibu
                        </option>
                        <option value="1">S3</option>
                        <option value="1">S2</option>
                        <option value="1">S1</option>
                        <option value="1">SMA</option>
                        <option value="2">SMK </option>
                        <option value="2">SMP </option>
                        <option value="2">SD </option>
                        
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="pekerjaan_ibu">
                        <option selected disabled value="">
                          Pekerjaan
                        </option>
                        <option value="1">Petani</option>
                        <option value="1">Pegawai Swasata</option>
                        <option value="1">Pegawai Negeri</option>

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
                        id="form_penghasilan_ibu"
                        type="number"
                        name="penghasilan_ibu"
                        class="form-control"
                      />
                      <label for="form_penghasilan_ibu">Penghasilan ibu *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nama_wali"
                        type="text"
                        name="nama_wali"
                        class="form-control"
                        placeholder="Jane"
                        
                      />
                      <label for="form_nama_wali">Nama Wali *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nik_wali"
                        type="number"
                        name="nik_wali"
                        class="form-control"
                        placeholder="14222222222"
                        
                      />
                      <label for="form_nik_wali">NIK Wali *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_telpon_wali"
                        type="number"
                        name="telpon_wali"
                        class="form-control"
                        placeholder="14222222222"
                        
                      />
                      <label for="form_telpon_wali">Telpon Wali *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="col-12">
                    <div class="form-floating mb-4">
                      <textarea id="form_alamat_wali" name="alamat_wali" class="form-control" placeholder="Your message" style="height: 80px" ></textarea>
                      <label for="form_alamat_ayah">Alamat Wali*</label>
                      <div class="valid-feedback"> Looks good! </div>
                      <div class="invalid-feedback"> Please enter your messsage. </div>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <input type="submit" class="btn btn-success rounded-pill btn-send mb-3 px-10 mt-5" value="Next">
                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                  </div>
                </div>
                
              </form>
              <!-- /form -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
       
<?= $this->endSection() ?>