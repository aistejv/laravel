<?php
use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{   protected $category;
    protected $manufacturer;
    protected $product;
    protected $faker;
    public function __construct(Product $product, Faker $faker, Category $category, Manufacturer $manufacturer ){
      $this->product = $product;
      $this->faker = $faker;
      $this->category = $category;
      $this->manufacturer = $manufacturer;
    }
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $manufacturer_id = $this->manufacturer->pluck('id');
      $category_id = $this->category->pluck('id');
      $faker = $this->faker->create();
      foreach (range(1,50) as $index) {
        $this->product->create([
          'title' => $faker->word(),
          'description' => $faker->sentence(),
          'price' => $faker->randomNumber(4),
          'quantity' => $faker->randomDigitNotNull(),
          'image_url' => $faker->imageUrl(),
          'category_id' => $category_id->random(),
          'manufacturer_id' => $manufacturer_id->random(),

        ]);
      }

    // taip nesaugu
    //   DB::table('products')->delete();
    //   $manufacturer_id = DB::table('manufacturers')->pluck('id');
    //   $category_id = DB::table('categories')->pluck('id');
    //
    //   $faker = Faker::create();
    //   foreach(range(1,50) as $index){
    //    DB::table('products')->insert([
    //     'title' => $faker->word,
    //     'description' => $faker->sentence,
    //     'price' => $faker->randomNumber(2),
    //     'quantity' => $faker->randomDigitNotNull,
    //     'image_url' => $faker->imageUrl(),
    //
    //     'category_id' => $category_id->random(),
    //     'manufacturer_id' => $manufacturer_id->random(),
    //   ]);
    // }
    }
}
