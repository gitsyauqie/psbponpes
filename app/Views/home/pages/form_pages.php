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
                   <section>
                       <div class="inner">
                         <h3>Data Diri</h3>
                         <div class="form-row">
                   <div class="form-holder form-holder-2">
                     <label class="form-row-inner">
                       <input type="text" name="email" id="email" class="form-control" required>
                       <span class="label">Email Address</span>
                         <span class="border"></span>
                     </label>
                   </div>
                 </div>
                 <div class="form-row">
                   <div class="form-holder form-holder-2">
                     <label class="form-row-inner">
                       <input type="text" class="form-control" id="username" name="username" required>
                       <span class="label">Username</span>
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
                   <div class="form-holder form-holder-2">
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
                   <section>
                       <div class="inner">
                         <h3>Personal Information:</h3>
                         <div class="form-row">
                   <div class="form-holder">
                     <label class="form-row-inner">
                       <input type="text" class="form-control" id="first_name" name="first_name" required>
                       <span class="label">First Name*</span>
                         <span class="border"></span>
                     </label>
                   </div>
                   <div class="form-holder">
                     <label class="form-row-inner">
                       <input type="text" class="form-control" id="last_name" name="last_name" required>
                       <span class="label">Last Name*</span>
                         <span class="border"></span>
                     </label>
                   </div>
                 </div>
                 <div class="form-row">
                   <div id="radio">
                     <label>Gender*:</label>
                     <input type="radio" name="gender" value="male" checked class="radio-1"> Male
                       <input type="radio" name="gender" value="female"> Female
                   </div>
                 </div>
                 <div class="form-row form-row-date">
                   <div class="form-holder form-holder-2">
                     <label for="date" class="special-label">Date of Birth*:</label>
                     <select name="date" id="date">
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
                   <div class="form-holder form-holder-2">
                     <label class="form-row-inner">
                       <input type="text" class="form-control" id="phone" name="phone" required>
                       <span class="label">Phone Number*</span>
                         <span class="border"></span>
                     </label>
                   </div>
                 </div>
                 <div class="form-row">
                   <div class="form-holder form-holder-1">
                     <label class="form-row-inner">
                       <input type="text" class="form-control" id="address" name="address" required>
                       <span class="label">Address*</span>
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
                   <section>
                     <div class="inner">
                       <h3>Data Diri</h3>
                       <div class="form-row">
                 <div class="form-holder form-holder-2">
                   <label class="form-row-inner">
                     <input type="text" name="email" id="email" class="form-control" required>
                     <span class="label">Email Address</span>
                       <span class="border"></span>
                   </label>
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-holder form-holder-2">
                   <label class="form-row-inner">
                     <input type="text" class="form-control" id="username" name="username" required>
                     <span class="label">Username</span>
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
                 <div class="form-holder form-holder-2">
                   <label class="form-row-inner">
                     <input type="password" name="comfirm_password_1" id="comfirm_password_1" class="form-control" required>
                     <span class="label">Comfirm Password</span>
                     <span class="border"></span>
                   </label>
                 </div>
               </div>
             </div>
                 </section>
                   <!-- SECTION 4 -->
                   <h2>
                     <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                     <span class="step-text">Data Prestasi</span>
                   </h2>
                   <section>
                     <div class="inner">
                       <h3>Data Diri</h3>
                       <div class="form-row">
                 <div class="form-holder form-holder-2">
                   <label class="form-row-inner">
                     <input type="text" name="email" id="email" class="form-control" required>
                     <span class="label">Email Address</span>
                       <span class="border"></span>
                   </label>
                 </div>
               </div>
               <div class="form-row">
                 <div class="form-holder form-holder-2">
                   <label class="form-row-inner">
                     <input type="text" class="form-control" id="username" name="username" required>
                     <span class="label">Username</span>
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
                 <div class="form-holder form-holder-2">
                   <label class="form-row-inner">
                     <input type="password" name="comfirm_password_1" id="comfirm_password_1" class="form-control" required>
                     <span class="label">Comfirm Password</span>
                     <span class="border"></span>
                   </label>
                 </div>
               </div>
             </div>
                 </section>
               </div>
             </form>
       </div>
      </div>
     
   </section>
      
    
<?= $this->endSection() ?>