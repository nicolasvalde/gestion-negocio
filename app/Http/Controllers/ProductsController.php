<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{

    const MODEL = "App\Product";

    use RESTActions;

    public function all()
    {
        $m = self::MODEL;

        $data = array();

        foreach ($m::all() as $product) {
            $data[] = [
                "id" => $product->id,
                "brand_id" => $product->brand_id,
                "category_id" => $product->category_id,
                "provider_id" => $product->provider_id,
                "measure_quantity" => $product->measure_quantity,
                "measure_scale" => $product->measure_scale,
                "measure_combined" => $product->measure_quantity." ".$product->measure_scale,
                "precio_actual" => $product->precio_actual,
                "margen_ganancia" => $product->margen_ganancia,
                "stock_blanco" => $product->stock_blanco,
                "stock_negro" => $product->stock_negro,
                "brand" => $product->brand->name,
                "category" => $product->category->name,
                "provider" => $product->provider->razon_social,
            ];
        }

        // return $this->respond(Response::HTTP_OK, $m::all());
        return $this->respond(Response::HTTP_OK, $data);
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

    public function add(Request $request)
    {
        $m = self::MODEL;
        $this->validate($request, $m::$rules);
        return $this->respond(Response::HTTP_CREATED, $m::create($request->all()));
    }

}
