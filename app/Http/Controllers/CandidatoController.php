<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller{

	public function list(){
		$candidatos=Candidato::all();
		return view('candidatos',['candidatos'=>$candidatos]);
	}
	public function store(){
		//your code here
	}
	public function delete(){
		//your code here
	}
}