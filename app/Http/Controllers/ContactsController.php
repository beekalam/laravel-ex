<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Person;
class ContactsController extends Controller
{
	public function index()
	{
    	$people = Person::all();
    	return  view('contacts.index')->withPeople($people);
	}


	public function create()
	{
		return view('contacts.create');
	}
}
