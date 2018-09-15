<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    protected $fillable = ["razon_social", "direccion", "telefono", "mail", "cuit"];

    protected $dates = [];

    public static $rules = [
        "razon_social" => "required",
        "direccion" => "nullable",
        "telefono" => "nullable",
        "mail" => "nullable",
        "cuit" => "nullable",
    ];

    public $timestamps = false;

    // Relationships
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
