<?php

namespace Database\Factories;

use App\Models\Angle;
use Illuminate\Database\Eloquent\Factories\Factory;

class AngleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Angle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {



        return [
            'surveyor_name' => $this->faker->surveyor_name,
            'surveyor_lastName' => $this->faker->surveyor_lastName,



            'position' => $this->faker->position,
            'girder_id' => function() {
                return factory(
                    \App\Models\Girder::class
                )->create()->girder_id;
            },
            'structure_number' => $this->faker->Str::random(10),   

            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),
            'mileageMiles' => $this->faker->numberBetween($min = 1, $max = 50),



            'mileageYards' => $this->faker->randomNumber(3)  
        ];
    }
}

            angle_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            position varchar(255),  
            length_mm int,
            height_mm int,
            width_mm int,
            thickness_mm int,
            length_inches double(5,2),
            height_inches double(5,2),
            width_inches double(5,2),
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            
