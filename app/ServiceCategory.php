<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = "service_category";
    protected $primary = 'id';
    protected $fillable = [
    	'id','title','parent','created_at','updated_at'
    ];
    public function service(){
        return $this->hasMany('App\Services','service_category_id','id');
    }

    public function parent()
    {
        return $this->belongsTo('App\ServiceCategory', 'parent');
    }
 
    public function children()
    {
        return $this->hasMany('App\ServiceCategory', 'parent');
    }
}
