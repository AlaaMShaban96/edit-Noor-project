<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

    public $table = "languages";

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name',
    ];
    
    public function categoryTranslation()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function subCategoryTranslation()
    {
        return $this->hasMany(SubCategoryTranslation::class);
    }

    public function itemTranslation()
    {
        return $this->hasMany(ItemTranslation::class);
    }

    public function slideTranslation()
    {
        return $this->hasMany(SlideTranslation::class);
    }

    public function ourPartnersTranslation()
    {
        return $this->hasMany(OurPartnersTranslation::class);
    }

    public function ourAddressTranslation()
    {
        return $this->hasMany(OurAddressTranslation::class);
    }

    public function postTranslation()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function JobTranslation()
    {
        return $this->hasMany(JobTranslation::class);
    }
}
