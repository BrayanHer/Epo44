<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localidades extends Model
{
    use SoftDeletes;
    
    protected $table = 'localidades';
    protected $primaryKey ='IdLoc';
    protected $fillable=['IdLoc','Localidad','IdMun'];

    protected $data = ['deleted_at'];
}
