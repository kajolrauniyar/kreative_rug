<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['page_id','sectionTitle', 'sectionContent'];
    public function content()
    {
        return $this->belongsTo('App\Content', 'page_id');
    }
}
