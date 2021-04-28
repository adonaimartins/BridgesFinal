<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

   	  		DB::table('bridges')->insert([
	       		
	            'surveyor_name' => $this->faker->surveyor_name,
	            'surveyor_lastName' => $this->faker->surveyor_lastName,
	            'structure_name' => $this->faker->structure_name,
	            'structure_location' => $this->faker->structure_location,
	            'structure_number' => $this->faker->structure_number,		
	            'mileageMiles' => $this->faker->randomNumber(2),
	            'mileageYards' => $this->faker->randomNumber(3)
	       ]);
    }
}
