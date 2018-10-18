<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderNoteDetail extends Model
{
    protected $fillable = ["order_note_id", "quantity", "price", "product_code", "type"];

    protected $dates = [];

    public static $rules = [
        "order_note_id" => "nullable",
        "quantity" => "nullable",
        "price" => "nullable",
        "product_code" => "nullable",
        "type" => "nullable"
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
