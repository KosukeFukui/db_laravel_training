<?php

namespace App\Http\Controllers;

use App\EstimationRequest;
use App\EstimationRequestDetail;
use Illuminate\Http\Request;
//use App\Http\Requests\EstimationRequestDetailRequest;
use Validator;
use Illuminate\Validation\Rule;

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
	public function estimation_request_detail_new(Request $request) {
		$id = $request->id;
		$items = EstimationRequest::where('id', $id)->get();
		return view('training.request_detail_new', ['items' => $items, 'id' => $id]);
	}
	public function estimation_request_detail_post(Request $request) {
		$id = $request->id;
		//$product = $request->product_id;
		$catalog = $request->catalog_id;
		$rules = [
            		'catalog_id' => ['required', 'integer', 'min: 1'],
                        'catalog_name' => ['required', 'alpha'],
			'product_id' => ['required', 'integer', 'min: 1',
		       'unique:estimation_request_details,product_id,NULL,id,estimation_request_id,'.$id.',catalog_id,'.$catalog],	
			/*Rule::unique('estimation_request_details')
				//->where('product_id', '{{ $product }}')
				//->ignore('product_id')
				->where(function($query) {
				$query->where('estimation_request_id', '{{ $id }}')
				      ->where('catalog_id', '{{ $catalog }}');
				}),
				/*->where('estimation_request_id', '{{ $id }}')
				->where('catalog_id', '{{ $catalog }}'),*/
	       		//],
                        'product_name' => ['required', 'alpha'],
                        'product_quantity' => ['required', 'integer', 'min: 1'],
        	];
		$messages = [
		        'catalog_id.required' => 'カタログ番号は必ず入力してください。',
    			'catalog_id.integer' => 'カタログ番号を整数で記入ください。',
			'catalog_id.min' => 'カタログ番号は１以上で記入ください。',
			'catalog_name.required' => 'カタログ名は必ず入力してください。',
		        'catalog_name.string' => 'カタログ名はアルファベットで記入ください。',
		        'product_id.required' => '商品番号は必ず入力してください。',
			'product_id.integer' => '商品番号を整数で記入ください。',
			'product_id.min' => '商品番号は１以上で記入ください。',
			'product_id.unique' => 'このカタログと商品の組合せはすでに登録されています。',
			'product_name.required' => '商品名は必ず入力してください。',
			'product_name.string' => '商品名はアルファベットで記入ください。',
			'product_quantity.required' => '見積数量は必ず入力してください。',
			'product_quantity.integer' => '見積数量を整数で記入ください。',
			'product_quantity.min' => '見積数量は１以上で記入ください。',
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
		    return redirect()->action('TrainingController@estimation_request_detail_new', ['id' => $id]) 
		    ->withErrors($validator)
		    ->withInput();
		}

		$newDetail = new EstimationRequestDetail();
		$newDetail->estimation_request_id = $request->id;
		$newDetail->catalog_id = $request->catalog_id;
		$newDetail->catalog_name = $request->catalog_name;
		$newDetail->product_id = $request->product_id;
		$newDetail->product_name = $request->product_name;
		$newDetail->product_quantity = $request->product_quantity;
		$newDetail->create_user_id = '11111111';
		$newDetail->update_user_id = '11111111';
		$newDetail->save();

		return view('training.request_detail_new_complete', ['msg' => '正しく登録されました！', 'id' => $id]);
	}
	
}
