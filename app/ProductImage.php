<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = "product_image";
    protected $primary = 'id';
    protected $fillable = [
    	'id','thumbnail','product_id','created_at','updated_at'
    ];
    
    public function product(){
        return $this->belongsTo('App\Products','product_id','id');
    }
}
