<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Layout::index', ['filter' => 'role:admin,super-admin']);
$routes->get('/manageuser', 'ManageUser::index', ['filter' => 'role:super-admin']);
$routes->get('/manageuser/index', 'ManageUser::index', ['filter' => 'role:super-admin']);

$routes->get('product', 'Product::index');
$routes->get('product/detail/(:num)', 'Product::detail/$1');
$routes->get('product/checkout/(:num)', 'Product::checkout/$1');
$routes->post('product/save/(:num)/(:num)', 'Product::save/$1/$2');
$routes->get('/account', 'Account::index');
$routes->get('backend', 'Backend\Layout::index');




// routes.php

$routes->get('price list', 'PriceList::index');
$routes->post('price list', 'PriceList::generatePdf');



/**
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
