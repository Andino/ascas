<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permits extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permits';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['permit_name', 'permit_description'];
}
