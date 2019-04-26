<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstimationRequestDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
	    if ($this->path() == 'training/request/19/new') {
		    return true;
	    } else {
		    return false;
	    }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'catalog_id' => 'required|integer|min: 1',
                        'catalog_name' => 'required|string',
                        'product_id' => 'required|integer|min: 1',
                        'product_name' => 'required|string',
                        'product_quantity' => 'required|integer|min: 1',
        ];
    }
}
