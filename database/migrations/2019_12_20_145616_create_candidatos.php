<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateCandidatos extends Migration{
	public function up(){ 
 		Schema::create('candidatos', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->string('partido');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}