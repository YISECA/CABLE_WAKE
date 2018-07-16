<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $table = 'slalom_2018';


   public function horas(){
  
  return $this->belongsTo('App\Horas','hora');

   }

}



