<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = "news_category";
    protected $primary = 'id';
    protected $fillable = [
    	'id','title','parent','created_at','updated_at'
    ];
    public function news(){
        return $this->hasMany('App\News','news_category_id','id');
    }

    public function parent()
    {
        return $this->belongsTo('App\NewsCategory', 'parent');
    }
 
    public function children()
    {
        return $this->hasMany('App\NewsCategory', 'parent');
    }
}
