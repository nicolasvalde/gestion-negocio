<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = ["nombre", "descripcion", "precio_actual", "margen_ganancia", "stock"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "descripcion" => "nullable",
        "precio_actual" => "nullable",
        "margen_ganancia" => "nullable",
    ];

    public $timestamps = false;

    // Relationships

}
