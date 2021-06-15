<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $timestamps=false;
    public function subcategory()
    {
        return $this->belongsToMany(Subcategory::class,'product_subcategories');
    }
}
