<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nit_company', 'name_company', 'adress_company', 'nrc_company', 'giro_company', 'no_patronal_ISSS', 'no_patronal_AFP'];
}
