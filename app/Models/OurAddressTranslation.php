<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurAddressTranslation extends Model
{

    public $table = "our_address_translations";

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ouraddress_id', 'language_code', 'name',
    ];

    public function ourAddress()
    {
        return $this->belongsTo(OurAddress::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
