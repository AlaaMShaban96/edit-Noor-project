<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurPartners extends Model
{

    public $table = "our_partners";

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
     ];

     public function ourPartnersTranslation()
     {
         return $this->hasMany(OurPartnersTranslation::class);
     }
}
