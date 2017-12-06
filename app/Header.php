<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = "header";
    protected $primary = 'id';
    protected $fillable = [
    	'id','logo','facebook','google','twitter','pinterest','phone','slogan','created_at','updated_at'
    ];
}
