<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class statusEstudiantes extends Model
{
    use SoftDeletes;

    protected $table = 'statusestudiantes';
    protected $primaryKey ='IdStatus';
    protected $fillable=['IdStatus','IdMatricula','IdTipoBaja','FechaBaja','Observacion'];

    protected $data = ['deleted_at'];
}
