<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/pendaftaran/step-1', 'FormSantriController::santri');
$routes->get('/pendaftaran/step-2', 'FormWaliController::wali');
$routes->get('/pendaftaran/step-3', 'FormPendidikanController::pendidikan');
$routes->get('/pendaftaran/step-4', 'FormPrestasiController::prestasi');

$routes->post('/pendaftaran/simpan-data-santri', 'FormSantriController::simpanSantri');
$routes->post('/pendaftaran/simpan-data-wali', 'FormWaliController::simpanWali');
$routes->post('/pendaftaran/simpan-data-pedidikan', 'FormPedidikanController::simpanPendidikan');
$routes->post('/pendaftaran/simpan-data-prestasi', 'FormPrestasiController::simpanPrestasi');



// ['filter' => 'role:admin,superadmin']
    $routes->get('/dashboard', 'Admin\DashboardController::index',['as' => 'halaman-dashboard','filter'=> 'role:admin']);
    $routes->get('/dashboard', 'Admin\DashboardController::index',['as' => 'halaman-dashboard','filter'=> 'role:admin']);
    $routes->get('/dashboard/daftarkan-santri', 'Admin\SantriController::daftarkanSantri',['as' => 'daftarkan-santri']);

    // halaman admin
    $routes->get('/dashboard/setting-tahunajaran', 'Admin\SettingController::index',['as' => 'setting-tahunajaran']);
    $routes->get('dashboard/validasi-mts', 'Admin\SantriController::validasi/MTs',['as' =>'validasi-mts']);
    $routes->get('/dashboard/validasi-ma', 'Admin\SantriController::validasi/MA',['as' => 'validasi-ma']);
    $routes->get('/dashboard/tahap-tes-mts', 'Admin\SantriController::tahaptes/MTs',['as' => 'tahap-tes-mts']);
    $routes->get('/dashboard/tahap-tes-ma', 'Admin\SantriController::tahaptes/MA',['as' => 'tahap-tes-ma']);
    $routes->get('/admin/pembayaran-mts', 'Admin\SantriController::pembayaran/MTs',['as' => 'pembayaran-mts']);
    $routes->get('/dashboard/pembayaran-ma', 'Admin\SantriController::pembayaran/MA',['as' => 'pembayaran-ma']);
    $routes->get('/dashboard/kamar-mts', 'Admin\SantriController::kamar/MTs',['as' => 'kamar-mts']);
    $routes->get('/dashboard/kamar-ma', 'Admin\SantriController::kamar/MA',['as' => 'kamar-ma']);




    // Halaman Santri

    $routes->get('/santri','Santri\DashboardController::index',['as' => 'dashboard-santri','filter'=> 'role:santri']);
    $routes->get('/santri/data-santri','Santri\DataSantriController::index',['as' => 'data-santri','filter'=> 'role:santri']);
    $routes->get('/santri/pengaturan-akun','Santri\SettingController::index',['as' => 'pengaturan-akun','filter'=> 'role:santri']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
