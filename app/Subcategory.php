<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{public $timestamps=false;
      public function parent(){
        
        return $this->belongsTo(Category::class);
        
    }
    public function produits()
    {
        return $this->belongsToMany(Product::class,'product_subcategories');
    }
}
