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