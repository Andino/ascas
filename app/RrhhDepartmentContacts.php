<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RrhhDepartmentContacts extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rrhh_deparment_contacts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_contact', 'description_contact'];
}
