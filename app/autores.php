<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class autores extends Model
{
    protected $table = 'autores';
    protected $primaryKey ='IdAutor';
    protected $fillable=['IdAutor','Nombre','APaterno','AMaterno'];

    protected $data = ['delete_at'];
}
