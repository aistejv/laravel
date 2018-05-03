<?php


use App\Manufacturer;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ManufacturerSeeder extends Seeder
{
  protected $manufacturer;
  protected $faker;
  public function __construct(Manufacturer $manufacturer, Faker $faker){
    $this->manufacturer = $manufacturer;
    $this->faker = $faker;
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = $this->faker->create();
      foreach (range(1,20) as $index) {
        $this->manufacturer->create([
          'name' => $faker->company(),
          'country' => $faker->country()
        ]);
    }
}

}
