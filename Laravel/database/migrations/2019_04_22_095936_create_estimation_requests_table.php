<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estimation_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('estimation_request_date');
            $table->text('estimation_request_maker_name');
            $table->integer('partner_id')->unsigned();
            $table->text('partner_name');
            $table->text('partner_incharge_name');
            $table->date('desirable_answer_date');
            $table->timestamps();
            $table->text('create_user');
            $table->text('update_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimation_requests');
    }
}
