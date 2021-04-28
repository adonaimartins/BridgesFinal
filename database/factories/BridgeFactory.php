<?php

namespace Database\Factories;

use App\Models\Bridge;
use Illuminate\Database\Eloquent\Factories\Factory;

class BridgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bridge::class;

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
                'structure_name' => $this->faker->structure_name,
                'structure_location' => $this->faker->structure_location,
                'structure_number' => $this->faker->structure_number,       
                'mileageMiles' => $this->faker->randomNumber(2),
                'mileageYards' => $this->faker->randomNumber(3)        ];
    }















    
}
