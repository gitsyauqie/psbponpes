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
                action="/pendaftaran/simpan-data-prestasi"
                enctype="multipart/form-data"
                
              >

              <?= csrf_field()?>
                <div style="text-align: center">
                  <span class="step" >1</span>
                  <span class="step" >2</span>
                  <span class="step" >3</span>
                  <span class="step" id="step-4">4</span>
                </div>

                <div class="row gx-4">
                 <h3 class="lead mb-2">Data Prestasi</h3>
                  <div class="col-md-6">
                    
                    <div class="form-floating mb-4">
                      <input
                        id="form_prestasi"
                        type="number"
                        name="prestasi"
                        class="form-control <?= ($validation->hasError('prestasi') ? 'is-invalid' : '') ?>"
                        
                      />
                      <label for="form_prestasi">Prestasi *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="tingkat">
                        <option selected disabled value="">
                          Tingkat
                        </option>
                        <option value="1">Nasional</option>
                        <option value="2">Kabupaten</option>
                        <option value="3">Kecamatan</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please select a department.
                      </div>
                    </div>
                  </div>
                   <!-- /column -->
                   <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="form_juara"
                        type="text"
                        name="juara"
                        class="form-control <?= ($validation->hasError('juara') ? 'is-invalid' : '') ?>"
                        
                      />
                      <label for="form_juara">juara *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                      <?= $validation->getError('juara') ;?>
                      </div>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-4">
                      <input
                        id="file_prestasi"
                        type="file"
                        name="file_prestasi"
                        class="form-control <?= ($validation->hasError('file_prestasi') ? 'is-invalid' : '') ?>"
                        
                      />
                      <label for="file_prestasi">File Prestasi *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        <?= $validation->getError('file_prestasi') ;?>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <input type="submit" class="btn btn-success rounded-pill btn-send mb-3 px-10 mt-5" value="Submit">
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