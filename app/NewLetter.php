<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewLetter extends Model
{
    protected $table = "footer_newletter";
    protected $primary = 'id';
    protected $fillable = [
    	'id','email','created_at','updated_at'
    ];
}
