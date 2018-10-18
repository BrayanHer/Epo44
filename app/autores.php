<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autores extends Model
{
    protected $table = 'autores';
    protected $primaryKey ='IdAutor';
    protected $fillable=['IdAutor','Nombre','APaterno','AMaterno'];
}
