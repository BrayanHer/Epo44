<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tramites extends Model
{
    protected $table = 'tramites';
    protected $primaryKey ='IdTramites';
    protected $fillable=['IdTramites','Tramites'];
}
