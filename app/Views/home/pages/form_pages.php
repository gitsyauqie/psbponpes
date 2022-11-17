<?= $this->extend('home/layouts/form_layout') ?>


<?= $this->section('content') ?>
<section class="page-content">
      
      <div class="div-content">
       <div class="wizard-form">
         <div class="wizard-header">
           <h3 class="heading">Isi Formulir</h3>
           <p>Silahkan Isi Formulir dibawah ini</p>
         </div>

        
       <form class="form-register" action="#" method="post">
             
               <div id="form-total">
                 <!-- SECTION 1 -->
                    <h2>
                     <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                     <span class="step-text">Data Diri</span>
                    </h2>
                    <section id="data-diri">
                      <div class="inner">
                        <h3>Data Diri</h3>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              NIK
                            </label>
                            <input disabled value="1919191919191919">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="nama" id="nama" class="form-control" required>
                              <span class="label" id="nama-error">Nama Lengkap</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="tmp_lahir_ibu" name="tmp_lahir_ibu" required>
                              <span class="label" id="tmp-lahir-ibu-error">Tempat Lahir</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-row form-row-date">
                          <div class="form-holder form-holder-2">
                            <label for="tgl_lahir_ibu" class="special-label" id="tgl-lahir-ibu-error">Tanggal Lahir</label>
                            <select name="tgl_lahir_ibu" id="tgl_lahir_ibu">
                              <option value="Day" disabled selected>Day</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                            </select>
                            <select name="month" id="month">
                              <option value="Month" disabled selected>Month</option>
                              <option value="Feb">Feb</option>
                              <option value="Mar">Mar</option>
                              <option value="Apr">Apr</option>
                              <option value="May">May</option>
                            </select>
                            <select name="year" id="year">
                              <option value="Year" disabled selected>Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
                          <div id="radio">
                            <label>Gender</label>
                            <input type="radio" name="gender" value="Laki-Laki" checked class="radio-1"> Laki-Laki
                              <input type="radio" name="gender" value="Perempuan"> Perempuan
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="text" name="gol_darah" id="status_ibu" class="form-control" required>
                              <span class="label" id="status_ibu_error">Golongan Darah</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="number" class="form-control" id="no_wa" name="no_wa" required>
                              <span class="label" id="no_wa_error">No Whatsapp</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder ">
                            <label class="form-row-inner">
                              <input type="email" name="email" id="email" class="form-control" required>
                              <span class="label" id="email_error">Alamat Email</span>
                                <span class="border"></span>
                            </label>
                          </div>
                       
                          <div class="form-holder ">
                            <label class="form-row-inner">
                              <input type="text" name="tgl_daftar" id="tgl_daftar" class="form-control" required>
                              <span class="label" id="tgl_daftar_error">Tanggal Daftar</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label for="">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="ref_jenjang_id" id="ref_jenjang_id">
                              <option value="" disabled selected>Pilih Jenjang</option>
                              <option value="16">SMP</option>
                              <option value="17">Mts</option>
                              
                            </select>
                              <span class="label" id="ref_jenjang_error">Jenjang</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="ref_jenispendaftaran_id" id="ref_jenispendaftaran_id">
                              <option value="" disabled selected>Pilih Jenis Pendaftaran</option>
                              <option value="16">SMP</option>
                              <option value="17">Mts</option>
                              
                            </select>
                              <span class="label" id="ref_jenispendaftaran_error">Jenis Pendaftaran</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
              
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="password" name="password_1" id="password_1" class="form-control" required>
                              <span class="label">Password</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-1">
                            <label class="form-row-inner">
                              <input type="password" name="comfirm_password_1" id="comfirm_password_1" class="form-control" required>
                              <span class="label">Comfirm Password</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </section>
             <!-- SECTION 2 -->
                   <h2>
                     <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                     <span class="step-text">Data Wali</span>
                   </h2>
                   <section id="data-wali">
                      <div class="inner">
                        <h3>Data Wali</h3>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" required>
                              <span class="label" id="nama-ayah-error">Nama Ayah</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                              <span class="label" id="tmp-lahir-error">NIK Ayah</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-row form-row-date">
                          <div class="form-holder form-holder-2">
                            <label for="tgl_lahir" class="special-label" id="tgl_lahir_error">Tanggal Lahir Ayah</label>
                            <select name="tgl_lahir" id="tgl_lahir_ayah">
                              <option value="Day" disabled selected>Day</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                            </select>
                            <select name="month" id="month">
                              <option value="Month" disabled selected>Month</option>
                              <option value="Feb">Feb</option>
                              <option value="Mar">Mar</option>
                              <option value="Apr">Apr</option>
                              <option value="May">May</option>
                            </select>
                            <select name="year" id="year">
                              <option value="Year" disabled selected>Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                            </select>
                          </div>
                        </div>
                       
                        <div class="form-row">
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="text" name="status_ayah" id="status_ayah" class="form-control" required>
                              <span class="label" id="status-ayah-error">Status Ayah</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="number" class="form-control" id="telpon_ayah" name="telpon_ayah" required>
                              <span class="label" id="telpon-ayah-error">No.Tlp Ayah</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder ">
                            <label class="form-row-inner">
                              <input type="text" name="keadaan_ayah" id="keadaan_ayah" class="form-control" required>
                              <span class="label" id="keadaan-ayah-error">Keadaan Ayah</span>
                                <span class="border"></span>
                            </label>
                          </div>
                       
                          <div class="form-holder">
                            <label for="" id="">KTP Ayah</label>
                            <input type="file" name="file_ktp_ayah" id="file_ktp_ayah" class="form-control" required>
                          </div>
                        </div>
                       
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="pendidikan_ayah" id="pendidikan_ayah">
                              <option value="" disabled selected>Pendidikan Ayah</option>
                              <option value="16">SMP</option>
                              <option value="17">Mts</option>
                              
                            </select>
                              <span class="label" id="pendidikan-ayah-error">Pendidikan Ayah</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="pekerjaan_ayah_id" id="pekerjaan_ayah_id">
                              <option value="" disabled selected>Pekerjaan Ayah</option>
                              <option value="16">SMP</option>
                              <option value="17">Mts</option>
                              
                            </select>
                              <span class="label" id="pekerjaanayah-error">Pekerjaan Ayah</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="penghasilan" name="penghasilan" required>
                              <span class="label" id="penghasilan-ayah-error">Penghasilan</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" required>
                              <span class="label" id="alamat-ayah-error">Alamat Ayah</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required>
                              <span class="label" id="nama-ibu-error">Nama ibu</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                              <span class="label" id="tmp-lahir-error">NIK ibu</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-row form-row-date">
                          <div class="form-holder form-holder-2">
                            <label for="tgl_lahir" class="special-label" id="tgl_lahir_error">Tanggal Lahir ibu</label>
                            <select name="tgl_lahir" id="tgl_lahir_ibu">
                              <option value="Day" disabled selected>Day</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                            </select>
                            <select name="month" id="month">
                              <option value="Month" disabled selected>Month</option>
                              <option value="Feb">Feb</option>
                              <option value="Mar">Mar</option>
                              <option value="Apr">Apr</option>
                              <option value="May">May</option>
                            </select>
                            <select name="year" id="year">
                              <option value="Year" disabled selected>Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                            </select>
                          </div>
                        </div>
                       
                        <div class="form-row">
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="text" name="status_ibu" id="status_ibu" class="form-control" required>
                              <span class="label" id="status-ibu-error">Status ibu</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="number" class="form-control" id="telpon_ibu" name="telpon_ibu" required>
                              <span class="label" id="telpon-ibu-error">No.Tlp ibu</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder ">
                            <label class="form-row-inner">
                              <input type="text" name="keadaan_ibu" id="keadaan_ibu" class="form-control" required>
                              <span class="label" id="keadaan-ibu-error">Keadaan ibu</span>
                                <span class="border"></span>
                            </label>
                          </div>
                       
                          <div class="form-holder">
                            <label for="" id="">KTP ibu</label>
                            <input type="file" name="file_ktp_ibu" id="file_ktp_ibu" class="form-control" required>
                          </div>
                        </div>
                       
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="pendidikan_ibu" id="pendidikan_ibu">
                              <option value="" disabled selected>Pendidikan ibu</option>
                              <option value="16">SMP</option>
                              <option value="17">Mts</option>
                              
                            </select>
                              <span class="label" id="pendidikan-ibu-error">Pendidikan ibu</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="pekerjaan_ibu_id" id="pekerjaan_ibu_id">
                              <option value="" disabled selected>Pekerjaan ibu</option>
                              <option value="16">SMP</option>
                              <option value="17">Mts</option>
                              
                            </select>
                              <span class="label" id="pekerjaanibu-error">Pekerjaan ibu</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="penghasilan" name="penghasilan" required>
                              <span class="label" id="penghasilan-ibu-error">Penghasilan</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="nama_wali" id="nama_wali" class="form-control" required>
                              <span class="label" id="nama-wali-error">Nama wali</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
                              <span class="label" id="tmp-lahir-error">NIK wali</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
    
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="number" class="form-control" id="telpon_wali" name="telpon_wali" required>
                              <span class="label" id="telpon-wali-error">No.Tlp wali</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
 
                        <div class="form-row">
                          <div class="form-holder form-holder-1">
                            <label class="form-row-inner">
                              <input type="text" class="form-control" id="alamat_wali" name="alamat_wali" required>
                              <span class="label" id="alamat-wali-error">Alamat wali</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </section>
                   <!-- SECTION 3 -->
                   <h2>
                     <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                     <span class="step-text">Data Pendidikan</span>
                   </h2>
                    <section id="data-pendidikan">
                      <div class="inner">
                        <h3>Data Pendidikan</h3>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="nisn" id="nisn" class="form-control" required>
                              <span class="label" id="keadaan-ayah-error">NISN</span>
                                <span class="border"></span>
                            </label>
                          </div>
                       
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control" required>
                              <span class="label" id="sekolah-asal-error">Sekolah asal</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                        <div class="form-holder form-holder-2">
                            <label for="" id="">File NISN</label>
                            <input type="file" name="file_nisn" id="file_nisn" class="form-control" >
                          </div>
                        </div>
                        
                        <div class="form-row form-row-date">
                          <div class="form-holder form-holder-2">
                            <label for="tgl_lahir" class="special-label" id="tgl_lahir_error">Tanggal Masuk</label>
                            <select name="tgl_lahir" id="tgl_lahir_ayah">
                              <option value="Day" disabled selected>Day</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                            </select>
                            <select name="month" id="month">
                              <option value="Month" disabled selected>Month</option>
                              <option value="Feb">Feb</option>
                              <option value="Mar">Mar</option>
                              <option value="Apr">Apr</option>
                              <option value="May">May</option>
                            </select>
                            <select name="year" id="year">
                              <option value="Year" disabled selected>Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-row form-row-date">
                          <div class="form-holder form-holder-2">
                            <label for="tgl_lahir" class="special-label" id="tgl_lahir_error">Tanggal Keluar</label>
                            <select name="tgl_lahir" id="tgl_lahir_ayah">
                              <option value="Day" disabled selected>Day</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                            </select>
                            <select name="month" id="month">
                              <option value="Month" disabled selected>Month</option>
                              <option value="Feb">Feb</option>
                              <option value="Mar">Mar</option>
                              <option value="Apr">Apr</option>
                              <option value="May">May</option>
                            </select>
                            <select name="year" id="year">
                              <option value="Year" disabled selected>Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                            </select>
                          </div>
                        </div>
                       
                        <div class="form-row">
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="text" name="jenis_sekolah" id="jenis_sekolah" class="form-control" required>
                              <span class="label" id="jenis-sekolah-error">Jenis Sekolah</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        
                          <div class="form-holder">
                            <label class="form-row-inner">
                              <input type="number" class="form-control" id="npsn" name="npsn" required>
                              <span class="label" id="npsn-error">NPSN</span>
                                <span class="border"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="nss" id="nss" class="form-control" required>
                              <span class="label" id="nss-error">NSS</span>
                                <span class="border"></span>
                            </label>
                          </div>
              
                        </div>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                              <input type="text" name="alamat_sekolah" id="alamat_sekolah" class="form-control" required>
                              <span class="label" id="alamatsekolah-error">Alamat Sekolah</span>
                                <span class="border"></span>
                            </label>
                          </div>
              
                        </div>
                       <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="" id="">File Ijazah</label>
                          <input type="file" name="file_npsn" id="file_npsn" class="form-control" required>
                        </div>
                       </div>
                       <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="" id="">File Ijazah</label>
                          <input type="file" name="file_ijazah" id="file_ijazah" class="form-control" required>
                        </div>
                       </div>
                       <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="" id="">File SKHUN</label>
                          <input type="file" name="file_skhun" id="file_skhun" class="form-control" required>
                        </div>
                       </div>
                       <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label for="" id="">Rapot 7</label>
                          <input type="file" name="rapot7" id="rapot7" class="form-control" required>
                        </div>
                       </div>
                       <div class="form-row">
                        <div class="form-holder form-holder-1">
                          <label for="" id="">Rapot 8</label>
                          <input type="file" name="rapot8" id="rapot8" class="form-control" required>
                        </div>
                       </div>
                       
                        
                        
                      </div>
                    </section>
                   <!-- SECTION 4 -->
                   <h2>
                     <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                     <span class="step-text">Data Prestasi</span>
                   </h2>
                   <section id="data-prestasi">
                     <div class="inner">
                       <h3>Data Prestasi</h3>
                       <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label class="form-row-inner">
                            <input type="text" name="prestasi" id="prestasi" class="form-control" required>
                            <span class="label">Prestasi</span>
                              <span class="border"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <label class="form-row-inner">
                            <select name="tingkat" id="tingkat">
                              <option value="" disabled selected>Tingkat</option>
                              <option value="16">Propinsi</option>
                              <option value="17">Kabupaten</option>
                              
                            </select>
                              <span class="label" id="tingkat-error">Tingkat</span>
                              <span class="border"></span>
                            </label>
                          </div>
                        </div>
                      <div class="form-row">
                        <div class="form-holder form-holder-2">
                          <label class="form-row-inner">
                            <input type="number" name="juara" id="juara" class="form-control" required>
                            <span class="label">Juara</span>
                            <span class="border"></span>
                          </label>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-holder form-holder-1">
                            <label for="">Dokumen Prestasi</label>
                            <input type="file" name="file_prestasi" id="file_prestasi" class="form-control" required>
                          </div>
                        </div>
                    </div>
                 </section>
               </div>
               </form>
       </div>
      </div>
     
   </section>


   <script type="text/javascript">
			 
            function validate() {
                var output = true;
                $(".signup-error").html('');

                if ($("#data-diri").css('display') != 'none') {
                    if (!($("#name").val())) {
                        output = false;
                        $("#name-error").html("Name required!");
                    }

                    if (!($("#dob").val())) {
                        output = false;
                        $("#dob-error").html("Date of Birth required!");
                    }
                }

                if ($("#password-field").css('display') != 'none') {
                    if (!($("#user-password").val())) {
                        output = false;
                        $("#password-error").html("Password required!");
                    }

                    if (!($("#confirm-password").val())) {
                        output = false;
                        $("#confirm-password-error").html("Confirm password required!");
                    }

                    if ($("#user-password").val() != $("#confirm-password").val()) {
                        output = false;
                        $("#confirm-password-error").html("Password not matched!");
                    }
                }

                if ($("#contact-field").css('display') != 'none') {
                    if (!($("#phone").val())) {
                        output = false;
                        $("#phone-error").html("Phone required!");
                    }

                    if (!($("#email").val())) {
                        output = false;
                        $("#email-error").html("Email required!");
                    }

                    if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                        $("#email-error").html("Invalid Email!");
                        output = false;
                    }

                    if (!($("#address").val())) {
                        output = false;
                        $("#address-error").html("Address required!");
                    }
                }

                return output;
            }

            $(document).ready(function () {
                $("#next").click(function () {
                    var output = validate();
                    if (output === true) {
                        var current = $(".active");
                        var next = $(".active").next("li");
                        if (next.length > 0) {
                            $("#" + current.attr("id") + "-field").hide();
                            $("#" + next.attr("id") + "-field").show();
                            $("#back").show();
                            $("#finish").hide();
                            $(".active").removeClass("active");
                            next.addClass("active");
                            if ($(".active").attr("id") == $("li").last().attr("id")) {
                                $("#next").hide();
                                $("#finish").show();
                            }
                        }
                    }
                });


                $("#back").click(function () {
                    var current = $(".active");
                    var prev = $(".active").prev("li");
                    if (prev.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + prev.attr("id") + "-field").show();
                        $("#next").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        prev.addClass("active");
                        if ($(".active").attr("id") == $("li").first().attr("id")) {
                            $("#back").hide();
                        }
                    }
                });

                $("input#finish").click(function (e) {
                    var output = validate();
                    var current = $(".active");

                    if (output === true) {
                        return true;
                    } else {
                        //prevent refresh
                        e.preventDefault();
                        $("#" + current.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").show();
                    }
                });
            });
        
		</script>
<?= $this->endSection() ?>