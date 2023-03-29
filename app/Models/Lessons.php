<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{

	protected $table = 'lessons';
	public $timestamps = true;
	protected $fillable = array('title', 'video', 'link', 'arrange', 'description', 'product_id', 'is_activate' , 'duration');

	public function scopeActive($query){
		return $query->where('is_activate', 1);
	}

	public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
