<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class followup extends Model
{
    //
    protected $table = 'followups';
    protected $fillable = ['description', 'id_user'];

}
