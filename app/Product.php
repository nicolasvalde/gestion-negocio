<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ["brand_id", "measure_quantity", "measure_scale", "precio_actual", "margen_ganancia", "stock_blanco", "stock_negro", "category_id", "provider_id"];

    protected $dates = [];

    public static $rules = [
        "brand_id" => "required",
        "measure_quantity" => "nullable",
        "measure_scale" => "nullable",
        "precio_actual" => "nullable",
        "margen_ganancia" => "nullable",
        "stock_blanco" => "nullable",
        "stock_negro" => "nullable",
        "category_id" => "nullable",
        "provider_id" => "nullable",
    ];

    public $timestamps = false;

    // Relationships
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }

    public function orderNote_detail()
    {
        return $this->hasMany('App\OrderNote_Detail');
    }
}
