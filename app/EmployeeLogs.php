<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLogs extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['action_log', 'date_log'];
}
