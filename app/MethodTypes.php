<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MethodTypes extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_type', 'description_type'];
}
