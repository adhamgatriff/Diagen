<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\Rule;
use Validator;
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
  
  public function updUsuarios(Request $req){

    $validator = $req->validate([
      'username' => 'required|string|max:255|unique:usuarios,username,'.Auth::user()->id,
      'correo' => 'required|string|email|max:255|unique:usuarios,email,'.Auth::user()->id,
      'nombre'  => 'string',
      'apellido'=> 'string'
    ]);

    $validator->sometimes('pass', 'string|min:6|confirmed', function ($input) {
      return $input->pass != null;
    });

    if ($validator->fails()) {
      flash($validator->errors())->error();
      return 'no';

    }else{

      $user = Usuario::find(Auth::user()->id);
      $user->username = $req->username;
      $user->nombre = $req->nombre;
      $user->apellido = $req->apellido;
      $user->email = $req->correo;
      $user->save();
      return 'ok';
    }
  }
}
