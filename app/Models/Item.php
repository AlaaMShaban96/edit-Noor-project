<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = "items";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sub_category_id', 'admin_id', 'image',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function itemTranslation()
    {
        return $this->hasMany(ItemTranslation::class);
    }
}
