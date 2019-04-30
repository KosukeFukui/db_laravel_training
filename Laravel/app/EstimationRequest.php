<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstimationRequest extends Model
{
	protected $table = 'estimation_requests';

	protected $guarded = array('id');

	public $timestamps = true;

	protected $fillable = [
		'estimation_request_date',
		'estimation_request_maker_name',
		'partner_id',
		'partner_name',
		'partner_incharge_name',
		'desirable_answer_date',
		'create_user_id',
		'update_user_id',
	];

	public function estimationRequestDetails() {
		return $this->hasMany(EstimationRequestDetail::class);
	}
}
