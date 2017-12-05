<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    protected $primary = 'id';
    protected $fillable = [
    	'id','description','about_category_id','created_at','updated_at'
    ];

    public function about_category(){
    	return $this->belongsTo('App\AboutCategory','about_category_id','id');
    }
}
