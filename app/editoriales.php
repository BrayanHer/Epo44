<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editoriales extends Model
{
    protected $table = 'editoriales';
    protected $primaryKey ='IdEditorial';
    protected $fillable=['IdEditorial','Editorial'];
}
