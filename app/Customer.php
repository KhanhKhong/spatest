<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primary = 'id';
    protected $fillable = [
    	'id','name','gender','address','phone','email','created_at','updated_at'
    ];
}
