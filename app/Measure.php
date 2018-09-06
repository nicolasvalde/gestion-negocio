<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 6/9/2018
 * Time: 15:33
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $fillable = ["quantity", "scale"];

    protected $dates = [];

    public static $rules = [
        "quantity" => "required",
        "scale" => "required",
    ];

    public $timestamps = false;

    // Relationships
}
