<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      name="description"
      content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google."
    />
    <meta
      name="keywords"
      content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard"
    />
    <meta name="author" content="ThemeSelect" />
    <title>Dashboard Santri</title>
    <link rel="apple-touch-icon" href="<?= base_url('/logoppspa'); ?>.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/logoppspa'); ?>.png">
   
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- BEGIN: VENDOR CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/vendors/vendors.min.css"
    />
   
    <link rel="stylesheet" href="<?= base_url('admin')?>/app-assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('admin')?>/app-assets/vendors/select2/select2-materialize.css" type="text/css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/css/themes/vertical-modern-menu-template/materialize.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/css/themes/vertical-modern-menu-template/style.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/css/pages/page-users.css"
    />
    <link rel="stylesheet" type="text/css" href="<?= base_url('admin')?>/app-assets/css/pages/page-account-settings.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/css/custom/custom.css"
    />
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
    data-open="click"
    data-menu="vertical-modern-menu"
    data-col="2-columns"
  >
    

  
 <?= $this->include('santri/includes/header') ?>
    

    <?= $this->include('santri/includes/sidenav') ?>

    <?= $this->renderSection('content') ?>
    <!-- Theme Customizer -->

    

    <footer
      class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow"
    >
      <div class="footer-copyright">
        <div class="container">
          <span
            >&copy; 2020
            <a
              href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
              target="_blank"
              >PIXINVENT</a
            >
            All rights reserved.</span
          ><span class="right hide-on-small-only"
            >Design and Developed by
            <a href="https://pixinvent.com/">PIXINVENT</a></span
          >
        </div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?= base_url('admin')?>/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?= base_url('admin')?>/app-assets/vendors/select2/select2.full.min.js"></script>
    <script src="<?= base_url('admin')?>/app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?= base_url('admin')?>/app-assets/js/plugins.js"></script>
    <script src="<?= base_url('admin')?>/app-assets/js/search.js"></script>
    <script src="<?= base_url('admin')?>/app-assets/js/custom/custom-script.js"></script>
    <script src="<?= base_url('admin')?>/app-assets/js/scripts/customizer.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?= base_url('admin')?>/app-assets/js/scripts/page-users.js"></script>

    <script src="<?= base_url('admin')?>/app-assets/js/scripts/page-account-settings.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
