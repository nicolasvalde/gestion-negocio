<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $fillable = ["nombre", "apellido", "telefono", "mail", "cuit"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "apellido" => "required",
        "telefono" => "nullable",
        "mail" => "nullable",
        "cuit" => "nullable"
    ];

    public $timestamps = false;

    // Relationships

}
