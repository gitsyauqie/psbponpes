<?= $this->extend('home/layouts/home_layout') ?>


<?= $this->section('content') ?>
      <!-- /section -->
      <section class="wrapper bg-light">
      <div class="container py-14 pt-md-17">
        
        <!-- /div -->
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Why Choose Sandbox?</h2>
            <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">Here are a few reasons why our customers choose Sandbox.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
          <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
              <div><img src="<?= base_url('frontend/assets/img/icons/rocket.svg')?>" class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt="" /></div>
              <div>
                <h4 class="mb-1">Easy Usage</h4>
                <p>Duis mollis commodo luctus cursus commodo tortor mauris.</p>
              </div>
            </a> </li>
          <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
              <div><img src="<?= base_url('frontend/assets/img/icons/savings.svg')?>" class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" /></div>
              <div>
                <h4 class="mb-1">Fast Transactions</h4>
                <p>Vivamus sagittis lacus augue fusce dapibus tellus nibh.</p>
              </div>
            </a> </li>
          <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3">
              <div><img src="<?= base_url('frontend/assets/img/icons/shield.svg')?>" class="svg-inject icon-svg icon-svg-md text-red me-4" alt="" /></div>
              <div>
                <h4 class="mb-1">Secure Payments</h4>
                <p>Vestibulum ligula porta felis maecenas faucibus mollis.</p>
              </div>
            </a> </li>
        </ul>
        <!-- /.nav-tabs -->
       
      <!-- /.container -->
    </section>
   
   
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-19">
          <div class="col-md-8 col-lg-6 position-relative light-gallery-wrapper">
            <a href="https://vimeo.com/374265101" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 lightbox position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"><i class="icn-caret-right"></i></a>
            <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
            <figure class="rounded"><img src="<?= base_url('frontend/assets/img/photos/about8.jpg')?>" srcset="<?= base_url('frontend/assets/img/photos/about8@2x.jpg')?>" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5 col-xl-4 offset-lg-1">
            <h2 class="fs-15 text-uppercase text-muted mb-3">How It Works?</h2>
            <h3 class="display-4 mb-7">Here are the 3 working steps on success.</h3>
            <div class="d-flex flex-row mb-5">
              <div>
                <img src="<?= base_url('frontend/assets/img/icons/shield.svg')?>" class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Secured Transactions</h4>
                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus. Praesent commodo cursus.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-5">
              <div>
                <img src="<?= base_url('frontend/assets/img/icons/savings.svg')?>" class="svg-inject icon-svg icon-svg-md text-green me-5" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Bills Planning</h4>
                <p class="mb-0">Vivamus sagittis lacus vel augue laoreet. Etiam porta sem malesuada magna.</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <img src="<?= base_url('frontend/assets/img/icons/loading.svg')?>" class="svg-inject icon-svg icon-svg-md text-red me-5" alt="" />
              </div>
              <div>
                <h4 class="mb-1">Always up to date</h4>
                <p class="mb-0">Cras mattis consectetur purus sit amet. Aenean lacinia bibendum nulla sed.</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
       
      </div>
      <!-- /.container -->
    </section>
    
<?= $this->endSection() ?>