<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ["brand_id", "presentacion_id", "precio_actual", "margen_ganancia", "stock_blanco", "stock_negro", "id_category", "provider_id"];

    protected $dates = [];

    public static $rules = [
        "brand_id" => "required",
        "presentacion_id" => "nullable",
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
    }
}
