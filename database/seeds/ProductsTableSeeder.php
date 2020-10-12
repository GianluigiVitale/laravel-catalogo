<?php

use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $product = new Product;
            $product->name = $faker->text(20);
            $product->description = $faker->paragraph(2, true);
            $product->price = $faker->numberBetween(100, 200);
            $product->img = 'https://picsum.photos/200/300';
            $now = Carbon::now()->format('Y-m-d-H-i-s');
            $product->slug = Str::slug($product->name, '-') . $now;
            $product->published = rand(0,1);
            $product->save();
        }
    }
}
