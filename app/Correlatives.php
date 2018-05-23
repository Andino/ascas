<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correlatives extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'correlatives';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['doc_number', 'date'];
}
