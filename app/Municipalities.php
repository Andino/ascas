<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipalities extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipalities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_municipality'];
}
