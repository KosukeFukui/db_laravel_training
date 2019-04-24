<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

class EstimationRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EstimationRequest::class, 10)->create();
    }
}
