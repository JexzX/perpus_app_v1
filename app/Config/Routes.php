<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Admin
$routes->get('Admin', 'Admin::index');

//Login
$routes->get('Login', 'Login::index');

//autoroute
$autoRoute = true;