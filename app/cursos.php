<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $table = 'cursos';
    protected $primaryKey ='IdCurso';
    protected $fillable=['IdCurso','IdMateria','IdMaestro'];
}
