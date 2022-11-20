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
    <title>User Login | Pondok Pesantren Sunan Pandanaran</title>
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
      href="<?= base_url('admin')?>/app-assets/css/pages/login.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/css/pages/register.css"
    />
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?= base_url('admin')?>/app-assets/css/custom/custom.css"
    />
    <!-- END: Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    

    <?= $this->renderSection('content')?>
   <!-- BEGIN VENDOR JS-->
   <script src="<?= base_url('admin')?>/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?= base_url('admin')?>/app-assets/js/plugins.js"></script>
    <script src="<?= base_url('admin')?>/app-assets/js/search.js"></script>
    <script src="<?= base_url('admin')?>/app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>