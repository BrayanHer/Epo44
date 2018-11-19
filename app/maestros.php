<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    use SoftDeletes;
    
    protected $table = 'maestros';
    protected $primaryKey ='IdMaestro';
    protected $fillable=['IdMaestro','NombreM','APaterno','AMaterno'];

    protected $data = ['deleted_at'];
}
