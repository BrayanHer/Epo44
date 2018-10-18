<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localidades extends Model
{
    protected $table = 'localidades';
    protected $primaryKey ='IdLoc';
    protected $fillable=['IdLoc','Localidad','IdMun'];
}

