<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalRepresentatives extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'legal_representatives';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_lrepr', 'surname_lrepr', 'nit_lrepr', 'dui_lrepr', 'birthdate_lrepr', 'email_lrepr', 'phone_lrep'];
}
