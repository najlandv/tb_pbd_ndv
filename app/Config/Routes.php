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
$routes->get('/', 'Pages::index');
$routes->get('/pages/detail', 'Pages::detail');
$routes->get('/pages/pelanggan', 'Pages::pelanggan');
$routes->get('/pages/penjual', 'Pages::penjual');
$routes->get('/pages/barang', 'Pages::barang');
$routes->get('/pages/notaPesanan', 'Pages::notaPesanan');
$routes->get('/pages/kategori', 'Pages::kategori');
$routes->post('/pages/saveKategori', 'Pages::saveKategori');
$routes->get('/pages/aboutUs', 'Pages::aboutUs');
$routes->get('/pages/success', 'Pages::success');
$routes->get('/pages/pembayaran', 'Pages::pembayaran');
$routes->get('/pages/pengiriman', 'Pages::pengiriman');
$routes->get('/pages/listBarang', 'Pages::listBarang');
$routes->get('/pages/listKategori', 'Pages::listKategori');
$routes->get('/pages/editKategori/(:segment)', 'Pages::editKategori/$1');
$routes->post('/pages/updateKategori/(:segment)', 'Pages::updateKategori/$1');
$routes->get('/pages/hapusKategori/(:segment)', 'Pages::hapusKategori/$1');
$routes->get('/pages/editBarang/(:segment)', 'Pages::editBarang/$1');
$routes->post('/pages/updateBarang/(:segment)', 'Pages::updateBarang/$1');
$routes->get('/pages/hapusBarang/(:segment)', 'Pages::hapusBarang/$1');

$routes->get('/pages/kategoriSkincare', 'Pages::kategoriSkincare');

$routes->get('/pages/kategoriMakeup', 'Pages::kategoriMakeup');
// $routes->get('/pages/kategoriMakeup/(:segment)', 'Pages::kategoriMakeup/$1');
$routes->match(['get','post'],'/pages/saveBarang', 'Pages::saveBarang');
$routes->add('/pages/savePenjual', 'Pages::savePenjual');
$routes->add('/pages/savePesanan', 'Pages::savePesanan');
$routes->get('/pages/(:segment)', 'Pages::detail/$1');
$routes->get('/pages/notaPesanan/(:segment)', 'Pages::notaPesanan/$1');
$routes->get('/pages/delete/(:segment)', 'Pages::delete/$1');
$routes->get('/pages/editPembayaran/(:segment)', 'Pages::editPembayaran/$1');
$routes->get('/pages/editPengiriman/(:segment)', 'Pages::editPengiriman/$1');
$routes->get('/pages/editPelanggan/(:segment)', 'Pages::editPelanggan/$1');
$routes->get('/pages/editPembayaran', 'Pages::editPembayaran');
$routes->get('/pages/editPengiriman', 'Pages::editPengiriman');
$routes->get('/pages/editPelanggan', 'Pages::editPelanggan');
$routes->get('/pages/deletePengiriman/(:segment)', 'Pages::deletePengiriman/$1');
$routes->add('/pages/savePelanggan', 'Pages::savePelanggan');
$routes->add('/pages/savePembayaran', 'Pages::savePembayaran');
$routes->add('/pages/savePengiriman', 'Pages::savePengiriman');
$routes->post('/pages/saveEditPembayaran/(:segment)', 'Pages::saveEditPembayaran/$1');
$routes->post('/pages/saveEditPengiriman/(:segment)', 'Pages::saveEditPengiriman/$1');
$routes->post('/pages/saveEditPelanggan/(:segment)', 'Pages::saveEditPelanggan/$1');


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
