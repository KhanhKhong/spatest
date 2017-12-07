<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = "footer";
    protected $primary = 'id';
    protected $fillable = [
    	'id','about_us','created_at','updated_at'
    ];
}
