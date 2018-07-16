<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{
    //
  protected $table = 'horas_squi';

  public function fecha()
  {
	return $this->belongsTo('App\Fechas', 'id_fecha');
  }
}

