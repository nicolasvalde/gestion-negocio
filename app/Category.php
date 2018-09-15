<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ["name"];

    protected $dates = [];

    public static $rules = [
        "name" => "nullable",
    ];

    public $timestamps = false;

    // Relationships
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
