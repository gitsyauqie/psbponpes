<?= $this->extend('home/layouts/form_layout') ?>


<?= $this->section('content') ?>

        <div class="container py-5 py-md-12">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
              <h2 class="display-4 mb-3 text-center">Formulir Pendaftaran</h2>
              <p class="lead text-center mb-10">
                Silahkan di isi sesuai data yang anda miliki.
              </p>
              <form
                
                class="contact-form needs-validation"
                method="post"
                action="/simpan"
                novalidate
                
              >
                <div style="text-align: center">
                  <span class="step" id="step-1">1</span>
                  <span class="step" id="step-2">2</span>
                  <span class="step" id="step-3">3</span>
                  <span class="step" id="step-4">4</span>
                </div>

                <div class="messages"></div>
                <div class="row gx-4" id="tab-1">
                  <h3 class="lead mb-2">Data Diri</h3>
                  <div class="col-md-12">
                  
                    <div class="form-floating mb-4">
                      <input
                        id="form_name"
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Jane"
                       
                      />
                      <label for="form_name">Nama Lengkap *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tmp_lahir"
                        type="text"
                        name="tmp_lahir"
                        class="form-control"
                        placeholder="Yogyakarta"
                      />
                      <label for="form_tmp_lahir">Tempat Lahir *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tgl_lahir"
                        type="date"
                        name="tgl_lahir"
                        class="form-control"
                        
                      />
                      <label for="form_tgl_lahir">Tanggal Lahir *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_email"
                        type="email"
                        name="email"
                        class="form-control"
                        
                      />
                      <label for="form_email">Email *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_wa"
                        type="number"
                        name="no_wa"
                        class="form-control"
                        placeholder="+6282269079575"
                        
                      />
                      <label for="form_wa">No. Whatsapp *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" >
                        <option selected disabled value="">
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

                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_golongandarah"
                        type="text"
                        name="golongan_darah"
                        class="form-control"
                        placeholder="A"
                        
                      />
                      <label for="form_golongandarah">Golongan Darah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_tgl_daftar"
                        type="date"
                        name="tgl_daftar"
                        class="form-control"
                        
                      />
                      <label for="form_tgl_daftar">Tanggal Daftar *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-select-wrapper mb-4">
                      <select class="form-select" id="form-select" name="ref_jenjang_id">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_foto"
                        type="file"
                        name="foto"
                        class="form-control"
                        accept="image/*"
                        
                      />
                      <label for="form_foto">Foto </label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill me-1 mt-5"
                      onclick="run(1, 2);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-2">
                  <h3 class="lead mb-2">Data Orang Tua/Wali</h3>
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_nama_ayah"
                        type="text"
                        name="nama_ayah"
                        class="form-control"
                        placeholder="Jane"
                        
                      />
                      <label for="form_nama_ayah">Nama Ayah *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(2, 1);"
                    >
                      Previous
                    </div>
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(2, 3);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-3">
                  <h3 class="lead mb-2">Data Pendidikan</h3>
                  <div class="col-md-12">
                  
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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

                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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
                  <div class="col-md-12">
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

                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(3, 2);"
                    >
                      Previous
                    </div>
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(3, 4);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-4">
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_prestasi"
                        type="text"
                        name="prestasi"
                        class="form-control"
                        
                      />
                      <label for="form_prestasi">Prestasi *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your first name.
                      </div>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-md-12">
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
                   <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="form_juara"
                        type="number"
                        name="juara"
                        class="form-control"
                        
                      />
                      <label for="form_juara">juara *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please enter your last name.
                      </div>
                    </div>
                  </div>

                  <!-- /column -->
                  <div class="col-md-12">
                    <div class="form-floating mb-4">
                      <input
                        id="file_prestasi"
                        type="file"
                        name="file_prestasi"
                        class="form-control"
                        
                      />
                      <label for="file_prestasi">File Prestasi *</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please provide a valid email address.
                      </div>
                    </div>
                  </div>
                  <div class="index-btn-wrapper">
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(4, 3);"
                    >
                      Previous
                    </div>
                    <div
                      class="btn btn-green rounded-pill mb-2 me-1 mt-5"
                      onclick="run(4, 5);"
                    >
                      Next
                    </div>
                  </div>
                </div>
                <div class="row gx-4" id="tab-5">
                <div class="tab" id="tab-5">
                    <div class="index-btn-wrapper justify-content-center">
                      <div
                        class="btn btn-green rounded-pill mb-3 me-5 "
                        onclick="run(5, 4);"
                      >
                        Previous
                      </div>
                      <button
                        class="btn btn-primary rounded-pill btn-send mb-3"
                        type="submit"
                        name="submit"
                      >
                        Submit
                      </button>
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