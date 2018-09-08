<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 7/9/2018
 * Time: 21:57
 */

namespace App\Http\Controllers;


class PruebasController extends Controller
{
    public function prueba()
    {

        $pila = array();

        $products = \App\Product::all();

        $brands = \App\Brand::all();

        /*   foreach ($products->brand as $product) {

               array_push($pila, $product->brand);
           }
   */
        return response()->json([
            $products
        ]);

    }
}
