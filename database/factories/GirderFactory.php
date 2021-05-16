<?php

namespace Database\Factories;

use App\Models\Girder;
use Illuminate\Database\Eloquent\Factories\Factory;

class GirderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Girder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
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

        "CREATE TABLE IF NOT EXISTS girders (
            girder_id INT AUTO_INCREMENT PRIMARY KEY,
            deck_id INT NOT NULL,
            girder_name varchar(255) NOT NULL,
            girder_direction varchar(255),
            elevation varchar(255), 
            FOREIGN KEY (deck_id) REFERENCES Decks(deck_id),
            CONSTRAINT CHK_Elevation CHECK (elevation='INTERNALFACE' OR elevation='EXTERNALFACE')
        )";