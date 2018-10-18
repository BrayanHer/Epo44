<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamoLibros extends Model
{
    protected $table = 'prestamolibro';
    protected $primaryKey ='IdPrestamo';
    protected $fillable=['IdPrestamo','IdMatricula','IdLibro','FechaPrestamo','FechaEntrega'];
}
