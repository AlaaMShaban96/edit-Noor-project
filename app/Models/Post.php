<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public $table = "posts";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'type', 'image','file','created_at',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function postTranslation()
    {
        return $this->hasMany(PostTranslation::class);
    }
}
