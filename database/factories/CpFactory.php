<?php

namespace Database\Factories;

use App\Models\Cp;
use Illuminate\Database\Eloquent\Factories\Factory;

class CpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cp::class;

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

        CREATE TABLE IF NOT EXISTS CPs (
            cp_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            position varchar(255) CHECK (position='TOP' OR position='BOTTOM'),
            location int,         
            stiffener_start INT,
            start_distance_mm INT,
            start_distance_inches double(5,2),
            stiffener_end INT,
            end_distance_mm INT,
            end_distance_inches double(5,2),
            width_mm INT,
            thickness_mm INT,
            width_inches double(5,2),
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        );
