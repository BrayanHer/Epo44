<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    protected $table = 'municipios';
    protected $primaryKey ='IdMun';
    protected $fillable=['IdMun','Municipios'];
}
