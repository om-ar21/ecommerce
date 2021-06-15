<?php

use App\subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        $Subcategory= new Subcategory();
        $Subcategory->name='Chaussettes';
        $Subcategory->category_id=1;
        $Subcategory->save();

        $faker= Faker\Factory::create();
        $Subcategory= new Subcategory();
        $Subcategory->name='chaussure';
        $Subcategory->category_id=1;
        $Subcategory->save();

        $faker= Faker\Factory::create();
        $Subcategory= new Subcategory();
        $Subcategory->name='Jean';
        $Subcategory->category_id=1;
        $Subcategory->save();

        $faker= Faker\Factory::create();
        $Subcategory= new Subcategory();
        $Subcategory->name='Pull';
        $Subcategory->category_id=2;
        $Subcategory->save();

        $faker= Faker\Factory::create();
        $Subcategory= new Subcategory();
        $Subcategory->name='femme';
        $Subcategory->category_id=2;
        $Subcategory->save();

        $faker= Faker\Factory::create();
        $Subcategory= new Subcategory();
        $Subcategory->name='bas collant';
        $Subcategory->category_id=2;
        $Subcategory->save();






    }
}
// $table->bigIncrements('id');
// $table->string('title')->unique();
// $table->string('slug')->unique();
// $table->string('subtitle');
// $table->text('description');
// $table->integer('price');
// $table->string('image');
// $table->timestamps();
