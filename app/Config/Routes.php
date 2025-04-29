<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');
$routes->post('login', 'AuthController::doLogin');
$routes->get('logout', 'AuthController::logout');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('admin', 'DashboardController::admin');
$routes->get('user', 'DashboardController::user');
$routes->get('/admin/transaksi', 'TransaksiController::index');
$routes->get('/admin/input-barang', 'TransaksiController::inputBarang');
$routes->get('/admin/edit-barang', 'TransaksiController::editBarang');
$routes->get('/user/transaksi', 'UserController::transaksi');