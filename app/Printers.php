<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printers extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'printers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_printer', 'nit_printer', 'nrc_printer'];
}
