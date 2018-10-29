<?php

use Illuminate\Database\Seeder;
use App\Galaxy;

class GalaxiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      // Create 10 product records
      for ($i = 0; $i < 10; $i++) {
          Galaxy::create([
              'name' => $faker->domainWord,
          ]);
      }
      //
    }
}
