<?php

namespace App\Http\Controllers;

use App\EstimationRequest;
use App\EstimationRequestDetail;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
	public function index() {
		return view('training.index');
	}
	public function estimation_request() {
		$items = EstimationRequest::all();
		return view('training.request', ['items' => $items]);
	}
	public function estimation_request_detail(Request $request) {
		$id = $request->id;
		$items = EstimationRequestDetail::where('estimation_request_id', $id)->get();
		return view('training.request_detail', ['items' => $items, 'id' => $id]);
	}
}
