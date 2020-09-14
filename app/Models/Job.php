<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    public $table = "jobs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id','our_address_id', 'gender',
    ];

    public function ourAddress()
    {
        return $this->belongsTo(OurAddress::class);
    }
  
    public function JobTranslation()
    {
        return $this->hasMany(JobTranslation::class);
    }

    public function recruitmentForm()
    {
        return $this->hasMany(RecruitmentForm::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
