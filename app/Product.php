<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function material()
    {
    	return $this->belongsToMany('App\Material','materials_products', 'product_id', 'material_id');
    }
}
