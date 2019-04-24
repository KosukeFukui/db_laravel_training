<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstimationRequestDetail extends Model
{
    protected $table = 'estimation_request_details';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
        'catalog_id',
        'catalog_name',
        'product_id',
        'product_name',
	'product_quantity',
	'create_user_id',
	'update_user_id',
    ];
}
