 <!-- BEGIN: SideNav-->
 <aside
      class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square"
    >
      <div class="brand-sidebar">
        <h1 class="logo-wrapper">
          <a class="brand-logo darken-1" href="/santri"
            ><img
              class="hide-on-med-and-down"
              src="<?= base_url('/logoppspa'); ?>.png" style=" height:30px;"
              alt="materialize logo"
            /><img
              class="show-on-medium-and-down hide-on-med-and-up" style="height:30px;"
              src="<?= base_url('/logoppspa'); ?>.png"
              alt="materialize logo"
            /><span class="logo-text hide-on-med-and-down">PPSPA</span></a
          ><a class="navbar-toggler" href="#"
            ><i class="material-icons">radio_button_checked</i></a
          >
        </h1>
      </div>
      <ul
        class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow"
        id="slide-out"
        data-menu="menu-navigation"
        data-collapsible="menu-accordion"
      >
       
        
        
        
        <li class="navigation-header">
          <a class="navigation-header-text">Beranda </a
          ><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
          <a class="waves-effect waves-cyan <?php echo ($menu_active == 'profil-saya' ? 'active gradient-shadow teal' : ''); ?>" href="<?= url_to('dashboard-santri')?>"
            ><i class="material-icons">person_outline</i
            ><span class="menu-title" data-i18n="Profil Saya"
              >Profil Saya</span
            ></a
          >
        </li>
        <li class="bold">
          <a class="waves-effect waves-cyan <?php echo ($menu_active == 'data-santri' ? 'active gradient-shadow teal' : ''); ?>" href="<?= url_to('data-santri')?>"
            ><i class="material-icons">person_outline</i
            ><span class="menu-title" data-i18n="Data Saya"
              >Data Saya</span
            ></a
          >
        </li>
        <li class="bold">
          <a class="waves-effect waves-cyan <?php echo ($menu_active == 'setting' ? 'active gradient-shadow teal' : ''); ?>" href="<?= url_to('pengaturan-akun')?>"
            ><i class="material-icons">person_outline</i
            ><span class="menu-title" data-i18n="Pengaturan"
              >Pengaturan</span
            ></a
          >
        </li>
        
      </ul>
      <div class="navigation-background"></div>
      <a
        class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
        href="#"
        data-target="slide-out"
        ><i class="material-icons">menu</i></a
      >
    </aside>
    <!-- END: SideNav-->