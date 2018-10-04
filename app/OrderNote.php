<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderNote extends Model
{
    protected $fillable = ["provider_id", "date", "total"];

    protected $dates = [];

    public static $rules = [
        "provider_id" => "required",
        "date" => "nullable",
        "total" => "required"
    ];

    public $timestamps = false;

    // Relationships

    public function orderNote_deatail()
    {
        return $this->hasMany('App\OrderNote_Detail');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
