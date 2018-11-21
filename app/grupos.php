<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class grupos extends Model
{
    use SoftDeletes;

    protected $table = 'grupos';
    protected $primaryKey ='IdGrupo';
    protected $fillable=['IdGrupo','Grupo','IdCurso'];

    protected $data = ['deleted_at'];
}
