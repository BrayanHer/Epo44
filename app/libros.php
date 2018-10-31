<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class libros extends Model
{
    use SoftDeletes;
    protected $table = 'libros';
    protected $primaryKey ='IdLibro';
    protected $fillable=['IdLibro','Titulo','IdAutor','IdEditorial','Edicion','AnoPublicacion','IdCategoria'];

    protected $data = ['delete_at'];
}
