<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    //
    protected $table = 'followups';
    protected $fillable = ['description', 
                           'type',
                           'manifestation_date',
                           'complainer',
                           'complainer_phone', 
                           'complainer_email',
                           'description',
                           'id_user', 
                           'id_department'];
}
