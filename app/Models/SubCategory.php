<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $table = "sub_categories";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'admin_id', 'image',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategoryTranslation()
    {
        return $this->hasMany(SubCategoryTranslation::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
