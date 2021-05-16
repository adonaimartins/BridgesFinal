<?php

namespace Database\Factories;

use App\Models\Angle;
use Illuminate\Database\Eloquent\Factories\Factory;

class AngleFactory extends Factory
{
    // use WithFaker;
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
            'position' => $this->faker->address,
            'length_mm' => $this->faker->randomNumber(2),
            'height_mm' => $this->faker->randomNumber(2),
            'width_mm' => $this->faker->randomNumber(2),
            'thickness_mm' => $this->faker->randomNumber(2),
            'length_inches' => $this->faker->randomNumber(3),
            'height_inches' => $this->faker->randomNumber(3),
            'width_inches' => $this->faker->numberBetween($min = 1, $max = 50),
            'thickness_inches' => $this->faker->randomNumber(3),
            'preffered_unit' => $this->faker->randomElement(['INCHES', 'MM']),
        ];
    }
}
         "CREATE TABLE IF NOT EXISTS angles (
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
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES')
        )";
            
