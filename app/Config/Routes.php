<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//membuat route function komentar pada controller web
$routes->get('/komentar', 'Web::komentar');

//membuat route untuk function nama lengkap dengan uri parameter 
$routes->get('/nama/(:any)/(:num)', 'Web::nama/$1/$2');

//route untuk biodata 
$routes->get('/biodata', 'Web::biodata');

//route umtuk hitung dan proses
$routes->get('/hitung', 'Web::hitung');
$routes->post('/hitung/proses', 'Web::proses');

//route umtuk hitung luas segitiga
$routes->get('/luas', 'Web::luas');
$routes->post('/luas/segitiga', 'Web::luas');

//route untuk employe
$routes->get('/employe', 'Employe::index');
$routes->post('/employe', 'Employe::save');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}