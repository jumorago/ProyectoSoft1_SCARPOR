<?php

use Illuminate\Database\Seeder;

use App\Models\Documenttypes;

class DocumenttypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documenttypes = array(
        	[
        		'name' => 'Targeta de identidad'
        	],
        	[
        		'name' => 'Cedula'
        	],
        	[
        		'name' => 'Cedula de extrangeria'
        	]
        );

	    foreach ($documenttypes as $value){
	    	$documenttype = new Documenttypes;
	    	$documenttype->name = $value['name'];
	    	$documenttype->save();
	    }
    }
}
