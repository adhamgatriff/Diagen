<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UsuarioDiagrama;
use App\Usuario;

class Principal extends Controller
{
  public function ReturnDiagrams(){

  	$diagm = [];
  	$diag = UsuarioDiagrama::where('id_usuario',Auth::user()->id)->get();

  	foreach ($diag as $key => $value) {
  		$value_= $value->diagramas;
  		$diagm[$key] = [
  							'id' 			=> $value_->id,
  							'nombre' 	=> substr($value_->nombre,0,strpos($value_->nombre,'.')) ,
  							'tipo' 		=> $value_->tipo,
  							'act' 		=> $value_->updated_at,
  							'cread' 	=> $value_->created_at,
  							'nombreI' => Auth::user()->id.$value_->id.'.png'
  						];
  	}
  	return view('principal')->with(['datos' => $diagm, 'userData' =>Usuario::find(Auth::user()->id) ]);
  }


}
