<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutCategory extends Model
{
    protected $table = "about_category";
    protected $primary = 'id';
    protected $fillable = [
    	'id','title','parent','created_at','updated_at'
    ];
    
    public function about(){
        return $this->hasMany('App\About','about_category_id','id');
    }

    public function parent()
    {
        return $this->belongsTo('App\AboutCategory', 'parent');
    }
 
    public function children()
    {
        return $this->hasMany('App\AboutCategory', 'parent');
    }
}
