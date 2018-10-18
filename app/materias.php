<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    protected $table = 'materias';
    protected $primaryKey ='IdMaterias';
    protected $fillable=['IdMaterias','Materia'];
}
