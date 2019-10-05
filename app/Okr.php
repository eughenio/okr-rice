<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Okr extends Model
{
	protected $fillable = [
    	'result', 'objective', 'quarter_year', 'priority', 'percentage', 'area_id',
    ];

    public function area()
    {
    	return $this->hasOne('App\Area');
    }
}
