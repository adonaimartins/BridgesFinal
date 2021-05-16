<?php

namespace Database\Factories;

use App\Models\Flange;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlangeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flange::class;

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


        "CREATE TABLE IF NOT EXISTS flanges (
            flange_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            position varchar(255) CHECK (position='TOP' OR position='BOTTOM'), 
            width_mm int,
            thickness_mm int,
            width_inches double(5,2),
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),   
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        )";