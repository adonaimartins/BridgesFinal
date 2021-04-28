<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GirderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

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
        CREATE TABLE IF NOT EXISTS Girders (
            girder_id INT AUTO_INCREMENT PRIMARY KEY,
            deck_id INT NOT NULL,
            girder_name varchar(255) NOT NULL,
            girder_direction varchar(255),
            elevation varchar(255), 
            FOREIGN KEY (deck_id) REFERENCES Decks(deck_id),
            CONSTRAINT CHK_Elevation CHECK (elevation='INTERNALFACE' OR elevation='EXTERNALFACE')
        );