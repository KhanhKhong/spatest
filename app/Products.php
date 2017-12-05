<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $primary = 'id';
    protected $fillable = [
    	'id','image','title','description','price_sale','price','hot','status','product_category_id','created_at','updated_at'
    ];

    public function product_category(){
    	return $this->belongsTo('App\ProductCategory','product_category_id','id');
    }

    public function product_image(){
    	return $this->HasMany('App\ProductImage','product_id','id');
    } 
}
