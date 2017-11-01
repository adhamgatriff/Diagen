<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioDiagrama extends Model
{
    protected $table = 'usuario_diagrama';

		public function usuarios()
    {
      return $this->belongsTo('App\Usuario');
    }
    public function diagramas()
    {
      return $this->belongsTo('App\Diagrama');
    }
}
