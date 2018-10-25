<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoBajas extends Model
{
    protected $table = 'tipobajas';
    protected $primaryKey ='IdTipoBajas';
    protected $fillable=['IdTipoBajas','Tipo'];
}
