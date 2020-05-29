<?php

use Illuminate\Database\Seeder;

use App\Models\Statess;

class StatessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statess = array(
        	[
        		'name' => 'Pago'
        	],
        	[
        		'name' => 'Por pagar'
        	],
            [
                'name' => 'Cancelado'
            ]
        );

	    foreach ($statess as $value){
	    	$states = new Statess;
	    	$states->name = $value['name'];
	    	$states->save();
	    }
    }
}
