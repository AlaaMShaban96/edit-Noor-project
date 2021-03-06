<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    public $table = "slides";

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];

    public function slideTranslation()
    {
        return $this->hasMany(SlideTranslation::class);
    }
}
