<?php

namespace Database\Seeders;
use App\Models\Deck;
use Illuminate\Database\Seeder;

class DeckSeeder extends Seeder
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

        Deck::factory()->times(50)->create();
    }
}
        //  "CREATE TABLE IF NOT EXISTS Decks (
        //      deck_id INT AUTO_INCREMENT PRIMARY KEY,
        //      bridge_id int NOT NULL,
        //      deck_number int NOT NULL,
        //      FOREIGN KEY (bridge_id) REFERENCES Bridges(bridge_id)
        //  )";