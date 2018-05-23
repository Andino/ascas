<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'genres';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_genre'];
}
