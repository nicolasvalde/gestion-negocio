<?php namespace App\Dto;


class ProductDto
{
    public function prueba()
    {

        $pila = array();

        $products = \App\Product::all();

        foreach ($products as $product) {
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

        return response()->json([
            $pila
        ]);
    }
}
