<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    public $table = "cities";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en','name_ar',
    ];

    public function recruitmentForm()
    {
        return $this->hasMany(RecruitmentForm::class);
    }
}
