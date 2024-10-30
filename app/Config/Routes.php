<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//bagian get
$routes->get('/home/dashboard', 'Home::dashboard');
$routes->get('/home/masyarakat', 'Home::masyarakat');
$routes->get('/home/petugas', 'Home::petugas');
$routes->get('/home/login', 'Home::login');
$routes->get('/home/register', 'Home::register');
$routes->get('/home/lelang', 'Home::lelang');
$routes->get('/home/barang', 'Home::barang');
$routes->get('/home/edit_barang', 'Home::edit_barang');
$routes->get('/home/history', 'Home::history');
$routes->get('/home/fpw', 'Home::fpw');
$routes->get('/home/logout', 'Home::logout');
$routes->get('/home/level', 'Home::level');
$routes->get('/home/laporan', 'Home::laporan');
$routes->get('/home/userall', 'Home::userall');
$routes->get('/home/signup', 'Home::signup');
$routes->get('/home/print', 'Home::print');
$routes->get('/home/print2', 'Home::print2');
$routes->get('/home/pdf', 'Home::pdf');
$routes->get('/home/bid', 'Home::bid');
$routes->get('/home/exportToExcel', 'Home::exportToExcel');


$routes->get('/home/tambah_barang', 'Home::tambah_barang');
$routes->get('/home/tambah_lelang', 'Home::tambah_lelang');
$routes->get('/home/tambah_petugas', 'Home::tambah_petugas');
$routes->get('/home/tambah_masyarakat', 'Home::tambah_masyarakat');
$routes->get('/home/tambah_history', 'Home::tambah_history');
$routes->get('/home/tambah_data', 'Home::tambah_data');
$routes->get('/home/bid', 'Home::bid');
$routes->get('/home/exportToExcel', 'Home::exportToExcel');


$routes->add('/home/aksi_t_barang', 'Home::aksi_t_barang');
$routes->add('/home/aksi_t_lelang', 'Home::aksi_t_lelang');
$routes->add('/home/aksi_t_petugas', 'Home::aksi_t_petugas');
$routes->add('/home/aksi_t_masyarakat', 'Home::aksi_t_masyarakat');
$routes->add('/home/aksi_t_history', 'Home::aksi_t_history');
$routes->add('/home/aksi_t_data', 'Home::aksi_t_data');
$routes->add('/home/aksi_signup', 'Home::aksi_signup');
$routes->add('/home/aksi_bbarang', 'Home::aksi_bbarang');
$routes->add('/home/bid', 'Home::bid');
$routes->add('/home/exportToExcel', 'Home::exportToExcel');


$routes->add('/home/hapus_barang/(:num)', 'Home::hapus_barang/$1');
$routes->add('/home/hapus_lelang/(:num)', 'Home::hapus_lelang/$1');
$routes->add('/home/hapus_petugas/(:num)', 'Home::hapus_petugas/$1');
$routes->add('/home/hapus_masyarakat/(:num)', 'Home::hapus_masyarakat/$1');
$routes->add('/home/hapus_level/(:num)', 'Home::hapus_level/$1');
$routes->add('/home/hapus_history/(:num)', 'Home::hapus_history/$1');
$routes->add('/home/hapus_data/(:num)', 'Home::hapus_data/$1');


$routes->add('/home/edit_barang/(:num)', 'Home::edit_barang/$1');
$routes->add('/home/edit_lelang/(:num)', 'Home::edit_lelang/$1');
$routes->add('/home/edit_petugas/(:num)', 'Home::edit_petugas/$1');
$routes->add('/home/edit_masyarakat/(:num)', 'Home::edit_masyarakat/$1');
$routes->add('/home/edit_history/(:num)', 'Home::edit_history/$1');
$routes->add('/home/edit_data/(:num)', 'Home::edit_data/$1');
$routes->add('/home/exportToExcel/(:num)', 'Home::exportToExcel/$1');


$routes->add('/home/aksi_edit_barang', 'Home::aksi_edit_barang');
$routes->add('/home/aksi_edit_lelang', 'Home::aksi_edit_lelang');
$routes->add('/home/aksi_edit_petugas', 'Home::aksi_edit_petugas');
$routes->add('/home/aksi_edit_masyarakat', 'Home::aksi_edit_masyarakat');
$routes->add('/home/aksi_edit_history', 'Home::aksi_edit_history');
$routes->add('/home/aksi_edit_data', 'Home::aksi_edit_data');


$routes->add('/home/aksi_login', 'Home::aksi_login');
$routes->add('/home/aksi_reset', 'Home::aksi_reset');
$routes->add('/home/aksi_reset/(:num)', 'Home::aksi_reset/$1');

$routes->get('pdf/generate', 'PdfController::generatePdf');

$routes->get('/home/menu1', 'Home::menu1');