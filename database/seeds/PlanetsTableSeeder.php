<?php

use Illuminate\Database\Seeder;
use App\Planet;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      // Create 50 product records
      for ($i = 0; $i < 10; $i++) {
          Planet::create([
              'title' => $faker->domainWord,
              'size' => $faker->randomNumber(2),
          ]);
      }
      //
    }
}
