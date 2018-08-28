<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Producto.
 */
$factory->define(App\Producto::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Product.
 */
$factory->define(App\Product::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Client.
 */
$factory->define(App\Client::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Provider.
 */
$factory->define(App\Provider::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Category.
 */
$factory->define(App\Category::class, function ($faker) {
    return [
        // Fields here
    ];
});
