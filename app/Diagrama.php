<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagrama extends Model
{
	protected $table = 'diagramas';
	protected $primaryKey = 'id';

  public function usuarios()
  {
      return $this->hasMany('App\UsuarioDiagrama','id_diagrama');
  }
}
