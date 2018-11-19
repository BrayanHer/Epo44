<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoBajas extends Model
{
    use SoftDeletes;

    protected $table = 'tipobajas';
    protected $primaryKey ='IdTipoBajas';
    protected $fillable=['IdTipoBajas','Tipo'];

    protected $data = ['deleted_at'];
}
