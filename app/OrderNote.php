<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderNote extends Model
{
    protected $fillable = ["provider_id", "date", "total"];

    protected $dates = [];

    public static $rules = [
        "provider_id" => "required",
        "date" => "required",
        "total" => "required"
    ];

    public $timestamps = false;

    // Relationships

    public function orderNoteDetail()
    {
        return $this->hasMany('App\OrderNoteDetail');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
