<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', function () use ($router) {
    return view('principal');
});

$router->get('/partials/{resource}/{action}', function () use ($router) {
    return view('partials/resource/action');
});

/**
 * Routes for resource product
 */

$router->get('product', 'ProductsController@all');
$router->get('product/{id}', 'ProductsController@get');
$router->post('product', 'ProductsController@add');
$router->put('product/{id}', 'ProductsController@put');
$router->delete('product/{id}', 'ProductsController@remove');
