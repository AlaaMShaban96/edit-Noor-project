<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    public $table = "emails";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footer_id', 'email_type_id', 'link',
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }

    public function emailType()
    {
        return $this->belongsTo(EmailType::class);
    }
}
