<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->post('login', 'Auth::auth');
$routes->get('logout', 'Auth::logout');
$routes->get('/dashboard', 'Admin::dashboard');