<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::view');
$routes->get('/users/register', 'Pages::showRegister');
$routes->post('/users/register_user', 'Users::handleRegister');
$routes->get('/users/success', 'Pages::success');
$routes->get('/users/login', 'Pages::showLogin');
$routes->post('/users/login_user', 'Users::handleLogin');

$routes->get('/users/loggedInUser', 'Users::loggedInUser');
$routes->get('/users/profile', 'Users::profile');
$routes->get('/users/logout', 'Users::logout');
$routes->get('/users/show', 'Users::showUsers');

// ADMIN RELATED

// $routes->get('/admin/', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/admin/orders', 'AdminController::showOrders');

$routes->get('/admin/products', 'AdminController::viewProducts');
$routes->get('/admin/add_products', 'AdminController::addProducts');

// USER RELATED
$routes->get('/products', 'Products::index');
$routes->get('/wishlist', 'Pages::showWishlist');
$routes->get('/cart', 'Pages::showCart');
$routes->get('/checkout', 'Pages::showCheckout');
$routes->get('/profile', 'Pages::showProfile');

// SAMPLE
// $routes->get('/sample', 'Products::index');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
