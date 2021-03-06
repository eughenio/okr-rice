<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Okr extends Model
{
	protected $fillable = [
    	'result', 'objective', 'quarter_year', 'priority', 'progress', 'start_date', 'area_id', 'duration', 'reach', 'impact', 'confidence', 'effort'
    ];

    public function area()
    {
    	return $this->belongsTo('App\Area');
    }
}
