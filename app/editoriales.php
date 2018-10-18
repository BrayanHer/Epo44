<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editoriales extends Model
{
    protected $table = 'Editoriales';
    protected $primaryKey ='IdEditorial';
    protected $fillable=['IdEditorial','Editoriales'];
}
