<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();
        $product= new Product();
        $product->title=$faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10,300);
        $product->title = $faker->sentence(6);
        $product->image = "chaussure_h_1.jpg";
        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "chaussure_h_2.jpg";
       

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "pull_h_1.jpg";
       

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "pull_h_2.jpg";
        

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "jean_h_1.jpg";
       

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "jean_h_2.jpg";
       

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "chaussure_f_1.jpg";
      

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "chaussure_f_2.jpg";
      

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "robe_f_1.jpg";
        

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "robe_f_2.jpg";
      

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "sac_f_1.jpg";
     

        $product->save();

        $faker = Faker\Factory::create();
        $product = new Product();
        $product->title = $faker->sentence(6);
        $product->slug = $faker->slug;
        $product->subtitle = $faker->sentence(8);
        $product->description = $faker->text;
        $product->price = $faker->numberBetween(10, 300);
        $product->title = $faker->sentence(6);
        $product->image = "sac_f_2.jpg";
       

        $product->save();




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
