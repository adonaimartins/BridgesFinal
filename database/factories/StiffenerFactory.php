<?php

namespace Database\Factories;

use App\Models\Stiffener;
use Illuminate\Database\Eloquent\Factories\Factory;

class StiffenerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stiffener::class;

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
                "CREATE TABLE IF NOT EXISTS stiffener (
                    stiffener_id INT AUTO_INCREMENT PRIMARY KEY,
                    bay_id INT NOT NULL,
                    stiffener_number int,
                    type int,
                    FOREIGN KEY (bay_id) REFERENCES Bays(bay_id)
                )";