<?php

namespace App\Http\Controllers;

use App\estimation_request;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
	public function index() {
		return view('training.index');
	}
	public function estimation_request() {
		$items = estimation_request::all();
		return view('training.request', ['items' => $items]);
	}
}
