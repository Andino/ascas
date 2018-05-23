<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTypes extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees_types';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_employee_type', 'description_employee_type'];
}
