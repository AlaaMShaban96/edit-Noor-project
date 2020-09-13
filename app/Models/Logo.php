<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    public $table = "logos";

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'image', 
   ];
}
