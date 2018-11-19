<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class turnos extends Model
{
    use SoftDeletes;

    protected $table = 'turnos';
    protected $primaryKey ='IdTurno';
    protected $fillable=['IdTurnos','Turno','IdPeriodo'];

    protected $data = ['deleted_at'];
}
