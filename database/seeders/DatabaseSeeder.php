<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\WithFaker;

class DatabaseSeeder extends Seeder
{
    use WithFaker;
    /**
     * Seed the application's database.
     * 
     * @return void
     */

    public function run()
    {
        // $faker = Faker::create();
        //$this->setupFaker();  //setting a new instance
        //\App\Models\User::factory(10)->create();
        // \App\Models\Angle::factory(10)->create();
            

   	  	// 	DB::table('bridges')->insert([
	       		
	    //         'surveyor_name' => $this->faker->surveyor_name,
	    //         'surveyor_lastName' =>$this->faker->surveyor_lastName,
	    //         'structure_name' => $this->faker->structure_name,
	    //         'structure_location' => $this->faker->structure_location,
	    //         'structure_number' => $this->faker->structure_number,		
	    //         'mileageMiles' => $this->faker->randomNumber(2),
	    //         'mileageYards' => $this->faker->randomNumber(3)
	    //    ]);

        //---------Calling all seeders in order------------------//
        $this->call(BridgeSeeder::class);
        // $this->call(DeckSeeder::class);
        // $this->call(GirderSeeder::class);
        //$this->call(BaySeeder::class);
        // $this->call(StiffenerSeeder::class);
        $this->call(AngleSeeder::class);
        // $this->call(CpSeeder::class);
        // $this->call(FlangeSeeder::class);
               
    }
}
