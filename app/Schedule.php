<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = "schedule";
    protected $primary = 'id';
    protected $fillable = [
    	'id','name','phone','email','time','description','created_at','updated_at'
    ];
}
