<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::homeView');
$routes->get('/contact-us', 'HomeController::contactUsView');

$routes->group('my', function ($routes) {
    $routes->get('profile', 'MyController::profileView');
    $routes->get('change-password', 'MyController::changePasswordView');
    $routes->get('orders', 'MyController::ordersView');
    $routes->get('coupon', 'MyController::couponView');
    $routes->get('check-in', 'MyController::checkInView');
    $routes->get('points', 'MyController::pointsView');
    $routes->get('affiliate', 'MyController::affiliateView');
});

service('auth')->routes($routes);
