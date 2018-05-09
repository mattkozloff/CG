<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soilType extends Model
{
    protected $fillable = [
        'name', 'comments', 'systemID'
    ];
}
