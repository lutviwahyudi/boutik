<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/allProduct', 'Home::allProduct');
$routes->get('/products', 'Home::products');
$routes->get('/login', 'Auth::login');
$routes->post('/loginPost', 'Auth::loginPost');
$routes->get('/register', 'Auth::register');
$routes->post('/registerPost', 'Auth::registerPost');
$routes->get('/logout', 'Auth::logout');
$routes->get('/profile', 'Home::profile');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/ulasan', 'Home::ulasan');
$routes->post('/postMessage', 'Home::postMessage');
$routes->get('/edit-user', 'EditUser::index');
$routes->post('/edit-user/(:num)', 'EditUser::editUser/$1');
$routes->get('/contact', 'Home::contact', ['filter' => 'auth']);
$routes->setAutoRoute(true);
