<?php

use Illuminate\Database\Seeder;

class EstimationRequestDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EstimationRequestDetail::class, 10)->create();
    }
}
