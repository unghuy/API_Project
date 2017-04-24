<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categories';
    public $timestamps = false;
    public function Products(){
      return $this->hasMany('App\Products');
    }
}
