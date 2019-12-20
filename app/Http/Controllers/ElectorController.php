<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Elector;

class ElectorController extends Controller{

	public function list(){
		$electors=Elector::all();
		return view('electors',['electors'=>$electors]);
	}
	public function store(){
		//your code here
	}
	public function delete(){
		//your code here
	}
}