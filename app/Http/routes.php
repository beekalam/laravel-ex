<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Person;
Route::get('/', function () {
    // return view('welcome');
	// $p = new Person();
	// return $p->DebugStr();    
	return redirect('/contacts');
	
});

Route::get('contacts','ContactsController@index');
Route::get('contacts/create','ContactsController@create');
