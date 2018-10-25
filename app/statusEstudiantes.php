<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusEstudiantes extends Model
{
    protected $table = 'statusestudiantes';
    protected $primaryKey ='IdStatus';
    protected $fillable=['IdStatus','IdMatricula','IdTipoBaja','FechaBaja','Observacion'];
}
