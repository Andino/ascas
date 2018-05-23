<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMethod extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact_method';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['value', 'adress_center'];
}
