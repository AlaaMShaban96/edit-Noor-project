<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = "suppliers";

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'image','name','website','facebook','twitter','linkedin',
      ];
 
}
