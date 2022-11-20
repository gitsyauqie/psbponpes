<header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="/">
           
              <img src="<?= base_url('/logoppspa'); ?>.png" alt="" style="width: 80; height:60px;"/>
            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href=""><img src="<?= base_url('/logoppspa'); ?>.png"  alt="" style="width: 80; height:80px;" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Informasi</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Download Browsur</a></li>
              

            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              
              <!-- <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-01">Sign In</a>
              </li> -->
              <li class="nav-item d-none d-md-block">
                <a href="/pendaftaran/step-1" class="btn btn-sm btn-primary rounded-pill" >Daftar Sekarang</a>
              </li>
              <li class="nav-item d-lg-none">
                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
         
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="modal fade" id="modal-01" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h3 class="mb-4">Login to Sandbox</h3>
              <form class="text-start mb-3">
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                  <label for="loginPassword">Password</label>
                </div>
                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Log In</a>
              </form>
              <!-- /form -->
              <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
              <p class="mb-0">Don't have an account? <a href="#" class="hover">Sign up</a></p>
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
    </header>