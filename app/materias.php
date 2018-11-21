<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class materias extends Model
{
    use SoftDeletes;
    
    protected $table = 'materias';
    protected $primaryKey ='IdMaterias';
    protected $fillable=['IdMaterias','Materia'];

    protected $data = ['deleted_at'];
}
