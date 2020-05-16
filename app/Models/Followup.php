<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    //
    protected $table = 'followups';
    protected $fillable = ['description', 'id_user'];

}
