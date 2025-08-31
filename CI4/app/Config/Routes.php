<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::hello');
$routes->setAutoRoute(true);
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->get('test', 'Test::index');
$routes->get('test/testing', 'Test::testing');

// Test Hello World dulu
$routes->get('hello', 'Hello::index');
$routes->get('testdb', 'TestDB::index');
// CRUD Biodata
$routes->get('biodata', 'Biodata::index');
$routes->get('biodata/create', 'Biodata::create');
$routes->post('biodata/store', 'Biodata::store');
$routes->get('biodata/detail/(:segment)', 'Biodata::detail/$1');
$routes->get('biodata/edit/(:segment)', 'Biodata::edit/$1');
$routes->post('biodata/update/(:segment)', 'Biodata::update/$1');
$routes->get('biodata/delete/(:segment)', 'Biodata::delete/$1');
$routes->get('biodata/search', 'Biodata::search');