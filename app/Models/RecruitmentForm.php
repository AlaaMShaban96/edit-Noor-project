<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecruitmentForm extends Model
{

    public $table = "recruitment_forms";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_id', 'city_id', 'fname','lname','email','phone','address','cvfile',
    ];
 
    public function Job()
     {
         return $this->belongsTo(Job::class);
     }

     public function city()
     {
         return $this->belongsTo(City::class);
     }
}
