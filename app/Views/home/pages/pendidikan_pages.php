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
                 id="myForm"
                class="contact-form needs-validation"
                method="POST"
                action="/simpan"
                autocomplete = "off"
                
              >

              <?= csrf_field()?>
                <div style="text-align: center">
                  <span class="step" >1</span>
                  <span class="step" >2</span>
                  <span class="step" id="step-3">3</span>
                  <span class="step">4</span>
                </div>

                <div class="messages"></div>
                
                <div class="row gx-4">
                  <h3 class="lead mb-2">Data Pendidikan</h3>
                  <div class="col-md-6">
                  
                    <div class="form-floating mb-4">
                      <input
                        id="form_nisn"
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Jane"
                       
                      />
                      <label for="form_nisn">NISN *</label>
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
                        id="form_sekolah_asal"
                        type="text"
                        name="sekolah_asal"
                        class="form-control"
                        placeholder="Yogyakarta"
                      />
                      <label for="form_sekolah_asal">Sekolah Asal *</label>
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
                        id="form_jenis_sekolah"
                        type="text"
                        name="jenis_sekolah"
                        class="form-control"
                        
                      />
                      <label for="form_jenis_sekolah">Jenis Sekolah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_npsn"
                        type="text"
                        name="npsn"
                        class="form-control"
                        
                      />
                      <label for="form_npsn">NPSN *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nss"
                        type="number"
                        name="nss"
                        class="form-control"
                        placeholder="231212"
                        
                      />
                      <label for="form_nss">NSS *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_alamatsekolah"
                        type="text"
                        name="alamat_sekolah"
                        class="form-control"
                        placeholder="Yogyakarta"
                        
                      />
                      <label for="form_alamatsekolah">Alamat Sekolah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tahun_masuk"
                        type="date"
                        name="tahun_masuk"
                        class="form-control"
                        
                      />
                      <label for="form_tahun_masuk">Tahun Masuk *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tahun_keluar"
                        type="date"
                        name="tahun_keluar"
                        class="form-control"
                        
                      />
                      <label for="form_tahun_keluar">Tahun Keluar *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_file_nisn"
                        type="file"
                        name="file_nisn"
                        class="form-control"
                        
                      />
                      <label for="form_file_nisn" >File NISN *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_file_npsn"
                        type="file"
                        name="file_npsn"
                        class="form-control"
                        
                      />
                      <label for="form_file_npsn" >File NPSN *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_file_ijasah"
                        type="file"
                        name="file_ijasah"
                        class="form-control"
                        
                      />
                      <label for="form_file_ijasah" >File ijasah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_file_skhun"
                        type="file"
                        name="file_skhun"
                        class="form-control"
                        
                      />
                      <label for="form_file_skhun" >File skhun *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_rapot7"
                        type="file"
                        name="rapot7"
                        class="form-control"
                        
                      />
                      <label for="form_rapot7" >File Rapot7 *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_rapot8"
                        type="file"
                        name="rapot8"
                        class="form-control"
                        
                      />
                      <label for="form_rapot8" >File Rapot8 *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
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