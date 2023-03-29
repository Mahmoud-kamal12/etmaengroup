<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Questionnaire extends Authenticatable 
{

	protected $table = 'questionnaires';
	public $timestamps = true;
	protected $fillable = array('key', 'value');

}