<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

    protected $fillable = ["razon_social", "direccion", "telefono", "mail"];

    protected $dates = [];

    public static $rules = [
        "razon_social" => "required",
        "direccion" => "nullable",
        "telefono" => "nullable",
        "mail" => "nullable",
    ];

    public $timestamps = false;

    // Relationships

}
