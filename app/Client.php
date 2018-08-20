<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $fillable = ["nombre", "apellido", "telefono", "mail"];

    protected $dates = [];

    public static $rules = [
        "nombre" => "required",
        "apellido" => "required",
        "telefono" => "nullable",
        "mail" => "nullable",
    ];

    public $timestamps = false;

    // Relationships

}
