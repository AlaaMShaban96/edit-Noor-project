<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{

    public $table = "phone_numbers";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footer_id', 'phone', 
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
