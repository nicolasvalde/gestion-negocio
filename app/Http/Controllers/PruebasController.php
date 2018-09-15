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
    public function all()
    {
        $pila = array();

        $products = \App\Product::all();

        //$categories = \App\Category::all();

        foreach ($products as $product) {
            //echo $product;
            //echo $product->category;
            //$pila += ["id" => $product->id, "category" => $product->category->name];
            $pila[] = [
                "id" => $product->id,
                "brand_id" => $product->brand->name,
                "category_id" => $product->category->name,
                "provider_id" => $product->provider->razon_social,
                "measure_quantity" => $product->measure_quantity,
                "measure_scale" => $product->measure_scale,
                "precio_actual" => $product->precio_actual,
                "margen_ganancia" => $product->margen_ganancia,
                "stock_blanco" => $product->stock_blanco,
                "stock_negro" => $product->stock_negro
            ];
        }

        //$product = \App\Product::find(7);

        return response()->json([
            $pila
        ]);
    }

    public function get($id)
    {
        $m = self::MODEL;
        $model = $m::find($id);
        if (is_null($model)) {
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }

    public function prueba()
    {

        $pila = array();

        $products = \App\Product::all();

        //$categories = \App\Category::all();

        foreach ($products as $product) {
            //echo $product;
            //echo $product->category;
            //$pila += ["id" => $product->id, "category" => $product->category->name];
            $pila[] = [
                "id" => $product->id,
                "brand_id" => $product->brand->name,
                "category" => $product->category->name,
                "provider" => $product->provider->razon_social,
                "measure_quantity" => $product->measure_quantity,
                "measure_scale" => $product->measure_scale,
                "precio_actual" => $product->precio_actual,
                "margen_ganancia" => $product->margen_ganancia,
                "stock_blanco" => $product->stock_blanco,
                "stock_negro" => $product->stock_negro
            ];
        }

        //$product = \App\Product::find(7);

        return response()->json([
            //"marca" => $product->brand->name,
            //"rubro" => $product->category->name,
            //$products
            $pila
        ]);

    }
}
