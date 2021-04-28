<?php

namespace Database\Factories;

use App\Models\Bay;
use Illuminate\Database\Eloquent\Factories\Factory;

class BayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'surveyor_name' => $this->faker->surveyor_name,
                'surveyor_lastName' => $this->faker->surveyor_lastName,
                'structure_name' => $this->faker->structure_name,
                'structure_location' => $this->faker->structure_location,
                'structure_number' => $this->faker->structure_number,       
                'mileageMiles' => $this->faker->randomNumber(2),
                'mileageYards' => $this->faker->randomNumber(3)  
        ];
    }
}
        CREATE TABLE IF NOT EXISTS Bays (
            bay_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            bay_position varchar(255),
            length_mm int,
            thickness_mm int,
            length_inches double(5,2), 
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        );