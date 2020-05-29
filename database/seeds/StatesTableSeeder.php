<?php

use Illuminate\Database\Seeder;

use App\Models\States;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $states = array(
        	[
        		'name' => 'Activo'
        	],
        	[
        		'name' => 'No activo'
        	]
        );

	    foreach ($states as $value){
	    	$state = new States;
	    	$state->name = $value['name'];
	    	$state->save();
	    }
    }
}
