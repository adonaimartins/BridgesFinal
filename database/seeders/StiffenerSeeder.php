<?php

namespace Database\Seeders;

use App\Models\Stiffener;
use Illuminate\Database\Seeder;

class StiffenerSeeder extends Seeder
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

        Stiffener::factory()->times(50)->create();

    }
}
       "CREATE TABLE IF NOT EXISTS stiffener (
            stiffener_id INT AUTO_INCREMENT PRIMARY KEY,
            bay_id INT NOT NULL,
            stiffener_number int,
            type int,
            FOREIGN KEY (bay_id) REFERENCES Bays(bay_id)
        )";