<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Generated By PlantUML Command
class Candidato extends Model{
    public function electors(){
        return $this->hasMany('App\Models\Elector');
    }
}