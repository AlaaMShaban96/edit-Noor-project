<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurPartnersTranslation extends Model
{

    public $table = "our_partners_translations";

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'our_partners_id', 'language_code', 'name','description',
    ];

    public function ourPartners()
    {
        return $this->belongsTo(OurPartners::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
