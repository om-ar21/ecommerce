<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category= new Category();
        $category->name = "Homme";
  
        $category->save();

        $category2 = new Category();
        $category2->name = "Femme";

        $category2->save();

    }
}
