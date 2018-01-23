<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model{
    
	protected $fillable =[
		'first_name','last_name','phone','mobile','address'
	];
	
    public function DebugStr(){
    	return "test";
    }
}
