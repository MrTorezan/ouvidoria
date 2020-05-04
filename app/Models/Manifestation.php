<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    //

    protected $table = 'manifestations';
    protected $fillable = [
        'type',
        'manifestation_date',
        'complainer',
        'complainer_phone',
        'complainer_email',
        'description',
        'user',
        'department_id',
    ];

    protected $dates = ['manifestation_date'];

    public function department()
    {
        return $this->belongsTo('App\\Models\\Department');
    }
}
