<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderNote_Detail extends Model
{
    protected $fillable = ["OrderNote_id", "quantity", "price", "product_id", "type"];

    protected $dates = [];

    public static $rules = [
        "OrderNote_id" => "required",
        "quantity" => "required",
        "price" => "required",
        "product_id" => "required",
        "type" => "required"
    ];

    public $timestamps = false;

    // Relationships

    public function orderNote()
    {
        return $this->belongsTo('App\OrderNote');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
