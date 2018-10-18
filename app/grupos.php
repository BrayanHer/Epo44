<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    protected $table = 'grupos';
    protected $primaryKey ='IdGrupo';
    protected $fillable=['IdGrupo','Grupo','IdCurso'];
}
