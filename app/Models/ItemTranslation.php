<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTranslation extends Model
{
    public $table = "item_translations";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id', 'language_code', 'name',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
