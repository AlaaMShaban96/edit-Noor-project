<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailType extends Model
{

    public $table = "emails_types";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'icon',
    ];

    public function email()
    {
        return $this->hasMany(Email::class);
    }
}
