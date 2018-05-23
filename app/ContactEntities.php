<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEntities extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact_entities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_entity'];
}
