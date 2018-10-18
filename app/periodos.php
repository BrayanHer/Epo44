<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periodos extends Model
{
    protected $table = 'periodos';
    protected $primaryKey ='IdPeriodo';
    protected $fillable=['IdPeriodo','Periodo','IdGrupo'];
}
