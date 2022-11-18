<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img class="hide-on-med-and-down" src="<?php echo base_url('/logoppspa'); ?>.png" alt="materialize logos" /><img class="show-on-medium-and-down hide-on-med-and-up" src="<?php echo base_url('/logoppspa'); ?>.png" alt="materialize logos" /><span class="logo-text hide-on-med-and-down">PSB PPSPA</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold"><a  href="#" class="<?php ($menu_active == '' ? 'active' : ''); ?> waves-effect waves-cyan">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>

        <li class="bold"><a  href="#" class="<?php ($menu_active == '' ? 'active' : ''); ?> waves-effect waves-cyan ">
                <i class="material-icons">dvr</i><span class="menu-title" data-i18n="Templates">Daftarkan santri</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">PENDAFTARAN</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                <i class="material-icons">content_paste</i>
                <span class="menu-title" data-i18n="Pages">Validasi data</span></a>
            <ul class="collapsible-body">
                <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i>
                        <span data-i18n="Contact">Mts</span></a></li>
                <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i>
                        <span data-i18n="Blog">MA</span></a></li>
            </ul>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Tahap tes</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Pembayaran</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">Kamar</span></a>
        </li>


        <li class="navigation-header"><a class="navigation-header-text">Lainnya </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="#"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">Pengeluaran</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Laporan</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Pendaftaran</span></a>
                    </li>
                    <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Kuota</span></a>
                    </li>
                    <li><a <?php ($menu_active == 'tahunajaran' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Pembayaran</span></a>
                    </li>
        </li>
    </ul>
    </div>
    </li>

    <li class="navigation-header"><a class="navigation-header-text">PANGKALAN DATA </a><i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Kelola</span></a>
        <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Calon santri baru</span></a>
                </li>
                <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Data kamar</span></a>
                </li>
                <li><a <?php ($menu_active == '' ? 'active' : ''); ?> href="#"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Tahun Ajaran</span></a>
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