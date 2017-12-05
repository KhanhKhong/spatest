<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImagesBanner extends Model
{
    protected $table = "slider_images_banner";
    protected $primary = 'id';
    protected $fillable = [
    	'id','title','description','image','created_at','updated_at'
    ];
}
