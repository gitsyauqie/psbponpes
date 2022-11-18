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
$routes->get('/pendaftaran/step-1', 'FormController::santri');
$routes->get('/pendaftaran/step-2', 'FormController::wali');
$routes->get('/pendaftaran/step-3', 'FormController::pendidikan');
$routes->get('/pendaftaran/step-4', 'FormController::prestasi');

$routes->post('/pendaftaran/simpan-data-santri', 'FormController::simpanSantri');
$routes->post('/pendaftaran/simpan-data-wali', 'FormController::simpanWali');
$routes->post('/pendaftaran/simpan-data-pedidikan', 'FormController::simpanPendidikan');
$routes->post('/pendaftaran/simpan-data-prestasi', 'FormController::simpanPrestasi');



$routes->get('/dashboard', 'Admin\DashboardController::index');
$routes->get('/daftarkan-santri', 'Admin\SantriController::daftarkanSantri');

// halaman admin
$routes->get('/setting-tahunajaran', 'Admin\SettingController::index');
$routes->get('/validasi-mts', 'Admin\SantriController::validasi/MTs');
$routes->get('/validasi-ma', 'Admin\SantriController::validasi/MA');
$routes->get('/tahap-tes-mts', 'Admin\SantriController::tahaptes/MTs');
$routes->get('/tahap-tes-ma', 'Admin\SantriController::tahaptes/MA');
$routes->get('/pembayaran-mts', 'Admin\SantriController::pembayaran/MTs');
$routes->get('/pembayaran-ma', 'Admin\SantriController::pembayaran/MA');
$routes->get('/kamar-mts', 'Admin\SantriController::kamar/MTs');
$routes->get('/kamar-ma', 'Admin\SantriController::kamar/MA');

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
