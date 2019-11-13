<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public static function getSizes(){
        return array('large' => 'Large', 'medium' => 'Medium', 'small' => 'Small', 'xs' => 'Xs');
    }

    public function images()
    {
        return $this->hasMany('App\Media', 'productId', 'id');
        
    }
}
