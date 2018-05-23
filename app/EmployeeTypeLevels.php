<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTypeLevels extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees_types_levels';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['level_employee', 'description_level'];
}
