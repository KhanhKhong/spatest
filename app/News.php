<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $primary = 'id';
    protected $fillable = [
    	'id','image','title','description','news_category_id','created_at','updated_at'
    ];
    public function news_category(){
    	return $this->belongsTo('App\NewsCategory','news_category_id','id');
    }
}
