<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ["nombre", "descripcion", "precio_actual", "margen_ganancia", "stock", "id_category"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "descripcion" => "nullable",
        "precio_actual" => "nullable",
        "margen_ganancia" => "nullable",
        "stock" => "nullable",
        "id_category" => "nullable",
    ];

    public $timestamps = false;

    // Relationships
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
