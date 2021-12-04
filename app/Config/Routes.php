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
$routes->get('/', 'Laptop::index');

$routes->group('lp', function ($routes) {
    // $routes->get('news', 'NewsAdmin::index');
    // $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    // $routes->add('news/new', 'NewsAdmin::create');
    // $routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
    // $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
    $routes->add('laptop', 'Laptop::index');
    $routes->add('new', 'Laptop::create');
    $routes->get('delete/(:segment)', 'Laptop::delete/$1');
    $routes->add('edit/(:segment)', 'Laptop::edit/$1');
    $routes->get('preview/(:segment)', 'Laptop::preview/$1');
});

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
