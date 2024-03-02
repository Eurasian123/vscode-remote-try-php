<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\News;
use App\Controllers\Wrath;
use App\Controllers\Pages;

$routes->get('greed', [News::class, 'index']);
$routes->get('greed/new', [News::class, 'new']);
$routes->post('greed', [News::class, 'create']);
$routes->get('greed/(:segment)', [News::class, 'show']);

$routes->get('wrath', [Wrath::class, 'index']);
$routes->post('wrath', [Wrath::class, 'create']);
$routes->get('wrath/list', [Wrath::class, 'list']);

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
