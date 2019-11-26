<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded =[];
   	public function getRouteKeyName(){
   		return 'slug';
    }
}
