<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    // 
    protected $table = 'departments';
    protected $fillable = ['name', 'responsible', 'email_responsible','manager', 'email_manager'];
}
