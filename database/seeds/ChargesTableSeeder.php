<?php

use Illuminate\Database\Seeder;

use App\Models\Charges;

class ChargesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $charges = array(
        	[
        		'name' => 'Cliente'
        	],
        	[
        		'name' => 'Mesero'
        	],
        	[
        		'name' => 'Cocinero'
        	],
        	[
        		'name' => 'Cajero'
        	]
        );

	    foreach ($charges as $value){
	    	$charge = new Charges;
	    	$charge->name = $value['name'];
	    	$charge->save();
	    }
    }
}
