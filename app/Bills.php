<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table = "bills";
    protected $primary = 'id';
    protected $fillable = [
    	'id','id_customer','date_order','total','payment','created_at','updated_at'
    ];
}
