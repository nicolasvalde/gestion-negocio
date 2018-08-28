<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = ["name"];

    protected $dates = [];

    public static $rules = [
        "name" => "nullable",
    ];

    public $timestamps = false;

    // Relationships
    public function phone()
    {
        return $this->hasMany('App\Product');
    }
}
