<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RrhhDepartments extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rrhh_departments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_departments', 'description_departments'];
}
