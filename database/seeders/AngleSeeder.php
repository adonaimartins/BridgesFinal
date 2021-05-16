<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Angle;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class AngleSeeder extends Seeder
{
    use WithFaker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
	  	    DB::table('angles')->insert([
	       		
	               'position' => "Random position",
	               'length_mm' => rand(1,999),
	               'height_mm' => rand(1,999),
	               'width_mm' => rand(1,999),
	               'thickness_mm' => rand(1,999),		
	               'length_inches' => rand(1,999),
	               'height_inches' => rand(1,999),
                   'width_inches' => rand(1,999),
	               'thickness_inches' => rand(1,999),		
	               'preffered_unit' => "MM"
	          ]);

            //Angle::factory(50)->create();

    }
}       
        "CREATE TABLE IF NOT EXISTS Angles (
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
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        )";
    