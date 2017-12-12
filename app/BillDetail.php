<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";
    protected $primary = 'id';
    protected $fillable = [
    	'id','id_bill','id_product','quantity','unit_price','created_at','updated_at'
    ];
}
