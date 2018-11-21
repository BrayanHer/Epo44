<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class formaciones extends Model
{
    use SoftDeletes;
    
    protected $table = 'formaciones';
    protected $primaryKey ='IdFormAcademica';
    protected $fillable=['IdFormAcademica','IdMatricula','IdTramites','IdTurno','IdPeriodo','IdGrupo'
    ,'CicloEscolar','Fecha','Fotos','Baucher'];

    protected $data = ['deleted_at'];
}
