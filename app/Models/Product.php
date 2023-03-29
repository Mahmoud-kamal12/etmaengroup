<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{

	protected $table = 'products';
	public $timestamps = true;
	protected $fillable = array('title', 'photo', 'description', 'type', 'price', 'user_id', 'user_desc', 'is_activate' , 'quiz');

    protected $casts = [
        "quiz" =>"array"
    ];

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

	public function user()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }

}
