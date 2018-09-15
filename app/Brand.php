<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ["id", "name"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
    ];

    public $timestamps = false;

    // Relationships
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
