<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";
    protected $primary = 'id';
    protected $fillable = [
    	'id','image','title','description','price','service_category_id','created_at','updated_at'
    ];

    public function service_category(){
    	return $this->belongsTo('App\ServiceCategory','service_category_id','id');
    }
}
