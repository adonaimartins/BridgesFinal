<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bay;

//use Illuminate\Foundation\Testing\WithFaker;
//use Illuminate\Support\Facades\DB;

class BaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	  	//  DB::table('bridges')->insert([
	       		
	    //         'surveyor_name' => $this->faker->surveyor_name,
	    //         'surveyor_lastName' => $this->faker->surveyor_lastName,
	    //         'structure_name' => $this->faker->structure_name,
	    //         'structure_location' => $this->faker->structure_location,
	    //         'structure_number' => $this->faker->structure_number,		
	    //         'mileageMiles' => $this->faker->randomNumber(2),
	    //         'mileageYards' => $this->faker->randomNumber(3)
	    //    ]);

        Bay::factory()->times(50)->create();

    }
}
        "CREATE TABLE IF NOT EXISTS Bays (
            girder_id INT NOT NULL,
            bay_position varchar(255),
            length_mm int,
            thickness_mm int,
            length_inches double(5,2), 
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        )"; 