<?php

namespace Database\Seeders;

use App\Models\Bridge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Testing\WithFaker;

class BridgeSeeder extends Seeder
{
	use WithFaker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   	  	  DB::table('bridges')->insert([
	       		
	             'surveyor_name' => "asd",
	             'surveyor_lastName' => "asd",
	             'structure_name' => "asd",
	             'structure_location' => "asd",
	             'structure_number' => 12312,		
	             'mileageMiles' => rand(1,999),
	             'mileageYards' => rand(1,999)
	        ]);

		//Bridge::factory(50)->create();
    }	
}
