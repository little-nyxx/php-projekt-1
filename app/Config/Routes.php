<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pokus', 'Main::pokus');
$routes->get('koncerty', 'Main::koncerty');
$routes->get('pisnicky', 'Main::pisnicky');
$routes->get('alba', 'Main::alba');
$routes->get('hraci', 'Main::hraci');
$routes->get('karty', 'Main::karty');
$routes->get('hrac/(:num)', 'Main::hrac/$1');//num je number a vezme to vsecky routy s cislem id hrace