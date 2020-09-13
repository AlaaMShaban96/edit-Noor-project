<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoryTranslation extends Model
{
    public $table = "sub_category_translations";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sub_category_id', 'language_code', 'name',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
