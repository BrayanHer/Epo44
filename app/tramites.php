<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tramites extends Model
{
    use SoftDeletes;

    protected $table = 'tramites';
    protected $primaryKey ='IdTramites';
    protected $fillable=['IdTramites','Tramites'];

    protected $data = ['deleted_at'];
}
