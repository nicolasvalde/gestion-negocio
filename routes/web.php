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

$router->get('/api/v1', function () use ($router) {
    //return view('principal');
    return $router->app->version();
});

/**
 * Routes for resource product
 */

$router->get('api/v1/products', 'ProductsController@all');
$router->get('api/v1/products/{id}', 'ProductsController@get');
$router->post('api/v1/products', 'ProductsController@add');
$router->put('api/v1/products/{id}', 'ProductsController@put');
$router->delete('api/v1/products/{id}', 'ProductsController@remove');
