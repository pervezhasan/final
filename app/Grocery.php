<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    	protected $fillable = [
				'name',
				'type',
				'price'
				
				];
				protected $table = 'groceries';
}