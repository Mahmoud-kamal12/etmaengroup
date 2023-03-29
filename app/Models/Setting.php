<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table = 'setting';
	public $timestamps = true;
	protected $fillable = array('email', 'phone', 'facebook', 'twitter', 'insta', 'place', 'allow_direct_advertising_cars',
								'allow_direct_advertising_spareparts', 'allow_direct_advertising_experts');

}
