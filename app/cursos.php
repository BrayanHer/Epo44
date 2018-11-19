<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    use SoftDeletes;

    protected $table = 'cursos';
    protected $primaryKey ='IdCurso';
    protected $fillable=['IdCurso','IdMateria','IdMaestro'];

    protected $data = ['deleted_at'];
}
