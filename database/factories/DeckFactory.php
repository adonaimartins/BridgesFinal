<?php

namespace Database\Factories;

use App\Models\Deck;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeckFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deck::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

                'surveyor_name' => $this->faker->firstName,
                'surveyor_lastName' => $this->faker->lastName,
                'structure_name' => $this->faker->name,
                'structure_location' => $this->faker->address,
                'structure_number' => $this->faker->buildingNumber,       
                'mileageMiles' => $this->faker->randomNumber(2),
                'mileageYards' => $this->faker->randomNumber(3)  
        ];
    }
}
         "CREATE TABLE IF NOT EXISTS decks (
            deck_id INT AUTO_INCREMENT PRIMARY KEY,
            bridge_id int NOT NULL,
            deck_number int NOT NULL,
            FOREIGN KEY (bridge_id) REFERENCES Bridges(bridge_id)
        )";