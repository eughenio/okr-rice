<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'okr_id', 'profile_id', 'quantity',
    ];
}
