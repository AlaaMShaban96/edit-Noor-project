<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideTranslation extends Model
{

    public $table = "slide_translations";

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slide_id', 'language_code', 'name','description',
    ];

    public function slide()
    {
        return $this->belongsTo(Slide::class);
    }
    
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
