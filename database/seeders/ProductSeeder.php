<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 

            $newProduct = new Product();
            $newProduct->title = $faker->word();
            $newProduct->description = $faker->sentence(10);
            $newProduct->imgPath = $faker->imageUrl(640, 480, 'animals', true);
            $newProduct->price = $faker->randomDigit;
            $newProduct->brand = $faker->company;
            $newProduct->type = $faker->word();
            $newProduct->save();

        }
    }
}
