<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function product()
    {
    	return $this->belongsToMany('App\Product');
    }
}
