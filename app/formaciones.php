<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formaciones extends Model
{
    use SoftDeletes;
    
    protected $table = 'formaciones';
    protected $primaryKey ='IdFormAcademica';
    protected $fillable=['IdFormAcademica','IdMatricula','IdTramites','IdTurno','IdPeriodo','IdGrupo'
    ,'CicloEscolar','Fecha','Fotos','Baucher'];

    protected $data = ['deleted_at'];
}
