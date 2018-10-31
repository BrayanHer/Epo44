<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categorias extends Model
{
    use SoftDeletes;
    protected $table = 'categorias';
    protected $primaryKey ='IdCategoria';
    protected $fillable=['IdCategoria','Categoria'];

    protected $data = ['delete_at'];
}
