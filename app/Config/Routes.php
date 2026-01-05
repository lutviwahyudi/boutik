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
$routes->get('/profile', 'Home::profile');
$routes->post('/postMessage', 'Home::postMessage');
$routes->get('/EditUser', 'EditUser::index');
$routes->get('/contact', 'Home::contact', ['filter' => 'auth']);
$routes->setAutoRoute(true);
