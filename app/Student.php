<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = [
				'first_name',
				'last_name',
				'email',
				'gender',
				'age',
				'session',
				
				];
	protected $table = 'students';
}