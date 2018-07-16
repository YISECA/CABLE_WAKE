<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fechas extends Model
{
    //
  protected $table = 'fecha_squi';

  public function horas(){
	
	return $this->hasMany('App\Horas','id_fecha');

   }

}

