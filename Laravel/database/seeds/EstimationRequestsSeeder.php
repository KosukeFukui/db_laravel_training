<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

class EstimationRequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(App\EstimationRequest::class, 30)->create()
		    ->each(function ($estimationRequest)
		    {
			    $estimationRequestDetails = factory(App\EstimationRequestDetail::class, 30)->make();
			    $estimationRequest->estimationRequestDetails()->saveMany($estimationRequestDetails);
		    });
    }
}
