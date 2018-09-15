<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ["brand_id", "measure_quantity", "measure_scale", "precio_actual", "margen_ganancia", "stock_blanco", "stock_negro", "id_category", "provider_id"];

    protected $dates = [];

    public static $rules = [
        "brand_id" => "required",
        "measure_quantity" => "nullable",
        "measure_scale" => "nullable",
        "precio_actual" => "nullable",
        "margen_ganancia" => "nullable",
        "stock_blanco" => "nullable",
        "stock_negro" => "nullable",
        "id_category" => "nullable",
        "provider_id" => "nullable",
    ];

    public $timestamps = false;

    // Relationships
    public function category()
    {
        return $this->belongsTo('App\Category');
        //return \App\Category::find(1)->name;
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
