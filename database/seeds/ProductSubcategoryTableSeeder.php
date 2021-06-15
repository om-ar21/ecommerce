<?php

use App\ProductSubcategory;
use Illuminate\Database\Seeder;

class ProductSubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 2;
        $ProductSubcategory->subcategory_id =1;
        $ProductSubcategory->save();

        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 4;
        $ProductSubcategory->subcategory_id =1;
        $ProductSubcategory->save();

        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 1;
        $ProductSubcategory->subcategory_id =2;
        $ProductSubcategory->save();

        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 1;
        $ProductSubcategory->subcategory_id =3;
        $ProductSubcategory->save();

        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 2;
        $ProductSubcategory->subcategory_id =4;
        $ProductSubcategory->save();

        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 2;
        $ProductSubcategory->subcategory_id =5;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 3;
        $ProductSubcategory->subcategory_id =6;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 4;
        $ProductSubcategory->subcategory_id =6;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 5;
        $ProductSubcategory->subcategory_id =2;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 6;
        $ProductSubcategory->subcategory_id =1;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 7;
        $ProductSubcategory->subcategory_id =2;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 8;
        $ProductSubcategory->subcategory_id =3;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 9;
        $ProductSubcategory->subcategory_id =4;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 10;
        $ProductSubcategory->subcategory_id =5;
        $ProductSubcategory->save();
        $ProductSubcategory = new ProductSubcategory();
        $ProductSubcategory->product_id = 11;
        $ProductSubcategory->subcategory_id =6;
        $ProductSubcategory->save();
       

      
    }
}
