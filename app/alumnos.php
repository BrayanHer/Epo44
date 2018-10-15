<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $primaryKey ='IdMatricula';
    protected $fillable=['IdMatricula','Nombre','APaterno','AMaterno','Edad','Sexo','FechaNac','Celular','TelFijo','Email','Calle',
    'NumInt','NumExt','CodigoPostal','Estado','NombrePadre','APPadre','AMPadre','CelularPadre','NombreMadre','APMadre','AMMadre',
    'CelularMadre','Curp','ActNacimiento','FolioAsignado','SecProcedencia','CertificadoSec','IdLoc','IdMun','IdFormAcademica','IdStatus'];
}
