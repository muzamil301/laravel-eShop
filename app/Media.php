<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

     public function product()
    {
        return $this->belongsTo('App\Post', 'productId', 'id');
    }
}
