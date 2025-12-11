<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/allProduct', 'Home::allProduct');
$routes->get('/login', 'Auth::login');
$routes->post('/loginPost', 'Auth::loginPost');
$routes->get('/register', 'Auth::register');
$routes->post('/registerPost', 'Auth::registerPost');
$routes->get('/logout', 'Auth::logout');
$routes->get('/profile', 'Auth::profile');
$routes->setAutoRoute(true);
