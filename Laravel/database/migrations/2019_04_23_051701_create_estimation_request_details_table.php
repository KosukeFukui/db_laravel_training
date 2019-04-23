<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimationRequestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimation_request_details', function (Blueprint $table) {
            $table->bigIncrements('estimation_request_detail_id');
	    $table->bigInteger('estimation_request_id')->unsigned();
	    $table->mediumInteger('catalog_id')->unsigned();
	    $table->text('catalog_name');
	    $table->integer('product_id')->unsigned();
	    $table->text('product_name');
	    $table->integer('product_quantity')->unsigned();
	    $table->foreign('estimation_request_id')->references('estimation_request_id')->on('estimation_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimation_request_details');
    }
}
