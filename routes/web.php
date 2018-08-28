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

$router->get('api/v1', function () use ($router) {
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

/**
 * Routes for resource client
 */
$router->get('api/v1/clients', 'ClientsController@all');
$router->get('api/v1/clients/{id}', 'ClientsController@get');
$router->post('api/v1/clients', 'ClientsController@add');
$router->put('api/v1/clients/{id}', 'ClientsController@put');
$router->delete('api/v1/clients/{id}', 'ClientsController@remove');

/**
 * Routes for resource provider
 */
$router->get('api/v1/providers', 'ProvidersController@all');
$router->get('api/v1/providers/{id}', 'ProvidersController@get');
$router->post('api/v1/providers', 'ProvidersController@add');
$router->put('api/v1/providers/{id}', 'ProvidersController@put');
$router->delete('api/v1/providers/{id}', 'ProvidersController@remove');

/**
 * Routes for resource api/v1/categories
 */
$router->get('api/v1/categories', 'CategoriesController@all');
$router->get('api/v1/categories/{id}', 'CategoriesController@get');
$router->post('api/v1/categories', 'CategoriesController@add');
$router->put('api/v1/categories/{id}', 'CategoriesController@put');
$router->delete('api/v1/categories/{id}', 'CategoriesController@remove');
