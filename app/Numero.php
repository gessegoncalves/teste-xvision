<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numero extends Model
{

    protected $table    = 'numeros';	 

    protected $fillable = ['telefone','usuario','custo'];


 

   
    
    public static function getNumeros (){
         return  Numero::all();
    }


}
