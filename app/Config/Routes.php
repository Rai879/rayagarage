<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'Auth::login');
$routes->get('/', 'home::index');

$routes->get('/dashboard', 'Admin::dashboard');

