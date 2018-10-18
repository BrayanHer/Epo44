<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $table = 'libros';
    protected $primaryKey ='IdLibro';
    protected $fillable=['IdLibro','Titulo','IdAutor','IdEditorial','Edicion','AnoPublicacion','IdCategoria'];
}
