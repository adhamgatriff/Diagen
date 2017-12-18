<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagrama extends Model
{
    public function usuarios()
    {
        return $this->hasMany('App\UsuarioDiagrama','id_diagrama');
    }
}
