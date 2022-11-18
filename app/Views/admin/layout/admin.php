<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Pondok Pesantren Sunan Pandanaran</title>

  <?= $this->include('admin/layout/style') ?>

</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  <?= $this->include('admin/layout/header') ?>
  <!-- END: Header-->
  <!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img class="hide-on-med-and-down" src="<?php echo base_url('/logoppspa'); ?>.png" alt="materialize logos" /><img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo base_url('/logoppspa'); ?>.png" alt="materialize logos" /><span class="logo-text hide-on-med-and-down">PSB PPSPA</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
      <li class="bold"><a class='<?php echo ($menu_active == '' ? 'active gradient-shadow teal' : ''); ?>' href="#" class=" waves-effect waves-cyan">
          <i class="material-icons">settings_input_svideo</i>
          <span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>

      <li class="bold"><a <?php echo ($menu_active == 'daftarkan_santri' ? 'active gradient-shadow teal' : ''); ?> href="<?php echo base_url('/daftarkan-santri'); ?>" class=" waves-effect waves-cyan ">
          <i class="material-icons">dvr</i><span class="menu-title" data-i18n="Templates">Daftarkan santri</span></a>
      </li>
      <li class="navigation-header"><a class="navigation-header-text">PENDAFTARAN</a>
        <i class="navigation-header-icon material-icons">more_horiz</i>
      </li>

      <li class="bold  <?php echo ($menu_dropdown_open == 'validasi' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">content_paste</i>
          <span class="menu-title" data-i18n="Pages">Validasi data</span></a>
        <ul class="collapsible-body">
          <li><a class='<?php echo ($menu_active == 'validasi_MTs' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('validasi-mts'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Mts</span></a></li>
          <li><a class='<?php echo ($menu_active == 'validasi_MA' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('validasi-ma'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Blog">MA</span></a></li>
        </ul>
      </li>

      <li class="bold  <?php echo ($menu_dropdown_open == 'tahaptes' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">check</i>
          <span class="menu-title" data-i18n="Pages">Tahap tes</span></a>
        <ul class="collapsible-body">
          <li><a class='<?php echo ($menu_active == 'tahaptes_MTs' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('tahap-tes-mts'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Mts</span></a></li>
          <li><a class='<?php echo ($menu_active == 'tahaptes_MA' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('tahap-tes-ma'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Blog">MA</span></a></li>
        </ul>
      </li>

      <li class="bold  <?php echo ($menu_dropdown_open == 'pembayaran' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">format_list_bulleted</i>
          <span class="menu-title" data-i18n="Pages">Pembayaran</span></a>
        <ul class="collapsible-body">
          <li><a class='<?php echo ($menu_active == 'pembayaran_MTs' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('pembayaran-mts'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Mts</span></a></li>
          <li><a class='<?php echo ($menu_active == 'pembayaran_MA' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('pembayaran-ma'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Blog">MA</span></a></li>
        </ul>
      </li>

      <li class="bold  <?php echo ($menu_dropdown_open == 'kamar' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">content_paste</i>
          <span class="menu-title" data-i18n="Pages">Kamar</span></a>
        <ul class="collapsible-body">
          <li><a class='<?php echo ($menu_active == 'kamar_MTs' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('kamar-mts'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Contact">Mts</span></a></li>
          <li><a class='<?php echo ($menu_active == 'kamar_MA' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('kamar-ma'); ?>"><i class="material-icons">radio_button_unchecked</i>
              <span data-i18n="Blog">MA</span></a></li>
        </ul>
      </li>



      <li class="navigation-header"><a class="navigation-header-text">Lainnya </a><i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">Pengeluaran</span></a>
      </li>
      <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Laporan</span></a>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li><a class='<?php echo ($menu_active == '' ? 'active gradient-shadow teal' : ''); ?>' href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Pendaftaran</span></a>
            </li>
            <li><a class='<?php echo ($menu_active == '' ? 'active gradient-shadow teal' : ''); ?>' href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Kuota</span></a>
            </li>
            <li><a class='<?php echo ($menu_active == 'tahunajaran' ? 'active gradient-shadow teal' : ''); ?>' href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Pembayaran</span></a>
            </li>
      </li>
    </ul>
    </div>
    </li>

    <li class="navigation-header"><a class="navigation-header-text">PANGKALAN DATA </a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold <?php echo ($menu_dropdown_open == 'kelola' ? 'open active' : ''); ?>"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Kelola</span></a>
      <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li><a class='<?php ($menu_active == '' ? 'active gradient-shadow teal' : ''); ?>' href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Calon santri baru</span></a>
          </li>
          <li><a class='<?php ($menu_active == '' ? 'active gradient-shadow teal' : ''); ?>' href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Data kamar</span></a>
          </li>
          <li><a class='<?php echo ($menu_active == 'tahunajaran' ? 'active gradient-shadow teal' : ''); ?>' href="<?php echo base_url('setting-tahunajaran'); ?>"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Tahun Ajaran</span></a>
          </li>
        </ul>
      </div>
    </li>
    <li class="navigation-header"><a class="navigation-header-text">AKUN </a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">Ubah sandi</span></a>
    </li>
    <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">Logout</span></a>
    </li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
  </aside>
  <!-- END: SideNav-->



  <!-- BEGIN: SideNav-->

  <!-- END: SideNav-->

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="breadcrumbs-dark pb-0 " id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
          <div class="row">
            <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title mt-0 mb-0"><span><?php echo $breadcrumbs_title; ?></span></h5>
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="#"><?php echo $breadcrumbs_item; ?></a>
                </li>
                <li class="breadcrumb-item"><a href="#"><?php echo $breadcrumbs_item2; ?></a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="section">
            <?php $this->renderSection('content') ?>
          </div>
        </div>
      </div><!-- START RIGHT SIDEBAR NAV -->

    </div>
    <div class="content-overlay"></div>
  </div>
  </div>
  </div>
  <!-- END: Page Main-->



  <!-- BEGIN: Footer-->
  <?= $this->include('admin/layout/footer') ?>

</body>

</html>