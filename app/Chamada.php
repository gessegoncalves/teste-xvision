<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $table    = 'chamadas';	 

    protected $fillable = ['numero_id',
                            'origem',
                            'destino',
                            'tempo',
                            'custo',
                            'detalhes',
                            'data'];
   
}
