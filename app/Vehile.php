<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehile extends Model
{
   protected $fillable = [
				'number_of_vehicle',
				'make',
				'model',
				'year',
				'powervalue',
				'units',
				'miles_driven',
				
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'vehiles';
}
