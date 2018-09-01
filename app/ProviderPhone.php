<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 1/9/2018
 * Time: 01:23
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderPhone extends Model
{
    protected $fillable = ["number"];

    protected $dates = [];

    public static $rules = [
        "number" => "required",
    ];

    public $timestamps = false;

    // Relationships
    public function product()
    {
        return $this->hasMany('App\Provider');
    }
}
