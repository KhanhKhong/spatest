<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "product_category";
    protected $primary = 'id';
    protected $fillable = [
    	'id','title','parent','created_at','updated_at'
    ];

    public function product(){
        return $this->hasMany('App\Products','product_category_id','id');
    }

    public function parent()
    {
        return $this->belongsTo('App\ProductCategory', 'parent');
    }
 
    public function children()
    {
        return $this->hasMany('App\ProductCategory', 'parent');
    }
}
