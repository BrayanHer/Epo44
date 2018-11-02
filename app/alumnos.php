<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alumnos extends Model
{
    use SoftDeletes;
    protected $primaryKey ='IdMatricula';
    protected $fillable=['IdMatricula','Nombre','APaterno','AMaterno','Edad','Sexo','FechaNac','Celular','TelFijo','Email','Calle',
    'NumInt','NumExt','CodigoPostal','Estado','IdMun','IdLoc','NombrePadre','APPadre','AMPadre','CelularPadre','NombreMadre','APMadre','AMMadre',
    'CelularMadre','Curp','ActNacimiento','FolioAsignado','SecProcedencia','CertificadoSec'];

    protected $data = ['delete_at'];
}
