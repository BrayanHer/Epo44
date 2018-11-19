<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use SoftDeletes;

    protected $table = 'municipios';
    protected $primaryKey ='IdMun';
    protected $fillable=['IdMun','Municipios'];
    
    protected $data = ['deleted_at'];
}
